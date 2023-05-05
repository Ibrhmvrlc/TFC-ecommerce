<?php
if($_SESSION["Kullanici"]){
?>
<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3"><hr /></td>
    </tr>
    <tr>
        <td colspan="3">
            <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="203" style="text-align: center; padding: 4px 0; font-weight: bold;"><a href="index.php?SK=50" style="text-decoration: none; color: #646464;">Üyelik Bilgileri</a></td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="text-align: center; padding: 4px 0; font-weight: bold;"><a href="index.php?SK=58" style="text-decoration: none; color: #646464;">Adresler</td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="text-align: center; padding: 4px 0; font-weight: bold;"><a href="index.php?SK=59" style="text-decoration: none; color: #646464;">Favoriler</td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="text-align: center; padding: 4px 0; font-weight: bold;"><a href="index.php?SK=60" style="text-decoration: none; color: #646464;">Yorumlar</td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="text-align: center; padding: 4px 0; font-weight: bold;"><a href="index.php?SK=61" style="text-decoration: none; color: #646464;">Siparişler</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3"><hr /></td>
    </tr>
    <tr height="75">
        <td>&nbsp;</td>
    </tr>
    <tr height="100">
        <td align="center"><img src="Resimler/Hata.png" border="0"></td>
    </tr>
    <tr height="50">
    <td align="center"><b>Hata! Yorum yapma işlemi başarısız</b></td>
    </tr>
    <tr>
        <td align="center">İşlem sırasında beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.</td>
    </tr>
    <tr>
        <td class="SonucSayfalari" align="center">Hesap > Siparişler sayfasına dönmek için <a href="index.php?SK=61"><b>buraya tıklayınız.</b></a></td>
    </tr>
</table>
<?php
}else{
    header("Location:index.php");
    exit();
}
?>