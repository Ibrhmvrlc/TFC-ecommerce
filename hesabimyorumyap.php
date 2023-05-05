<?php
if ($_SESSION["Kullanici"]) {
    if (isset($_GET["UrunID"])) {
        $GelenUrunID      = Guvenlik($_GET["UrunID"]);
    } else {
        $GelenUrunID      = "";
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

    if(($GelenUrunID!="") and ($GelenUrunAdi!="") and ($GelenUrunResmiBir!="") and ($GelenUrunTuru!="")){
?>
    <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="3">
                <hr />
            </td>
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
            <td colspan="3">
                <hr />
            </td>
        </tr>
        <tr>
            <td width="500" valign="top">
                <form action="index.php?SK=76&UrunID=<?php echo $GelenUrunID; ?>&UrunAdi=<?php echo $GelenUrunAdi; ?>&UrunResmiBir=<?php echo $GelenUrunResmiBir; ?>&UrunTuru=<?php echo $GelenUrunTuru; ?>" method="post">
                    <table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
                        <tr height="40">
                            <td style="color:#FF9900;">
                                <h3>Hesabım > Siparişler > Yorum Yap</h3>
                            </td>
                        </tr>
                        <tr height="30">
                            <td valign="top" style="border-bottom: 1px solid #CCCCCC;">Satın almış olduğunuz ürün ile ilgili fikirlerinizi paylaşabilirsiniz.</td>
                        </tr>
                        <tr height="30">
                            <td valign="bottom" align="left">Puanlama</td>
                        </tr>
                        <tr height="30">
                            <td valign="top" align="left">
                                <table width="360" align="left" border="0" cellpadding="0" cellspacing="0">
                                    <!--Bu kısım geliştirilecek-->
                                    <tr>
                                        <td width="64"><img src="Resimler/YildizBirDolu.png" border="0"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64"><img src="Resimler/YildizIkiDolu.png" border="0"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64"><img src="Resimler/YildizUcDolu.png" border="0"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64"><img src="Resimler/YildizDortDolu.png" border="0"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64"><img src="Resimler/YildizBesDolu.png" border="0"></td>
                                    </tr>
                                    <tr>
                                        <td width="64" align="center"><input type="radio" name="Puan" value="1"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64" align="center"><input type="radio" name="Puan" value="2"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64" align="center"><input type="radio" name="Puan" value="3"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64" align="center"><input type="radio" name="Puan" value="4"></td>
                                        <td width="10">&nbsp;</td>
                                        <td width="64" align="center"><input type="radio" name="Puan" value="5"></td>  
                                    </tr>
                                    <!--Buraya kadar-->
                                </table>
                            </td>
                        </tr>
                        <tr height="30">
                            <td valign="bottom" align="left">Yorum</td>
                        </tr>
                        <tr height="30">
                            <td valign="top" align="left"><textarea name="Yorum" class="YorumTextareaAlanlari"></textarea></td>
                        </tr>
                        <tr height="40">
                            <td colspan="2" align="center"><input type="submit" value="Yorumu Gönder" class="YesilButon"></td>
                        </tr>
                    </table>
                </form>
            </td>

            <td width="20">&nbsp;</td>

            <td width="545" valign="top">
                <table width="545" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td style="color:#FF9900;" colspan="2">
                            <h3>Reklam</h3>
                        </td>
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
    header("Location:index.php?SK=78");
    exit();
 }
} else {
    header("Location:index.php");
    exit();
}
?>