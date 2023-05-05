<?php
if($_SESSION["Kullanici"]){
    if(isset($_GET["ID"])){
        $GelenID      = Guvenlik($_GET["ID"]);
    }else{
        $GelenID      = "";
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

    if(isset($_POST["Adres"])){
        $GelenAdres      = Guvenlik($_POST["Adres"]);
    }else{
        $GelenAdres      = "";
    }

    if(isset($_POST["Adres"])){
        $GelenAdres      = Guvenlik($_POST["Adres"]);
    }else{
        $GelenAdres      = "";
    }

    if(isset($_POST["Ilce"])){
        $GelenIlce      = Guvenlik($_POST["Ilce"]);
    }else{
        $GelenIlce      = "";
    }

    if(isset($_POST["Sehir"])){
        $GelenSehir      = Guvenlik($_POST["Sehir"]);
    }else{
        $GelenSehir      = "";
    }

    if(isset($_POST["Ulke"])){
        $GelenUlke      = Guvenlik($_POST["Ulke"]);
    }else{
        $GelenUlke      = "";
    }

    if(($GelenID!="") and ($GelenIsimSoyisim!="") and ($GelenTelefonNumarasi!="") and ($GelenAdres!="") and ($GelenIlce!="") and ($GelenSehir!="") and ($GelenUlke!="")){
        $AdresGuncellemeSorgusu    = $VeritabanıBaglantisi->prepare("UPDATE adresler SET AdiSoyadi = ?, Adres = ?, Ilce = ?, Sehir = ?, Ulke = ?, TelefonNumarasi = ? WHERE id = ? AND UyeID = ? LIMIT 1");
        $AdresGuncellemeSorgusu->execute([$GelenIsimSoyisim, $GelenAdres, $GelenIlce, $GelenSehir, $GelenUlke, $GelenTelefonNumarasi, $GelenID, $KullaniciID]);
        $GuncellemeKontrol         = $AdresGuncellemeSorgusu->rowCount();

        if($GuncellemeKontrol>0){
            header("Location:index.php?SK=64");
            exit();
        }else{
            header("Location:index.php?SK=65");
            exit();
        }
    }else{
        header("Location:index.php?SK=66"); //Eksik ALan
        exit();
    }
}else{
    header("Location:index.php");
    exit();
}
?>