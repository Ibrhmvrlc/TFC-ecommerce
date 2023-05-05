<table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="500" valign="top">
            <form action="index.php?SK=10" method="post">
                <table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td style="color:#FF9900;"><h3>Havale Bildirim Formu</h3></td>
                    </tr>
                    <tr height="30">
                        <td valign="top" style="border-bottom: 1px solid #CCCCCC;">Tamamlanmış Ödeme İşleminizi Aşağıdaki Formdan iletiniz.</td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom" align="left">İsim Soyisim (*)</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">E-Mail Adresi (*)</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Telefon Numarası (*)</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari"></td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Ödeme Yapılan Banka (*)</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left">
                            <select name="BankaSecimi" class="SelectAlanlari">
                            <option value="">Seçiniz</option>
                            <?php
                            $BankalarSorgusu = $VeritabanıBaglantisi->prepare("SELECT * FROM bankahesaplarimiz ORDER BY BankaAdi ASC");
                            $BankalarSorgusu->execute();
                            $BankaSayisi     = $BankalarSorgusu->rowCount();
                            $BankaKayitlari  = $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
                            
                            foreach($BankaKayitlari as $Bankalar){
                            ?>
                            <option value="<?php echo DonusumleriGeriDondur($Bankalar["id"]); ?>"><?php echo DonusumleriGeriDondur($Bankalar["BankaAdi"]); ?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom"  align="left">Açıklama</td>
                    </tr>
                    <tr height="30">
                        <td valign="top"  align="left"><textarea name="Aciklama" placeholder="Açıklamanızı bu alanda belirtebilirsiniz..." class="TextareaAlanlari"></textarea></td>
                    </tr>
                    <tr height="40">
                        <td align="center"><input type="submit" value="Bildirimi Gönder" class="YesilButon"></td>
                    </tr>
                </table>
            </form>
        </td>

        <td width="20">&nbsp;</td>

        <td width="545" valign="top">
            <table width="545" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr height="40">
                    <td style="color:#FF9900;" colspan="2"><h3>İşleyiş</h3></td>
                </tr>
                <tr height="30">
                    <td valign="top" style="border-bottom: 1px solid #CCCCCC;" colspan="2">Havale / EFT İşlemlerinin kontrolü.</td>
                </tr>
                <tr height="5">
                    <td colspan="2" height="5" style="font-size: 5px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/Banka20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Havale / EFT işlemi</b></td>
                </tr>
                <tr>
                    <td colspan="2">Müşteri Tarafından öncelikle Banka Hesaplarımız sayfasında bulunan herhangi bir hesaba ödeme işlemi gerçekleştirilir.</td>
                </tr>
                <tr height="8">
                    <td colspan="2" height="8" style="font-size: 8px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/DokumanSiyahKalemli20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Bildirim İşlemi</b></td>
                </tr>
                <tr>
                    <td colspan="2">Ödeme İşleminizi tamamladıktan sonra "Havale Bildirim Formu" Sayfasından ilgili form doldurularak online olarak gönderir.</td>
                </tr>
                <tr height="8">
                    <td colspan="2" height="8" style="font-size: 8px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/CarklarSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Kontroller</b></td>
                </tr>
                <tr>
                    <td colspan="2">"Havale Bildirim Formu" Tarafımıza ulaştığı anda yapılan Havale / EFT işlemi ilgili banka üzerinden Kontrol edilir.</td>
                </tr>
                <tr height="8">
                    <td colspan="2" height="8" style="font-size: 8px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/InsanlarSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Onay / Red</b></td>
                </tr>
                <tr>
                    <td colspan="2">Havale bildirimi geçerli ve Ödeme ilgili banka hesabına geçmiş ise, yönetici onayı vererek siparişiniz teslimat birimine iletilir.</td>
                </tr>
                <tr height="8">
                    <td colspan="2" height="8" style="font-size: 8px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/SaatSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Sipariş Hazırlama & Teslimat</b></td>
                </tr>
                <tr>
                    <td colspan="2">Yönetici onayından sonra sayfamız üzerinden vermiş olduğunuz sipariş, en kısa sürede hazırlanarak kargoya teslim edilir ve tarafınıza ulaştırılır.</td>
                </tr>
                <tr height="5">
                    <td colspan="2" height="5" style="font-size: 5px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

