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
        <td align="center"><img src="Resimler/Eksik.png" border="0"></td>
    </tr>
    <tr height="50">
    <td align="center"><b>Dikkat! Eksik bilgi girişi.</b></td>
    </tr>
    <tr>
        <td align="center">Lütfen tekrar deneyiniz. Adres güncellerken gerekli alanları boş bırakmayınız.</td>
    </tr>
    <tr>
        <td class="SonucSayfalari" align="center">Hesabım > Adresler > Adres Güncelle sayfasına dönmek için Lütfen <a href="index.php?SK=62"><b>buraya tıklayınız.</b></a></td>
    </tr>
</table>
<?php
}else{
    header("Location:index.php");
    exit();
}
?>