<?php
if($_SESSION["Kullanici"]){
    if (isset($_GET["UrunID"])) {
        $GelenUrunID    = Guvenlik($_GET["UrunID"]);
    } else {
        $GelenUrunID    = "";
    }

    if (isset($_GET["UrunAdi"])) {
        $GelenUrunAdi    = Guvenlik($_GET["UrunAdi"]);
    } else {
        $GelenUrunAdi    = "";
    }

    if (isset($_GET["UrunResmiBir"])) {
        $GelenUrunResmiBir    = Guvenlik($_GET["UrunResmiBir"]);
    } else {
        $GelenUrunResmiBir    = "";
    }

    if (isset($_GET["UrunTuru"])) {
        $GelenUrunTuru   = Guvenlik($_GET["UrunTuru"]);
    } else {
        $GelenUrunTuru    = "";
    }

    if(isset($_POST["Puan"])){
        $GelenPuan      = Guvenlik($_POST["Puan"]);
    }else{
        $GelenPuan      = "";
    }

    if(isset($_POST["Yorum"])){
        $GelenYorum     = Guvenlik($_POST["Yorum"]);
    }else{
        $GelenYorum     = "";
    }

    if(($GelenUrunID!="") and ($GelenUrunAdi!="") and ($GelenUrunResmiBir!="") and ($GelenUrunTuru!="") and ($GelenPuan!="") and ($GelenYorum!="")){
        $YorumKayitSorgusu    = $VeritabanıBaglantisi->prepare("INSERT INTO yorumlar (UrunID, UrunAdi, UrunResmiBir, UrunTuru, UyeId, Puan, YorumMetni, YorumTarihi, YorumIPAdresi) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $YorumKayitSorgusu->execute([$GelenUrunID, $GelenUrunAdi, $GelenUrunResmiBir, $GelenUrunTuru, $KullaniciID, $GelenPuan, $GelenYorum, $ZamanDamgasi, $IPAdresi]);
        $YorumKayitKontrol         = $YorumKayitSorgusu->rowCount();

        if($YorumKayitKontrol>0){
            $UrunGuncellemeSorgusu    = $VeritabanıBaglantisi->prepare("UPDATE urunler SET YorumSayisi=YorumSayisi+1, ToplamYorumPuani=ToplamYorumPuani+? WHERE id = ? LIMIT 1");
            $UrunGuncellemeSorgusu->execute([$GelenPuan, $GelenUrunID]);
            $UrunGuncellemeKontrol         = $UrunGuncellemeSorgusu->rowCount();

            if($UrunGuncellemeKontrol>0){
                header("Location:index.php?SK=77");
                exit();
            }else{
                header("Location:index.php?SK=78");
                exit();
            }   
        }else{
            header("Location:index.php?SK=78");
            exit();
        }
    }else{
        header("Location:index.php?SK=79"); //Eksik ALan
        exit();
    }
}else{
    header("Location:index.php");
    exit();
}
?>