<table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
    <tr height="100" bgcolor="#FF9900">
        <td align="left"><h2 style="color: white;">&nbsp;BANKA HESAPLARIMIZ</h2></td>
    </tr>
    <tr>
        <td align="left" height="50" style="border-bottom: 1px solid #CCCCCC;">&nbsp;Çalışmakta olduğumuz tüm Banka Hesap Bilgileri aşağıdadır.</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr>
                <?php
                $BankalarSorgusu = $VeritabanıBaglantisi->prepare("SELECT * FROM bankahesaplarimiz");
                $BankalarSorgusu->execute();
                $BankaSayisi     = $BankalarSorgusu->rowCount();
                $BankaKayitlari  = $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
                
                $DonguSayisi     = 1;
                $SutunAdetSayisi = 3;

                foreach($BankaKayitlari as $Kayit){
                ?>
                    <td width="348">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #cccccc; margin-bottom: 10px;">
                            <tr height="40">
                                <td colspan="4" align="center"><img src="Resimler/<?php echo DonusumleriGeriDondur($Kayit["BankaLogosu"]); ?>" border="0"></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td width="80">Banka Adı</td>
                                <td width="10">:</td>
                                <td width="253"><?php echo DonusumleriGeriDondur($Kayit["BankaAdi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td>Konum</td>
                                <td>:</td>
                                <td><?php echo DonusumleriGeriDondur($Kayit["KonumSehir"]); ?>/<?php echo DonusumleriGeriDondur($Kayit["KonumUlke"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td>Şube</td>
                                <td>:</td>
                                <td><?php echo DonusumleriGeriDondur($Kayit["SubeAdi"]); ?>/<?php echo DonusumleriGeriDondur($Kayit["SubeKodu"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td>Birim</td>
                                <td>:</td>
                                <td><?php echo DonusumleriGeriDondur($Kayit["ParaBirimi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td>Hesap Adı</td>
                                <td>:</td>
                                <td><?php echo DonusumleriGeriDondur($Kayit["HesapSahibi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td>Hesap No</td>
                                <td>:</td>
                                <td><?php echo DonusumleriGeriDondur($Kayit["HesapNumarasi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td>IBAN No</td>
                                <td>:</td>
                                <td><?php echo IbanBicimlendir(DonusumleriGeriDondur($Kayit["IbanNumarasi"])); ?></td>
                            </tr>
                        </table>
                    </td>
                <?php
                if($DonguSayisi<$SutunAdetSayisi){
                ?>
                    <td  width="10">&nbsp;</td>
                <?php
                }
                $DonguSayisi++;
                    if($DonguSayisi>$SutunAdetSayisi){
                        echo "</tr><tr>";
                        $DonguSayisi = 1;
                    }
                }
                ?>











                
                    
                    











                </tr>
            </table>
        </td>
    </tr>
</table>

