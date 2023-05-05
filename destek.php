<form action="index.php?SK=15" method="post">
    <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
        <tr height="100" bgcolor="#FF9900">
            <td align="left"><h2 style="color: white;">&nbsp;SIK SORULAN SORULAR</h2></td>
        </tr>
        <tr>
            <td align="left" height="50" class="SatirArasiIletisim">&nbsp;Aklınıza takılabileceğini düşündüğümüz soruların cevaplarını bu sayfada bulabilirsiniz. Sorunuzu aşağıda bulamıyorsanız 
                <a href="index.php?SK=16">iletişim</a> alanından bizimle iletişime geçebilirsiniz.</td>
        </tr>
        <tr>
            <td>
                <?php  
                $SoruSorgusu        = $VeritabanıBaglantisi->prepare("SELECT * FROM SSS");
                $SoruSorgusu->execute();
                $SoruSayisi         = $SoruSorgusu->rowCount();
                $SoruKayitlari      = $SoruSorgusu->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($SoruKayitlari as $Kayitlar){
                ?>
                <div>
                    <div id="<?php echo $Kayitlar['id']; ?>" class="SorununBaslikAlani" onclick="$.SoruIcerigiGoster(<?php echo $Kayitlar['id']; ?>)"><b><?php echo $Kayitlar["soru"]; ?></b></div>
                    <div class="SorununCevapAlani" style="display: none;"><?php echo $Kayitlar["cevap"]; ?></div>
                </div>
                <?php
                }
                ?>
            </td>
        </tr>
    </table>
</form>