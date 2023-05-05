<?php
if(isset($_SESSION["Kullanici"])){
?>
<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr height="75">
        <td>&nbsp;</td>
    </tr>
    <tr height="100">
        <td align="center"><img src="Resimler/Eksik.png" border="0"></td>
    </tr>
    <tr height="50">
    <td align="center"><b>Dikkat! Herhangi bir bilgi girişi yapmadınız.</b></td>
    </tr>
    <tr>
        <td align="center">Lütfen tekrar deneyiniz, gerekli alanları boş bırakmayınız.</td>
    </tr>
    <tr>
        <td class="SonucSayfalari" align="center">Giriş Yap sayfasına geri dönmek için lütfen <a href="index.php?SK=31"><b>buraya tıklayınız. <br /></b></a>Anasayfaya dönmek için Lütfen <a href="index.php"><b>buraya tıklayınız.</b></a></td>
    </tr>
</table>
<?php
}else{
    header("Location:index.php");
    exit();
}
?>