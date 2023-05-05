<?php
if($_SESSION["Kullanici"]){
?>
<table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
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
    <tr>
        <td width="500" valign="top">
            <table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr height="40">
                    <td style="color:#FF9900;"><h3>Hesabım > Üyelik Bilgileri</h3></td>
                </tr>
                <tr height="30">
                    <td valign="top" style="border-bottom: 1px solid #CCCCCC;">Bilgilerinizi Aşağıdan görüntüleyebilir ve güncelleyebilirsiniz.</td>
                </tr>
                <tr height="30">
                    <td valign="bottom"  align="left"><b>İsim Soyisim</b></td>
                </tr>
                <tr height="30">
                    <td valign="top"  align="left"><?php echo $IsimSoyisim; ?></td>
                </tr>
                <tr height="30">
                    <td valign="bottom"  align="left"><b>E-Mail Adresi</b></td>
                </tr>
                <tr height="30">
                    <td valign="top"  align="left"><?php echo $EmailAdresi; ?></td>
                </tr>
                <tr height="30">
                    <td valign="bottom"  align="left"><b>Telefon Numarası</b></td>
                </tr>
                <tr height="30">
                    <td valign="top"  align="left"><?php echo $TelefonNumarasi; ?></td>
                </tr>
                <tr height="30">
                    <td valign="bottom"  align="left"><b>Cinsiyet</b></td>
                </tr>
                <tr height="30">
                    <td valign="top"  align="left"><?php echo $Cinsiyet; ?></td>
                </tr>
                <tr height="30">
                    <td valign="bottom"  align="left"><b>Kayıt Tarihi</b></td>
                </tr>
                <tr height="30">
                    <td valign="top"  align="left"><?php echo TarihBul($KayitTarihi); ?></td>
                </tr>
                <tr height="30">
                    <td align="center"><a href="index.php?SK=51" class="BilgilerimiGuncelleButonu">Bilgilerimi Güncellemek İstiyorum</a></td>
                </tr>
            </table>
        </td>

        <td width="20">&nbsp;</td>

        <td width="545" valign="top">
            <table width="545" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr height="40">
                    <td style="color:#FF9900;" colspan="2"><h3>Reklam</h3></td>
                </tr>
                <tr height="30">
                    <td valign="top" style="border-bottom: 1px solid #CCCCCC;" colspan="2">Sitenin Reklam alanı</td>
                </tr>
                <tr height="5">
                    <td height="5" style="font-size: 5px;">&nbsp;</td>
                </tr>
                <tr>
                    <td><img src="Resimler/545x340Reklam.jpg" border="0"></td>
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
?>