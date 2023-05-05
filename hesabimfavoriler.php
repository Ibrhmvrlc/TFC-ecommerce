<?php
if (isset($_SESSION["Kullanici"])) {

$SayfalamaIcinSolVeSagButonSayisi   = 2;
$SayfaBasinaGosterilecekKayitSayisi = 5;
$ToplamKayitSayisiSorgusu           = $VeritabanıBaglantisi->prepare("SELECT * FROM favoriler WHERE UyeID = ? ORDER BY id DESC");
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
                        <td colspan="4" style="color:#FF9900;">
                            <h3>Hesabım > Favoriler</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="4" valign="top" style="border-bottom: 1px solid #CCCCCC;">Tüm Favorilerinize eklediğiniz tüm ürünleri bu alandan görüntüleyebilirsiniz.</td>
                    </tr>
                    <tr height="40">
                        <td width="50" style="text-align: left;">&nbsp;</td>
                        <td width="100" style="text-align: left;">&nbsp;<b>Resim</b></td>
                        <td width="820" style="text-align: left;">&nbsp;<b>Adı</b></td>
                        <td width="100" style="text-align: center;">&nbsp;<b>Fiyat</b></td>
                    </tr>
                    <?php
                    $FavorilerSorgusu   = $VeritabanıBaglantisi->prepare("SELECT * FROM favoriler WHERE UyeID = ? ORDER BY id DESC LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi");
                    $FavorilerSorgusu->execute([$KullaniciID]);
                    $FavroriSayisi      = $FavorilerSorgusu->rowCount();
                    $FavoriKayitlari    = $FavorilerSorgusu->fetchAll(PDO::FETCH_ASSOC);

                    if ($FavroriSayisi > 0) {
                        foreach ($FavoriKayitlari as $FavoriSatirlar) {

                            $UrunlerSorgusu   = $VeritabanıBaglantisi->prepare("SELECT * FROM urunler WHERE id = ? LIMIT 1");
                            $UrunlerSorgusu->execute([$FavoriSatirlar["UrunID"]]);
                            $UrunKayidi       = $UrunlerSorgusu->fetch(PDO::FETCH_ASSOC);

                            $UrununAdi          = $UrunKayidi["UrunAdi"];
                            $UrununUrunTuru     = $UrunKayidi["UrunTuru"];
                            $UrununUrunResmi    = $UrunKayidi["UrunResmiBir"];
                            $UrununUrunFiyati   = $UrunKayidi["UrunFiyati"];
                            $UrununParaBirimi   = $UrunKayidi["ParaBirimi"];
                            
                                if($UrununUrunTuru == "ErkekBileklik"){
                                    $ResimKlasoruAdi = "Erkek";
                                }else{
                                    $ResimKlasoruAdi = "Kadin";
                                }
                    ?>
                            <tr height="30">
                                <td width="50" style="text-align: left; border-bottom: 1px solid #EEEEEE;">&nbsp;<a href="index.php?SK=80&ID=<?php echo DonusumleriGeriDondur($FavoriSatirlar['id']); ?>"><img src="Resimler/CopKutusu20x20.png" border="0"></a></td>
                                <td width="100" style="text-align: left; border-bottom: 1px solid #EEEEEE; padding: 7px 0 1px 0;">
                                    &nbsp;
                                    <a href="index.php?SK=82&ID=<?php echo DonusumleriGeriDondur($UrunKayidi['id']); ?>">
                                        <img src="Resimler/UrunResimleri/<?php echo $ResimKlasoruAdi; ?>/<?php echo DonusumleriGeriDondur($UrununUrunResmi); ?>" border="0" width="60" height="80">
                                    </a>
                                </td>
                                <td width="820" style="text-align: left; border-bottom: 1px solid #EEEEEE;">
                                    &nbsp;
                                    <a href="index.php?SK=82&ID=<?php echo DonusumleriGeriDondur($UrunKayidi['id']); ?>" style="text-decoration: none; color: #646464;"><?php echo DonusumleriGeriDondur($UrununAdi); ?></a>
                                </td>
                                <td width="100" style="text-align: center; border-bottom: 1px solid #EEEEEE;"">
                                    &nbsp;
                                    <a href="index.php?SK=82&ID=<?php echo DonusumleriGeriDondur($UrunKayidi['id']); ?>" style="text-decoration: none; color: #646464;">
                                        <?php echo FiyatBicimlendir(DonusumleriGeriDondur($UrununUrunFiyati)); ?> <?php echo DonusumleriGeriDondur($UrununParaBirimi); ?>
                                    </a>
                                </td>
                               
                            </tr>
                            
                    <?php
                        }
                    ?>
                    <?php
                        if($BulunanSayfaSayisi>1){
                    ?>
                            <tr height="50">
                                <td colspan="4" align="center">
                                    <div class="SayfalamaAlaniKapsayicisi">
                                        <div class="SayfalamaAlaniIciMetinAlaniKapsayicisi">
                                            Toplam <?php echo $BulunanSayfaSayisi; ?> sayfada, <?php echo $ToplamKayitSayisi; ?> adet kayıt bulunmaktadır.
                                        </div>

                                        <div class="SayfalamaAlaniIciNumaraAlaniKapsayicisi">
                                           <?php 
                                           if($Sayfalama>1){
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=59&SYF=1'><<</a> </span>";
                                            $SayfalamaIcinSayfaDegeriniBirGeriAl = $Sayfalama-1;
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=59&SYF=" . $SayfalamaIcinSayfaDegeriniBirGeriAl . "'><</a> </span>";
                                           }

                                           for($SayfalamIcinSayfaIndexDegeri=$Sayfalama-$SayfalamaIcinSolVeSagButonSayisi; $SayfalamIcinSayfaIndexDegeri<=$Sayfalama+$SayfalamaIcinSolVeSagButonSayisi; $SayfalamIcinSayfaIndexDegeri++){
                                            if(($SayfalamIcinSayfaIndexDegeri>0) and ($SayfalamIcinSayfaIndexDegeri<=$BulunanSayfaSayisi)){
                                             if($Sayfalama==$SayfalamIcinSayfaIndexDegeri){
                                                echo "<span class='SayfalamaAktif'>" . $SayfalamIcinSayfaIndexDegeri . "</span>";
                                             }else{
                                                echo "<span class='SayfalamaPasif'><a href='index.php?SK=59&SYF=" . $SayfalamIcinSayfaIndexDegeri . "'> " . $SayfalamIcinSayfaIndexDegeri . "</a> </span>";
                                             }
                                            }
                                           }
                                           if($Sayfalama!=$BulunanSayfaSayisi){
                                            $SayfalamaIcinSayfaDegeriniBirIleriAl = $Sayfalama+1;
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=59&SYF=" . $SayfalamaIcinSayfaDegeriniBirIleriAl . "'>></a> </span>";
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=59&SYF=" . $BulunanSayfaSayisi . "'>>></a> </span>";
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
                            <td colspan="4" align="left">Favori ürününüz bulunmamaktadır.</td>
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