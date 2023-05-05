<?php
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
    $KontrolSorgusu    = $VeritabanıBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? AND AktivasyonKodu = ?");
    $KontrolSorgusu->execute([$GelenEmail, $GelenAktivasyonKodu]);
    $KullaniciSayisi   = $KontrolSorgusu->rowCount();
    $KullaniciKaydi    = $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

    if($KullaniciSayisi>0){
    ?>

<table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="500" valign="top">
            <form action="index.php?SK=44&EmailAdresi=<?php echo $GelenEmail; ?>&AktivasyonKodu=<?php echo $GelenAktivasyonKodu; ?>" method="post">
                <table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td colspan="2" style="color:#FF9900;"><h3>Yeni Şifre Oluşturma</h3></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" style="border-bottom: 1px solid #CCCCCC;">Aşağıdan Hesabınıza Yeni Şifre oluşturabilirsiniz.</td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="bottom"  align="left">Yeni Şifre</td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top"  align="left"><input type="password" name="Sifre" class="InputAlanlari" required></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="bottom"  align="left">Yeni Şifre tekrar</td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top"  align="left"><input type="password" name="SifreTekrar" class="InputAlanlari" required></td>
                    </tr>
                    <tr height="40">
                        <td colspan="2" align="center"><input type="submit" value="Yeni Şifre Oluştur" class="YesilButon"></td>
                    </tr>
                </table>
            </form>
        </td>
        <td width="20">&nbsp;</td>
        <td width="545" valign="top">
            <table width="545" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr height="40">
                    <td style="color:#FF9900;" colspan="2"><h3>İpucu ister misiniz?</h3></td>
                </tr>
                <tr height="30">
                    <td valign="top" style="border-bottom: 1px solid #CCCCCC;" colspan="2">Bize kalırsa Yeni şifrenizi oluştururken şunlara dikkat edin </td>
                </tr>
                <tr height="5">
                    <td colspan="2" height="5" style="font-size: 5px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/Gozetleme20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Kolay Tahmin edilemesin</b></td>
                </tr>
                <tr>
                    <td colspan="2">Ardışık sayılar, Doğum tarihleri veya İsim Soyisimden oluşan şifreler çok kolay bir şekilde kırılabilir ve güvenliğinizi tehdit edebilir.</td>
                </tr>
                <tr height="8">
                    <td colspan="2" height="8" style="font-size: 8px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/KilitSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Farklı Karakterler Güvenliği artırır</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        Şifrenizi oluştururken Büyük ve Küçük harfler, Sayılar ve çeşitli Karakterlerle Şifre içeriğini zenginleştirmeniz güvenliğiniz açısından daha faydalı olacaktır.
                    </td>
                </tr>
                <tr height="5">
                    <td colspan="2" height="5" style="font-size: 5px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<?php
    }else{
        header("Location:index.php");
        exit();
    }
}else{
    header("Location:index.php");
        exit();
}
?>
