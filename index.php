<?php
session_start();
ob_start();
require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sitesayfalari.php");
if (isset($_REQUEST["SK"])) {
    $SayfaKoduDegeri = SayiliIcerikleriFiltrele($_REQUEST["SK"]);
} else {
    $SayfaKoduDegeri = 0;
}

if (isset($_REQUEST["SYF"])) {
    $Sayfalama = SayiliIcerikleriFiltrele($_REQUEST["SYF"]);
} else {
    $Sayfalama = 1;
}
?>
<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 Days">
    <meta charset="UTF-8">
    <title><?php echo $SiteTitle; ?></title>
    <link type="image/png" rel="icon" href="Resimler/Favicon.png">
    <meta name="description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
    <meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>">
    <script type="text/javascript" src="Frameworks/JQuery/jquery-3.6.3.min.js" language="javascript"></script>
    <link type="text/css" rel="stylesheet" href="Ayarlar/stil.css">
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
</head>

<body>
    <table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="40">
            <td><img src="Resimler/HeaderMesajResmi.png" border="0"></td>
        </tr>
        <tr height="110">
            <td>
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0" style="margin: -12px 0 0 0">
                    <tr bgcolor="#0088CC">
                        <td>&nbsp;</td>
                        <?php
                        if (isset($_SESSION["Kullanici"])) {
                        ?>
                            <td width="20"><a href="index.php?SK=50"><img src="Resimler/Kullanici16x16.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="70" class="MaviAlanMenusu"><a href="index.php?SK=50">Hesabım</a></td>
                            <td width="20"><a href="index.php?SK=49"><img src="Resimler/Cikis16x16.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="85" class="MaviAlanMenusu"><a href="index.php?SK=49">Çıkış Yap</a></td>
                        <?php
                        } else {
                        ?>
                            <td width="20"><a href="index.php?SK=31"><img src="Resimler/KilitBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="70" class="MaviAlanMenusu"><a href="index.php?SK=31">Giriş Yap</a></td>
                            <td width="20"><a href="ndex.php?SK=22"><img src="Resimler/KullaniciEkleBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="85" class="MaviAlanMenusu"><a href="index.php?SK=22">Yeni Üye Ol</a></td>
                        <?php
                        }
                        ?>
                        <td width="20"><a href="xxxxx"><img src="Resimler/SepetBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="103" class="MaviAlanMenusu"><a href="xxxxx">Alışveriş Sepeti</a></td>
                    </tr>
                </table>
                <table width="1065" height="80" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="192"><a href="index.php"><img src="Resimler/<?php echo DonusumleriGeriDondur($SiteLogo); ?>" border="0"></a></td>
                        <td>
                            <table width="873" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="333">&nbsp;</td>
                                    <td class="AnaMenu" width="128"><a href="index.php">Ana Sayfa</a></td>
                                    <td class="AnaMenu" width="138"><a href="index.php?SK=83">Kadın Bileklik</a></td>
                                    <td class="AnaMenu" width="138"><a href="index.php?SK=85">Erkek Bileklik</a></td>
                                    <td class="AnaMenu" width="136"><a href="index.php?SK=87">Aksesuar Doğal Taş</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center">
                            <?php
                            if ((!$SayfaKoduDegeri) or ($SayfaKoduDegeri == "") or ($SayfaKoduDegeri == 0)) {
                                include($Sayfa[0]);
                            } else {
                                include($Sayfa[$SayfaKoduDegeri]);
                            }
                            ?>
                            <br />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="210">
            <td>
                <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9F9F9">
                    <tr height="30">
                        <td width="250" style="border-bottom: 1px solid #CCCCCC;">&nbsp;<b>Kurumsal</b></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px solid #CCCCCC;"><b>Üyelik & Hizmetler</b></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px solid #CCCCCC;"><b>Sözleşmeler</b></td>
                        <td width="21">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px solid #CCCCCC;"><b>Bizi Takip Edin</b></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=1">Hakkımızda</a></td>
                        <td>&nbsp;</td>
                        <?php
                        if (isset($_SESSION["Kullanici"])) {
                        ?>
                            <td width="70" class="AltMenusu"><a href="index.php?SK=50">Hesabım</a></td>
                        <?php
                        } else {
                        ?>
                            <td class="AltMenusu"><a href="index.php?SK=31">Giriş Yap</a></td>
                        <?php
                        }
                        ?>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=2">Üyelik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="xxxxx"><img src="Resimler/Instagram16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" target="_blank">Instagram</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=8">Banka Hesaplarımız</a></td>
                        <td>&nbsp;</td>
                        <?php
                        if (isset($_SESSION["Kullanici"])) {
                        ?>
                            <td width="70" class="AltMenusu"><a href="index.php?SK=49">Çıkış Yap</a></td>
                        <?php
                        } else {
                        ?>
                            <td class="AltMenusu"><a href="index.php?SK=22">Yeni Üye Ol</a></td>
                        <?php
                        }
                        ?>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=3">Kullanım Koşulları</a></td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="xxxxx"><img src="Resimler/Pinterest16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest); ?>" target="_blank">Pinterest</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=9">Havale Bildirim Formu</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=21">Sık Sorulan Sorular</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=4">Gizlilik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=14">Kargom Nerede?</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=5">Mesafeli Satış Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=16">İletişim</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=6">Teslimat</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=7">İptal & İade & Değişim</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr height="30">
            <td>
                <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center"><?php echo DonusumleriGeriDondur($SiteCopyrightMetni); ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="30">
            <td>
                <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center"><img src="Resimler/RapidSSLLogo32x12.jpg" border="0" style="margin-right: 5px;"><img src="Resimler/InternetteGuuvenliAlisveris28x12.jpg" border="0" style="margin-right: 5px;">
                            <img src="Resimler/BonusCard41x12.jpg" border="0" style="margin-right: 5px;"><img src="Resimler/MaximumCard50x12.jpg" border="0" style="margin-right: 5px;">
                            <img src="Resimler/WorldCard48x12.jpg" border="0" style="margin-right: 5px;"><img src="Resimler/AxessCard46x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/CardFinans78x12.png" border="0" style="margin-right: 5px;">
                            <img src="Resimler/ParafCard19x12.jpg" border="0" style="margin-right: 5px;"><img src="Resimler/Visa37x12.png" border="0">
                            <img src="Resimler/MasterCard21x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/AmericanExpress20x12.png" border="0">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
<?php
$VeritabanıBaglantisi = null;
ob_end_flush();
?>