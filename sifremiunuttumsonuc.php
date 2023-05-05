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

if(isset($_POST["TelefonNumarasi"])){
    $GelenTelefonNumarasi  = Guvenlik($_POST["TelefonNumarasi"]);
}else{
    $GelenTelefonNumarasi  = "";
}

if(($GelenEmailAdresi!="") AND ($GelenTelefonNumarasi!="")){
    $KontrolSorgusu    = $VeritabanıBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? OR TelefonNumarasi = ?");
    $KontrolSorgusu->execute([$GelenEmailAdresi, $GelenTelefonNumarasi]);
    $KullaniciSayisi   = $KontrolSorgusu->rowCount();
    $KullaniciKaydi    = $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);


        if($KullaniciSayisi>0){
            $MailIcerigiHazirla = "Merhaba Sayın " . $KullaniciKaydi['IsimSoyisim'] . "<br /><br />";
            $MailIcerigiHazirla .= "Şifre Sıfırlama talebiniz alınmıştır. Lütfen <a href='" . $SiteLinki . "/index.php?SK=43&AktivasyonKodu=" . $KullaniciKaydi['AktivasyonKodu'] . "&Email=" 
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
                $MailGonder->addAddress(DonusumleriGeriDondur($GelenEmailAdresi), DonusumleriGeriDondur($KullaniciKaydi['IsimSoyisim']));
                $MailGonder->addReplyTo(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
                $MailGonder->isHTML(true);
                $MailGonder->Subject = DonusumleriGeriDondur($SiteAdi) . 'Sifre Sifirlama';
                $MailGonder->MsgHTML($MailIcerigiHazirla);
                $MailGonder->send();

                header("Location:index.php?SK=39");
                exit();
                
                }catch(Exception $e) {
                    header("Location:index.php?SK=40");
                    exit();
                }
    }else{
        header("Location:index.php?SK=41");
        exit();
    }
}else{
    header("Location:index.php?SK=42");
    exit();
}
?>