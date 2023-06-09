<?php
require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sitesayfalari.php");


if(isset($_GET["AktivasyonKodu"])){
    $GelenAktivasyonKodu      = Guvenlik($_GET["AktivasyonKodu"]);
}else{
    $GelenAktivasyonKodu      = "";
}

if(isset($_GET["Email"])){
    $GelenEmail      = Guvenlik($_GET["Email"]);
}else{
    $GelenEmail      = "";
}

if(($GelenAktivasyonKodu!="") and ($GelenEmail!="")){
    $AktivasyonSorgusu    = $VeritabanıBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? AND AktivasyonKodu = ? AND Durumu = ?");
    $AktivasyonSorgusu->execute([$GelenEmail, $GelenAktivasyonKodu, 0]);
    $AktivasyonKontrol    = $AktivasyonSorgusu->rowCount();
        
    if($AktivasyonKontrol>0){
        $UyeGuncellemeSorgusu    = $VeritabanıBaglantisi->prepare("UPDATE uyeler SET Durumu = 1");
        $UyeGuncellemeSorgusu->execute();
        $GuncellemeKontrol       = $UyeGuncellemeSorgusu->rowCount();

        if($GuncellemeKontrol>0){
            header("Location:index.php?SK=30");
            exit();
        }else{
            header("Location:" . $SiteLinki);
            exit();
        }
    }else{
        header("Location:" . $SiteLinki);
        exit();
    }
}else{
    header("Location:" . $SiteLinki);
    exit();
}
$VeritabanıBaglantisi = null;
?>