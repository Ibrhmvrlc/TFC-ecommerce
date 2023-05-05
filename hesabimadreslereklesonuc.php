<?php
if($_SESSION["Kullanici"]){
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

    if(($GelenIsimSoyisim!="") and ($GelenTelefonNumarasi!="") and ($GelenAdres!="") and ($GelenIlce!="") and ($GelenSehir!="") and ($GelenUlke!="")){
        $AdresEklemeSorgusu    = $VeritabanıBaglantisi->prepare("INSERT INTO adresler (UyeID, AdiSoyadi, Adres, Ilce, Sehir, Ulke, TelefonNumarasi) values (?, ?, ?, ?, ?, ?, ?)");
        $AdresEklemeSorgusu->execute([$KullaniciID, $GelenIsimSoyisim, $GelenAdres, $GelenIlce, $GelenSehir, $GelenUlke, $GelenTelefonNumarasi]);
        $EklemeKontrol         = $AdresEklemeSorgusu->rowCount();

        if($EklemeKontrol>0){
            header("Location:index.php?SK=72");
            exit();
        }else{
            header("Location:index.php?SK=73");
            exit();
        }
    }else{
        header("Location:index.php?SK=74"); //Eksik ALan
        exit();
    }
}else{
    header("Location:index.php");
    exit();
}
?>