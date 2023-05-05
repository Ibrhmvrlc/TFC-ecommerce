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
            <form action="index.php?SK=52" method="post">
                <table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td style="color:#FF9900;"><h3>Hesabım > Üyelik Bilgileri > Bilgilerimi Güncelle</h3></td>
                    </tr>
                    <tr height="30">
                        <td valign="top" style="border-bottom: 1px solid #CCCCCC;">Bilgilerinizi Aşağıdan görüntüleyebilir ve güncelleyebilirsiniz.</td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">E-Mail Adresi</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari" value="<?php echo $EmailAdresi; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Şifre</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="password" name="Sifre" class="InputAlanlari" value="EskiSifre"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Şifre Tekrar</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="password" name="SifreTekrar" class="InputAlanlari" value="EskiSifre"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom" align="left">İsim Soyisim</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari" value="<?php echo $IsimSoyisim; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Telefon Numarası</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari" value="<?php echo $TelefonNumarasi; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Cinsiyet<td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left">
                            <select name="Cinsiyet" class="SelectAlanlari">
                                <option value="Kadın" <?php if($Cinsiyet=='Kadın'){ ?>selected="selected"<?php } ?>>Kadın</option>
                                <option value="Erkek" <?php if($Cinsiyet=='Erkek'){ ?>selected="selected"<?php } ?>>Erkek</option>
                            </select>
                            (Hangi cinse ait ürünleri öncelikli görmek istediğinizle alakalı olarak değiştirebilirsiniz)
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="2" align="center"><input type="submit" value="Bilgilerimi Güncelle" class="YesilButon"></td>
                    </tr>
                </table>
            </form>
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