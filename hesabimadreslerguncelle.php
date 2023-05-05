<?php
if($_SESSION["Kullanici"]){
    if(isset($_GET["ID"])){
        $GelenID      = Guvenlik($_GET["ID"]);
    }else{
        $GelenID      = "";
    }

    if($GelenID!=""){
        $AdresGuncellemeSorgusu  = $VeritabanıBaglantisi->prepare("SELECT * FROM adresler WHERE id = ? AND UyeID = ? LIMIT 1");
        $AdresGuncellemeSorgusu->execute([$GelenID, $KullaniciID]);
        $AdresGuncellemeSayisi   = $AdresGuncellemeSorgusu->rowCount();
        $KayitBilgisi            = $AdresGuncellemeSorgusu->fetch(PDO::FETCH_ASSOC);

        if($AdresGuncellemeSayisi){
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
            <form action="index.php?SK=63&ID=<?php echo $GelenID; ?>" method="post">
                <table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td style="color:#FF9900;"><h3>Hesabım > Adresler > Adres Güncelle</h3></td>
                    </tr>
                    <tr height="30">
                        <td valign="top" style="border-bottom: 1px solid #CCCCCC;">Lütfen güncelleyeceğiniz adresle ilgili gerekli alanları doldurunuz.</td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom" align="left">İsim Soyisim</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari" value="<?php echo $KayitBilgisi["AdiSoyadi"]; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Telefon Numarası</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari" value="<?php echo $KayitBilgisi["TelefonNumarasi"]; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Adres</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="Adres" class="InputAlanlari" value="<?php echo $KayitBilgisi["Adres"]; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">İlçe</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="Ilce" class="InputAlanlari" value="<?php echo $KayitBilgisi["Ilce"]; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Şehir</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="Sehir" class="InputAlanlari" value="<?php echo $KayitBilgisi["Sehir"]; ?>"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Ülke</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="Ulke" class="InputAlanlari" value="<?php echo $KayitBilgisi["Ulke"]; ?>"></td>
                    </tr>
                    <tr height="40">
                        <td colspan="2" align="center"><input type="submit" value="Adresi Güncelle" class="YesilButon"></td>
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
            header("Location:index.php?SK=65");
            exit();
        }
    }else{
        header("Location:index.php?SK=65");
        exit();
    }
}else{
    header("Location:index.php");
    exit();
}
?>