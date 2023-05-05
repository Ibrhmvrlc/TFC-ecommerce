<?php
if (isset($_SESSION["Kullanici"])) {

$SayfalamaIcinSolVeSagButonSayisi   = 2;
$SayfaBasinaGosterilecekKayitSayisi = 5;
$ToplamKayitSayisiSorgusu           = $VeritabanıBaglantisi->prepare("SELECT * FROM yorumlar WHERE UyeID = ? ORDER BY YorumTarihi DESC");
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
                        <td colspan="5" style="color:#FF9900;">
                            <h3>Hesabım > Yorumlar</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="5" valign="top" style="border-bottom: 1px solid #CCCCCC;">Tüm Yorumlarınızı bu alandan görüntüleyebilirsiniz.</td>
                    </tr>
                    <tr height="30">
                        <td width="50" style="text-align: left;">&nbsp;<b>Resim</b></td>
                        <td width="40" style="text-align: left;"></td>
                        <td width="350" style="text-align: left;">&nbsp;<b>Ürün</b></td>
                        <td width="125" style="text-align: center;">&nbsp;<b>Puan</b></td>
                        <td width="500" style="text-align: center;">&nbsp;<b>Yorum</b></td>
                    </tr>
                    <?php
                    $YorumlarSorgusu      = $VeritabanıBaglantisi->prepare("SELECT * FROM yorumlar WHERE UyeID = ? ORDER BY YorumTarihi DESC LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi");
                    $YorumlarSorgusu->execute([$KullaniciID]);
                    $YorumlarSayisi       = $YorumlarSorgusu->rowCount();
                    $YorumlarKayitlari    = $YorumlarSorgusu->fetchAll(PDO::FETCH_ASSOC);

                    if ($YorumlarSayisi > 0) {
                        foreach ($YorumlarKayitlari as $Satirlar) {
                            $VerilenPuan = $Satirlar["Puan"];
                            if($VerilenPuan==1){
                                $ResimDosyasi = "YildizBirDolu.png";
                            }elseif($VerilenPuan==2){
                                $ResimDosyasi = "YildizIkiDolu.png";
                            }elseif($VerilenPuan==3){
                                $ResimDosyasi = "YildizUcDolu.png";
                            }elseif($VerilenPuan==4){
                                $ResimDosyasi = "YildizDortDolu.png";
                            }elseif($VerilenPuan==5){
                                $ResimDosyasi = "YildizBesDolu.png";
                            }

                            $UrunTuru = $Satirlar["UrunTuru"];
                            if($UrunTuru=="KadinBileklik"){
                                $CinsiyetResimDosyasi = "Kadin";
                            }else{
                                $CinsiyetResimDosyasi = "Erkek";
                            }
                    ?>
                            <tr height="30">
                                <td width="50" style="text-align: left; border-bottom: 1px solid #EEEEEE; padding: 0 0 7px 0;">&nbsp;<img src="Resimler/UrunResimleri/<?php echo $CinsiyetResimDosyasi; ?>/<?php echo DonusumleriGeriDondur($Satirlar["UrunResmiBir"]); ?>" border="0" width="60" height="80"></td>
                                <td width="40" style="text-align: left; border-bottom: 1px solid #EEEEEE;">&nbsp;</td>
                                <td width="350" style="text-align: left; border-bottom: 1px solid #EEEEEE;">&nbsp;<?php echo DonusumleriGeriDondur($Satirlar["UrunAdi"]); ?></td>
                                <td width="125" style="text-align: center; border-bottom: 1px solid #EEEEEE;" valign="middle"><img src="Resimler/<?php echo $ResimDosyasi; ?>" border="0"></td>
                                <td width="500" style="text-align: center; border-bottom: 1px solid #EEEEEE;">&nbsp;<?php echo DonusumleriGeriDondur($Satirlar["YorumMetni"]); ?></td>
                            </tr>
                    <?php
                            }
                        
                        if($BulunanSayfaSayisi>1){
                    ?>
                            <tr height="50">
                                <td colspan="5" align="center">
                                    <div class="SayfalamaAlaniKapsayicisi">
                                        <div class="SayfalamaAlaniIciMetinAlaniKapsayicisi">
                                            Toplam <?php echo $BulunanSayfaSayisi; ?> sayfada, <?php echo $ToplamKayitSayisi; ?> adet kayıt bulunmaktadır.
                                        </div>

                                        <div class="SayfalamaAlaniIciNumaraAlaniKapsayicisi">
                                           <?php 
                                           if($Sayfalama>1){
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=60&SYF=1'><<</a> </span>";
                                            $SayfalamaIcinSayfaDegeriniBirGeriAl = $Sayfalama-1;
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=60&SYF=" . $SayfalamaIcinSayfaDegeriniBirGeriAl . "'><</a> </span>";
                                           }

                                           for($SayfalamIcinSayfaIndexDegeri=$Sayfalama-$SayfalamaIcinSolVeSagButonSayisi; $SayfalamIcinSayfaIndexDegeri<=$Sayfalama+$SayfalamaIcinSolVeSagButonSayisi; $SayfalamIcinSayfaIndexDegeri++){
                                            if(($SayfalamIcinSayfaIndexDegeri>0) and ($SayfalamIcinSayfaIndexDegeri<=$BulunanSayfaSayisi)){
                                             if($Sayfalama==$SayfalamIcinSayfaIndexDegeri){
                                                echo "<span class='SayfalamaAktif'>" . $SayfalamIcinSayfaIndexDegeri . "</span>";
                                             }else{
                                                echo "<span class='SayfalamaPasif'><a href='index.php?SK=60&SYF=" . $SayfalamIcinSayfaIndexDegeri . "'> " . $SayfalamIcinSayfaIndexDegeri . "</a> </span>";
                                             }
                                            }
                                           }
                                           if($Sayfalama!=$BulunanSayfaSayisi){
                                            $SayfalamaIcinSayfaDegeriniBirIleriAl = $Sayfalama+1;
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=60&SYF=" . $SayfalamaIcinSayfaDegeriniBirIleriAl . "'>></a> </span>";
                                            echo "<span class='SayfalamaPasif'> <a href='index.php?SK=60&SYF=" . $BulunanSayfaSayisi . "'>>></a> </span>";
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
                            <td colspan="5" align="left">Henüz herhangi bir ürüne yorum yapmamışsınız.</td>
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