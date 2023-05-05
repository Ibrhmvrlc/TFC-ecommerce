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

$MD5liSifre     = md5($GelenSifre);

if(($GelenEmailAdresi!="") and ($GelenSifre!="")){
    $KontrolSorgusu    = $VeritabanıBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? AND Sifre = ?");
    $KontrolSorgusu->execute([$GelenEmailAdresi, $MD5liSifre]);
    $KullaniciSayisi   = $KontrolSorgusu->rowCount();
    $KullaniciKaydi    = $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

    if($KullaniciSayisi>0){
        if($KullaniciKaydi["Durumu"]=="1"){

            $_SESSION["Kullanici"] = $GelenEmailAdresi;

            if($_SESSION["Kullanici"] == $GelenEmailAdresi){
                header("Location:index.php?SK=50");
                exit();
            }else{
                header("Location:index.php?SK=33");
                exit();
            }
        }else{
            $MailIcerigiHazirla = "Merhaba Sayın " . $KullaniciKaydi['IsimSoyisim'] . "<br /><br />";
            $MailIcerigiHazirla .= "Five Club'a Hoşgeldiniz. Üyelik Aktivasyonu için lütfen <a href='" . $SiteLinki . "/aktivasyon.php?AktivasyonKodu=" . $KullaniciKaydi['AktivasyonKodu'] . "&Email=" 
            . $KullaniciKaydi['EmailAdresi'] . "'>buraya tıklayınız.</a><br /><br />Saygılarımızla, Keyifli Alışverişler.<br />" . $SiteAdi;

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
                $MailGonder->addAddress(DonusumleriGeriDondur($KullaniciKaydi['EmailAdresi']), DonusumleriGeriDondur($KullaniciKaydi['IsimSoyisim']));
                $MailGonder->addReplyTo(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
                $MailGonder->isHTML(true);
                $MailGonder->Subject = DonusumleriGeriDondur($SiteAdi) . 'Yeni Uyelik Aktivasyonu';
                $MailGonder->MsgHTML($MailIcerigiHazirla);
                $MailGonder->send();

                header("Location:index.php?SK=36");
                exit();
                
                }catch(Exception $e) {
                    header("Location:index.php?SK=33");
                    exit();
                }
        }
    }else{
        header("Location:index.php?SK=34");
        exit();
    }
}else{
    header("Location:index.php?SK=35");
    exit();
}
?>