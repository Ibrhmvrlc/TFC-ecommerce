<?php
if (isset($_SESSION["Kullanici"])) {

$SayfalamaIcinSolVeSagButonSayisi   = 2;
$SayfaBasinaGosterilecekKayitSayisi = 5;
$ToplamKayitSayisiSorgusu           = $VeritabanıBaglantisi->prepare("SELECT DISTINCT SiparisNumarasi FROM siparisler WHERE UyeID = ? ORDER BY SiparisNumarasi DESC");
$ToplamKayitSayisiSorgusu->execute([$KullaniciID]);
$ToplamKayitSayisi                  = $ToplamKayitSayisiSorgusu->rowCount();
$SayfalamayaBaslanacakKayitSayisi   = ($Sayfalama*$SayfaBasinaGosterilecekKayitSayisi)-$SayfaBasinaGosterilecekKayitSayisi;
$BulunanSayfaSayisi                 = ceil($ToplamKayitSayisi/$SayfaBasinaGosterilecekKayitSayisi);
?>
    <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <hr />
            </td>
        </tr>
        <tr>
            <td>
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
            <td>
                <hr />
            </td>
        </tr>
        <tr>
            <td width="1065" valign="top">
                <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td colspan="9" style="color:#FF9900;">
                            <h3>Hesabım > Siparişler</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="9" valign="top" style="border-bottom: 1px solid #CCCCCC;">Tüm Siparişlerinizi bu alandan görüntüleyebilirsiniz.</td>
                    </tr>
                    <tr height="30">
                        <td width="125" style="text-align: center;">&nbsp;<b>Sipariş Numarası</b></td>
                        <td style="text-align: center;">&nbsp;</td>
                        <td width="90" style="text-align: center;">&nbsp;<b>Resim</b></td>
                        <td width="400" style="text-align: left;">&nbsp;<b>Adı</b></td>
                        <td width="100" style="text-align: center;">&nbsp;<b>Fiyat</b></td>
                        <td width="50" style="text-align: center;">&nbsp;<b>Adet</b></td>
                        <td width="100" style="text-align: center;">&nbsp;<b>Tutar</b></td>
                        <td width="50" style="text-align: center;">&nbsp;<b>Yorum</b></td>
                        <td width="150" style="text-align: center;">&nbsp;<b>Kargo Durumu</b></td>
                    </tr>
                    <?php
                    $SiparisNumaralariSorgusu      = $VeritabanıBaglantisi->prepare("SELECT DISTINCT SiparisNumarasi FROM siparisler WHERE UyeID = ? ORDER BY SiparisNumarasi DESC LIMIT 
                    $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi");
                    $SiparisNumaralariSorgusu->execute([$KullaniciID]);
                    $SiparisNumaralariSayisi       = $SiparisNumaralariSorgusu->rowCount();
                    $SiparisNumaralariKayitlari    = $SiparisNumaralariSorgusu->fetchAll(PDO::FETCH_ASSOC);

                  
                    if ($SiparisNumaralariSayisi > 0) {
                        foreach ($SiparisNumaralariKayitlari as $SiparisNumaralariSatirlar) {
                            $SiparisNo = DonusumleriGeriDondur($SiparisNumaralariSatirlar["SiparisNumarasi"]);  

                            $SiparisSorgusu             = $VeritabanıBaglantisi->prepare("SELECT * FROM siparisler WHERE UyeID = ? AND SiparisNumarasi = ? ORDER BY id ASC");
                            $SiparisSorgusu->execute([$KullaniciID, $SiparisNo]);
                            $SiparisSorgusuKayitlari    = $SiparisSorgusu->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($SiparisSorgusuKayitlari as $SiparisSatirlar) {
                                $UrunTuru = DonusumleriGeriDondur($SiparisSatirlar["UrunTuru"]);
                                    if($UrunTuru == "ErkekBileklik"){
                                        $ResimKlasoruAdi = "Erkek";
                                    }else{
                                        $ResimKlasoruAdi = "Kadin";
                                    }


                                    $KargoDurumu = DonusumleriGeriDondur($SiparisSatirlar["KargoDurumu"]);
                                        if($KargoDurumu == 0){
                                            $KargoDurumuYazdir = "Hazırlanıyor";
                                        }else{
                                            $KargoDurumuYazdir = DonusumleriGeriDondur($SiparisSatirlar["KargoDurumu"]);
                                        }
                    ?>
                            <tr height="30">
                                <td width="125" style="text-align: center;">&nbsp;#<?php echo DonusumleriGeriDondur($SiparisSatirlar["SiparisNumarasi"]); ?></td>
                                <td height="125" style="text-align: center;">&nbsp;</td>
                                <td width="90" style="text-align: center;" valign="middle">
                                    &nbsp;<img src="Resimler/UrunResimleri/<?php echo $ResimKlasoruAdi; ?>/<?php echo DonusumleriGeriDondur($SiparisSatirlar["UrunResmiBir"]); ?>" border="0" width="60" height="80">
                                </td>
                                <td width="400" style="text-align: left;">&nbsp;<?php echo DonusumleriGeriDondur($SiparisSatirlar["UrunAdi"]); ?></td>
                                <td width="100" style="text-align: center;">&nbsp;<?php echo FiyatBicimlendir(DonusumleriGeriDondur($SiparisSatirlar["UrunFiyati"])); ?> TL</td>
                                <td width="50" style="text-align: center;">&nbsp;<?php echo DonusumleriGeriDondur($SiparisSatirlar["UrunAdedi"]); ?></td>
                                <td width="100" style="text-align: center;">&nbsp;<?php echo FiyatBicimlendir(DonusumleriGeriDondur($SiparisSatirlar["ToplamUrunFiyatı"])); ?> TL</td>
                                <td width="50" style="text-align: center;">
                                    &nbsp;
                                    <a href="index.php?SK=75&UrunID=<?php echo DonusumleriGeriDondur($SiparisSatirlar['UrunID']); ?>&UrunAdi=<?php echo DonusumleriGeriDondur($SiparisSatirlar['UrunAdi']); ?>&UrunResmiBir=<?php echo DonusumleriGeriDondur($SiparisSatirlar['UrunResmiBir']); ?>&UrunTuru=<?php echo DonusumleriGeriDondur($SiparisSatirlar['UrunTuru']); ?>">
                                        <img src="Resimler/Yorumlar20x20.png" border="0">
                                    </a>
                                </td>
                                <td width="150" style="text-align: center;">&nbsp;<?php echo $KargoDurumuYazdir; ?></td>
                            </tr>
                    <?php
                            }
                    ?>
                            <tr height="5">
                                <td colspan="9" style="border-bottom: 1px solid #CCCCCC;"></td>
                            </tr>
                    <?php
                        }
                        if($BulunanSayfaSayisi>1){
                    ?>
                            <tr height="50">
                                <td colspan="9" align="center">
                                    <div class="SayfalamaAlaniKapsayicisi">
                                        <div class="SayfalamaAlaniIciMetinAlaniKapsayicisi">
                                            Toplam <?php echo $BulunanSayfaSayisi; ?> sayfada, <?php echo $ToplamKayitSayisi; ?> adet kayıt bulunmaktadır.
                                        </div>

                                        <div class="SayfalamaAlaniIciNumaraAlaniKapsayicisi">
                                           <?php 
                                           if($Sayfalama>1){
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=61&SYF=1'><<</a> </span>";
                                            $SayfalamaIcinSayfaDegeriniBirGeriAl = $Sayfalama-1;
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=61&SYF=" . $SayfalamaIcinSayfaDegeriniBirGeriAl . "'><</a> </span>";
                                           }

                                           for($SayfalamIcinSayfaIndexDegeri=$Sayfalama-$SayfalamaIcinSolVeSagButonSayisi; $SayfalamIcinSayfaIndexDegeri<=$Sayfalama+$SayfalamaIcinSolVeSagButonSayisi; $SayfalamIcinSayfaIndexDegeri++){
                                            if(($SayfalamIcinSayfaIndexDegeri>0) and ($SayfalamIcinSayfaIndexDegeri<=$BulunanSayfaSayisi)){
                                             if($Sayfalama==$SayfalamIcinSayfaIndexDegeri){
                                                echo "<span class='SayfalamaAktif'>" . $SayfalamIcinSayfaIndexDegeri . "</span>";
                                             }else{
                                                echo "<span class='SayfalamaPasif'><a href='index.php?SK=61&SYF=" . $SayfalamIcinSayfaIndexDegeri . "'> " . $SayfalamIcinSayfaIndexDegeri . "</a> </span>";
                                             }
                                            }
                                           }
                                           if($Sayfalama!=$BulunanSayfaSayisi){
                                            $SayfalamaIcinSayfaDegeriniBirIleriAl = $Sayfalama+1;
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=61&SYF=" . $SayfalamaIcinSayfaDegeriniBirIleriAl . "'>></a> </span>";
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=61&SYF=" . $BulunanSayfaSayisi . "'>>></a> </span>";
                                           }
                                           ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        }
                     } else {
                    ?>
                        <tr height="50">
                            <td colspan="8" align="left">Siparişiniz Bulunmamaktadır.</td>
                        </tr>
                    <?php
                    };
                    ?>
                </table>
            </td>
        </tr>
    </table>
<?php
} else {
    header("Location:index.php");
    exit();
}
?>