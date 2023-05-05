<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Frameworks/PHPMailer/src/Exception.php';
require 'Frameworks/PHPMailer/src/PHPMailer.php';
require 'Frameworks/PHPMailer/src/SMTP.php';


if(isset($_POST["EmailAdresi"])){
    $GelenEmailAdresi      = Guvenlik($_POST["EmailAdresi"]);
}else{
    $GelenEmailAdresi      = "";
}

if(isset($_POST["Sifre"])){
    $GelenSifre      = Guvenlik($_POST["Sifre"]);
}else{
    $GelenSifre      = "";
}

if(isset($_POST["SifreTekrar"])){
    $GelenSifreTekrar      = Guvenlik($_POST["SifreTekrar"]);
}else{
    $GelenSifreTekrar      = "";
}

if(isset($_POST["IsimSoyisim"])){
    $GelenIsimSoyisim      = Guvenlik($_POST["IsimSoyisim"]);
}else{
    $GelenIsimSoyisim      = "";
}

if(isset($_POST["TelefonNumarasi"])){
    $GelenTelefonNumarasi      = Guvenlik($_POST["TelefonNumarasi"]);
}else{
    $GelenTelefonNumarasi      = "";
}

if(isset($_POST["Cinsiyet"])){
    $GelenCinsiyet      = Guvenlik($_POST["Cinsiyet"]);
}else{
    $GelenCinsiyet      = "";
}

if(isset($_POST["SozlesmeOnay"])){
    $GelenSozlesmeOnay      = Guvenlik($_POST["SozlesmeOnay"]);
}else{
    $GelenSozlesmeOnay      = "";
}

$AktivasyonKodu = AktivasyonKoduUret();
$MD5liSifre     = md5($GelenSifre);

if(($GelenEmailAdresi!="") and ($GelenSifre!="") and ($GelenSifreTekrar!="") and ($GelenIsimSoyisim!="") and ($GelenTelefonNumarasi!="") and ($GelenCinsiyet!="")){
    if($GelenSozlesmeOnay==""){
        header("Location:index.php?SK=29");
        exit();
    }else{
        if($GelenSifre!=$GelenSifreTekrar){
            header("Location:index.php?SK=28");
            exit();
        }else{
            $KontrolSorgusu    = $VeritabanıBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ?");
            $KontrolSorgusu->execute([$GelenEmailAdresi]);
            $KullaniciSayisi   = $KontrolSorgusu->rowCount();
        
            if($KullaniciSayisi>0){
                header("Location:index.php?SK=27");
                exit();
            }else{
                $UyeEklemeSorgusu    = $VeritabanıBaglantisi->prepare("INSERT INTO uyeler (EmailAdresi, Sifre, IsimSoyisim, TelefonNumarasi, Cinsiyet, Durumu, KayitTarihi, KayitIPAdresi 
                ,AktivasyonKodu) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $UyeEklemeSorgusu->execute([$GelenEmailAdresi, $MD5liSifre, $GelenIsimSoyisim, $GelenTelefonNumarasi, $GelenCinsiyet, 0, $ZamanDamgasi, $IPAdresi, $AktivasyonKodu]);
                $KayitKontrol        = $UyeEklemeSorgusu->rowCount();
            
                if($KayitKontrol>0){

                    $MailIcerigiHazirla = "Merhaba Sayın " . $GelenIsimSoyisim . "<br /><br />";
                    $MailIcerigiHazirla .= "Five Club'a Hoşgeldiniz. Üyelik Aktivasyonu için lütfen <a href='" . $SiteLinki . "/aktivasyon.php?AktivasyonKodu=" . $AktivasyonKodu . "&Email=" 
                    . $GelenEmailAdresi . "'>buraya tıklayınız.</a><br /><br />Saygılarımızla, Keyifli Alışverişler.<br />" . $SiteAdi;

                    $MailGonder = new PHPMailer(true);
                    try {
                        $MailGonder->SMTPDebug   = 0;
                        $MailGonder->isSMTP();
                        $MailGonder->Host        = DonusumleriGeriDondur($SiteEmailHostAdresi);
                        $MailGonder->SMTPAuth    = true;
                        $MailGonder->charset     = "utf8";
                        $MailGonder->Username    = DonusumleriGeriDondur($SiteEmailAdresi);
                        $MailGonder->Password    = DonusumleriGeriDondur($SiteEmailSifresi);
                        $MailGonder->SMTPSecure  = 'tls';
                        $MailGonder->Port        = 587;
                        $MailGonder->SMTPOptions = array ('ssl' => array (
                                                            'verify_peer' => false,
                                                            'verify_peer_name' => false,
                                                            'allow_self_signed' => true
                                                            )
                                                        );
                        $MailGonder->setFrom(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
                        $MailGonder->addAddress(DonusumleriGeriDondur($GelenEmailAdresi), DonusumleriGeriDondur($GelenIsimSoyisim));
                        $MailGonder->addReplyTo(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
                        $MailGonder->isHTML(true);
                        $MailGonder->Subject = DonusumleriGeriDondur($SiteAdi) . 'Yeni Uyelik Aktivasyonu';
                        $MailGonder->MsgHTML($MailIcerigiHazirla);
                        $MailGonder->send();

                        header("Location:index.php?SK=24");
                        exit();
                        
                        }catch(Exception $e) {
                            header("Location:index.php?SK=25");
                            exit();
                        }
                }else{
                    header("Location:index.php?SK=25");
                    exit();
                }
            }
        }
    }
}else{
    header("Location:index.php?SK=26");
    exit();
}
?>