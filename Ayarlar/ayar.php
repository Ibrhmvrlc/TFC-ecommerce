<?php
try{
    $VeritabanıBaglantisi = new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8", "root", "");
}catch(PDOException $Hata){
    //echo "Bağlantı Hatası<br />" . $Hata->getMessage(); // Bu alanı kapat. Site hata yaparsa kullanıcılar hata değerini görmesin.
    die();
}

$AyarlarSorgusu = $VeritabanıBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi     = $AyarlarSorgusu->rowCount();
$Ayarlar         = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);
if($AyarSayisi>0){
    $SiteAdi                = $Ayarlar["SiteAdi"];
    $SiteTitle              = $Ayarlar["SiteTitle"];
    $SiteDescription        = $Ayarlar["SiteDescription"];
    $SiteKeywords           = $Ayarlar["SiteKeywords"];
    $SiteCopyrightMetni     = $Ayarlar["SiteCopyrightMetni"];
    $SiteLogo               = $Ayarlar["SiteLogo"];
    $SiteLinki              = $Ayarlar["SiteLinki"];
    $SiteEmailAdresi        = $Ayarlar["SiteEmailAdresi"];
    $SiteEmailSifresi       = $Ayarlar["SiteEmailSifresi"];
    $SiteEmailHostAdresi    = $Ayarlar["SiteEmailHostAdresi"];
    $SosyalLinkInstagram    = $Ayarlar["SosyalLinkInstagram"];
    $SosyalLinkPinterest    = $Ayarlar["SosyalLinkPinterest"];
}else{
    //echo "Site Ayar Sorgusu Hatalı<br />" . $Hata->getMessage(); // Bu alanı kapat. Site hata yaparsa kullanıcılar hata değerini görmesin.
    die();
}

$MetinlerSorgusu = $VeritabanıBaglantisi->prepare("SELECT * FROM sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinlerSayisi   = $MetinlerSorgusu->rowCount();
$Metinler         = $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);

if($MetinlerSayisi>0){
    $HakkimizdaMetni                = $Metinler["HakkimizdaMetni"];
    $UyelikSozlesmesiMetni          = $Metinler["UyelikSozlesmesiMetni"];
    $KullanimKosullariMetni         = $Metinler["KullanimKosullariMetni"];
    $GizlilikSozlesmesiMetni        = $Metinler["GizlilikSozlesmesiMetni"];
    $MesafeliSatisSozlesmesiMetni   = $Metinler["MesafeliSatisSozlesmesiMetni"];
    $TeslimatMetni                  = $Metinler["TeslimatMetni"];
    $IptalIadeDegisimMetni          = $Metinler["IptalIadeDegisimMetni"];
}else{
    //echo "Metinler Sorgusu Hatalı<br />" . $Hata->getMessage(); // Bu alanı kapat. Site hata yaparsa kullanıcılar hata değerini görmesin.
    die();
}

if(isset($_SESSION["Kullanici"])){
    $KullaniciSorgusu = $VeritabanıBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? LIMIT 1");
    $KullaniciSorgusu->execute([$_SESSION['Kullanici']]);
    $KullaniciSayisi   = $KullaniciSorgusu->rowCount();
    $Kullanici         = $KullaniciSorgusu->fetch(PDO::FETCH_ASSOC);

    if($MetinlerSayisi>0){
        $KullaniciID        = $Kullanici["id"];
        $EmailAdresi        = $Kullanici["EmailAdresi"];
        $Sifre              = $Kullanici["Sifre"];
        $IsimSoyisim        = $Kullanici["IsimSoyisim"];
        $TelefonNumarasi    = $Kullanici["TelefonNumarasi"];
        $Cinsiyet           = $Kullanici["Cinsiyet"];
        $Durumu             = $Kullanici["Durumu"];
        $KayitTarihi        = $Kullanici["KayitTarihi"];
        $KayitIPAdresi      = $Kullanici["KayitIPAdresi"];
        $AktivasyonKodu     = $Kullanici["AktivasyonKodu"];
    }else{
        //echo "Kullanici Sorgusu Hatalı<br />" . $Hata->getMessage(); // Bu alanı kapat. Site hata yaparsa kullanıcılar hata değerini görmesin.
        die();
    }
}
?>