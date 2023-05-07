-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 May 2023, 19:07:58
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresler`
--

CREATE TABLE `adresler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UyeID` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Ilce` varchar(100) NOT NULL,
  `Sehir` varchar(100) NOT NULL,
  `Ulke` varchar(100) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `adresler`
--

INSERT INTO `adresler` (`id`, `UyeID`, `AdiSoyadi`, `Adres`, `Ilce`, `Sehir`, `Ulke`, `TelefonNumarasi`) VALUES
(4, 1, 'İbrahim Varelci', 'Kadıköy Merkez Mah. Süleymanbey Cad. Hayat Evleri No: 26/4', 'Merkez', 'Yalova', 'Türkiye', '05055245978');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `SiteAdi` varchar(50) NOT NULL,
  `SiteTitle` varchar(60) NOT NULL,
  `SiteDescription` varchar(150) NOT NULL,
  `SiteKeywords` varchar(255) NOT NULL,
  `SiteCopyrightMetni` varchar(255) NOT NULL,
  `SiteLogo` varchar(30) NOT NULL,
  `SiteLinki` varchar(255) NOT NULL,
  `SiteEmailAdresi` varchar(50) NOT NULL,
  `SiteEmailSifresi` varchar(50) NOT NULL,
  `SiteEmailHostAdresi` varchar(255) NOT NULL,
  `SosyalLinkInstagram` varchar(255) NOT NULL,
  `SosyalLinkPinterest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `SiteAdi`, `SiteTitle`, `SiteDescription`, `SiteKeywords`, `SiteCopyrightMetni`, `SiteLogo`, `SiteLinki`, `SiteEmailAdresi`, `SiteEmailSifresi`, `SiteEmailHostAdresi`, `SosyalLinkInstagram`, `SosyalLinkPinterest`) VALUES
(1, 'The Five Crystals', 'Doğal Taş Mağazası', 'Doğadan en son kalite doğal taşlar ile enerjinizi yükseltin. Uygun fiyat, yüksek kalite ve özgün tasarımlar thefivecrystals.com\'da. The Five Club üyes', 'Doğal Taş, Aksesuar, Bileklik, Kadın aksesuar, Erkek Aksesuar, Kalite, Tasarım', 'Copyright 2023 - The Five Crystals - Tüm Hakları saklıdır.', 'logo.png', 'http://localhost/TheFiveCrystals', 'admin@cizzdan.com', '(Kyrie22)', '	cp66.servername.co', 'https://www.instagram.com', 'https://www.pinterest.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bankahesaplarimiz`
--

CREATE TABLE `bankahesaplarimiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaLogosu` varchar(30) NOT NULL,
  `BankaAdi` varchar(100) NOT NULL,
  `KonumSehir` varchar(100) NOT NULL,
  `KonumUlke` varchar(100) NOT NULL,
  `SubeAdi` varchar(100) NOT NULL,
  `SubeKodu` varchar(100) NOT NULL,
  `ParaBirimi` varchar(100) NOT NULL,
  `HesapSahibi` varchar(255) NOT NULL,
  `HesapNumarasi` varchar(100) NOT NULL,
  `IbanNumarasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bankahesaplarimiz`
--

INSERT INTO `bankahesaplarimiz` (`id`, `BankaLogosu`, `BankaAdi`, `KonumSehir`, `KonumUlke`, `SubeAdi`, `SubeKodu`, `ParaBirimi`, `HesapSahibi`, `HesapNumarasi`, `IbanNumarasi`) VALUES
(1, 'YapiKredi171x30.png', 'Yapı Kredi', 'Yalova', 'Türkiye', 'Merkez', '1234', 'Türk Lirası', 'İbrahim VARELCİ', '1234567890', 'TR000000000000000000000000'),
(2, 'Akbank181x30.jpg', 'Akbank', 'Yalova', 'Türkiye', 'Merkez', '1234', 'Türk Lirası', 'İbrahim VARELCİ', '1234567890', 'TR000000000000000000000000'),
(3, 'GarantiBBVA167x30.png', 'GarantiBBVA', 'Yalova', 'Türkiye', 'Merkez', '1234', 'Türk Lirası', 'İbrahim VARELCİ', '1234567890', 'TR000000000000000000000000'),
(4, 'TurkiyeIsBankasi85x30.png', 'Türkiye İş Bankası', 'Yalova', 'Türkiye', 'Merkez', '1234', 'Türk Lirası', 'İbrahim VARELCİ', '1234567890', 'TR000000000000000000000000'),
(5, 'Denizbank125x30.jpg', 'Denizbank', 'Yalova', 'Türkiye', 'Merkez', '1234', 'Türk Lirası', 'İbrahim VARELCİ', '1234567890', 'TR000000000000000000000000'),
(6, 'QNBFinansbank87x30.jpg', 'QNB Finansbank', 'Yalova', 'Türkiye', 'Merkez', '1234', 'Türk Lirası', 'İbrahim VARELCİ', '1234567890', 'TR000000000000000000000000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

CREATE TABLE `favoriler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunID` int(10) UNSIGNED NOT NULL,
  `UyeID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `favoriler`
--

INSERT INTO `favoriler` (`id`, `UrunID`, `UyeID`) VALUES
(4, 3, 1),
(6, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `havalebildirimleri`
--

CREATE TABLE `havalebildirimleri` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaID` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Aciklama` text NOT NULL,
  `IslemTarihi` int(10) UNSIGNED NOT NULL,
  `Durum` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(100) NOT NULL,
  `MenuAdi` varchar(50) NOT NULL,
  `UrunSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `UrunTuru`, `MenuAdi`, `UrunSayisi`) VALUES
(1, 'KadinBileklik', 'Toprak Elementi', 0),
(2, 'KadınBileklik', 'Hava Elementi', 0),
(3, 'KadinBileklik', 'Ateş Elementi', 0),
(4, 'KadinBileklik', 'Su Elementi', 0),
(5, 'ErkekBileklik', 'Toprak Elementi', 0),
(6, 'ErkekBileklik', 'Hava Elementi', 0),
(7, 'ErkekBileklik', 'Ateş Elementi', 0),
(8, 'ErkekBileklik', 'Su Elementi', 0),
(9, 'AksesuarUrun', 'Toprak Elementi', 0),
(10, 'AksesuarUrun', 'Hava Elementi', 0),
(11, 'AksesuarUrun', 'Ateş Elementi', 0),
(12, 'AksesuarUrun', 'Su Elementi', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UyeID` int(10) UNSIGNED NOT NULL,
  `SiparisNumarasi` int(11) NOT NULL,
  `UrunID` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(50) NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunFiyati` double UNSIGNED NOT NULL,
  `KDVOrani` int(2) UNSIGNED NOT NULL,
  `UrunAdedi` int(3) UNSIGNED NOT NULL,
  `ToplamUrunFiyatı` double UNSIGNED NOT NULL,
  `KargoFirmasiSecimi` varchar(100) NOT NULL,
  `KargoUcreti` double UNSIGNED NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `VaryantSecimi` varchar(100) NOT NULL,
  `AdresAdiSoyadi` varchar(100) NOT NULL,
  `AdresDetay` varchar(255) NOT NULL,
  `AdresTelefon` varchar(11) NOT NULL,
  `OdemeSecimi` varchar(25) NOT NULL,
  `TaksitSecimi` int(2) UNSIGNED NOT NULL,
  `SiparisTarihi` int(10) NOT NULL,
  `SiparisIPAdresi` varchar(20) NOT NULL,
  `OnayDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoGonderiKodu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `UyeID`, `SiparisNumarasi`, `UrunID`, `UrunTuru`, `UrunAdi`, `UrunFiyati`, `KDVOrani`, `UrunAdedi`, `ToplamUrunFiyatı`, `KargoFirmasiSecimi`, `KargoUcreti`, `UrunResmiBir`, `VaryantBasligi`, `VaryantSecimi`, `AdresAdiSoyadi`, `AdresDetay`, `AdresTelefon`, `OdemeSecimi`, `TaksitSecimi`, `SiparisTarihi`, `SiparisIPAdresi`, `OnayDurumu`, `KargoDurumu`, `KargoGonderiKodu`) VALUES
(1, 1, 1, 1, 'KadinBileklik', 'Alice Bileklik', 249.99, 18, 1, 249.99, 'Yurtiçi Kargo', 12.5, 'Alice-1.jpg', 'Standart Beden', 'Standart Beden', 'İbrahim Varelci', 'Kadıköy Merkez Mah. Süleymanbey Cad. Hayat Evleri No: 26/4', '05055245978', 'Kredi Kartı', 3, 1676804611, '::1', 0, 0, ''),
(2, 1, 1, 3, 'KadinBileklik', 'Diana Bİleklik', 349.99, 18, 1, 349.99, 'Yurtiçi Kargo', 12.5, 'Diana-1.jpg', 'Standart Beden', 'Standart Beden', 'İbrahim Varelci', 'Kadıköy Merkez Mah. Süleymanbey Cad. Hayat Evleri No: 26/4', '05055245978', 'Kredi Kartı', 3, 1676804611, '::1', 0, 0, ''),
(3, 2, 2, 2, 'KadinBileklik', 'Freya Bileklik', 299.99, 18, 1, 299.99, 'Aras Kargo', 17, 'Freya-1.jpg', 'Standart Beden', 'Standart Beden', 'İrem Yılmaz', 'İremin Adresi', '05055245978', 'Banka Havalesi', 0, 1676809611, '::1', 0, 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sozlesmelervemetinler`
--

CREATE TABLE `sozlesmelervemetinler` (
  `id` tinyint(10) UNSIGNED NOT NULL,
  `HakkimizdaMetni` text NOT NULL,
  `UyelikSozlesmesiMetni` text NOT NULL,
  `KullanimKosullariMetni` text NOT NULL,
  `GizlilikSozlesmesiMetni` text NOT NULL,
  `MesafeliSatisSozlesmesiMetni` text NOT NULL,
  `TeslimatMetni` text NOT NULL,
  `IptalIadeDegisimMetni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sozlesmelervemetinler`
--

INSERT INTO `sozlesmelervemetinler` (`id`, `HakkimizdaMetni`, `UyelikSozlesmesiMetni`, `KullanimKosullariMetni`, `GizlilikSozlesmesiMetni`, `MesafeliSatisSozlesmesiMetni`, `TeslimatMetni`, `IptalIadeDegisimMetni`) VALUES
(1, 'Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.', 'Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.', 'Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. Burası Kullanım koşulları metnidir. ', 'Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. Burası Gizlilik sözleşmesi metnidir. ', 'Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.Burası Mesafeli Satış sözleşmesi metnidir.', 'Burası Teslimat Metnidir. Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.Burası Teslimat Metnidir.', 'Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. Burası İptal İade Değişim Metnidir. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

CREATE TABLE `sss` (
  `id` int(10) UNSIGNED NOT NULL,
  `soru` text NOT NULL,
  `cevap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`id`, `soru`, `cevap`) VALUES
(1, 'Birinci Sorunuzun başlığı', 'Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.Birinci Sorunuzun cevabı.'),
(2, 'İkinci Sorunuzun başlığı', 'İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.İkinci Sorunuzun cevabı.'),
(3, 'Üçüncü Sorunuzun başlığı', 'Üçüncü Sorunuzun cevabı. Üçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabıÜçüncü Sorunuzun cevabı'),
(4, 'Dördüncü Sorunuzun başlığı', 'Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. Dördüncü Sorunuzun cevabı. '),
(5, 'Beşinci Sorunuzun başlığı', 'Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.Beşinci Sorunuzun cevabı.'),
(6, 'Altıncı Sorunuzun başlığı', 'Altıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabıAltıncı Sorunuzun cevabı'),
(7, 'Yedinci Sorunuzun başlığı', 'Yedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabıYedinci Sorunuzun cevabı'),
(8, 'Sekizinci Sorunuzun başlığı', 'Sekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabıSekizinci Sorunuzun cevabı'),
(9, 'Dokuzuncu Sorunuzun başlığı', 'Dokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabıDokuzuncu Sorunuzun cevabı'),
(10, 'Onuncu Sorunuzun başlığı', 'Onuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabıOnuncu Sorunuzun cevabı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(100) NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunFiyati` double UNSIGNED NOT NULL,
  `ParaBirimi` char(10) NOT NULL,
  `KDVOrani` int(2) UNSIGNED NOT NULL,
  `UrunAciklamasi` text NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `UrunResmiIki` varchar(30) NOT NULL,
  `UrunResmiUc` varchar(30) NOT NULL,
  `UrunResmiDort` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `Durumu` tinyint(1) UNSIGNED NOT NULL,
  `ToplamSatisSayisi` int(10) UNSIGNED NOT NULL,
  `YorumSayisi` tinyint(1) UNSIGNED NOT NULL,
  `ToplamYorumPuani` int(10) UNSIGNED NOT NULL,
  `GoruntulenmeSayisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `UrunTuru`, `UrunAdi`, `UrunFiyati`, `ParaBirimi`, `KDVOrani`, `UrunAciklamasi`, `UrunResmiBir`, `UrunResmiIki`, `UrunResmiUc`, `UrunResmiDort`, `VaryantBasligi`, `Durumu`, `ToplamSatisSayisi`, `YorumSayisi`, `ToplamYorumPuani`, `GoruntulenmeSayisi`) VALUES
(1, 'KadinBileklik', 'Alice Bileklik', 250, 'TRY', 18, 'Çakra: Taç\r\nElement: Hava\r\n\r\nZaman periyodu veya bölge ne olursa olsun, bu mistik mor taşın iyileştirdiğine ve bir ideoloji farkındalığını temsil ettiğine inanıldı.\r\nRönesans döneminde ametistler sadece aristokratlar tarafından giyildi, çünkü mor sadece kraliyetlerin giyebileceği bir renk oldu. Ametist taşının Büyük Catherine\'in en sevdiği aksesuar olduğu söylenir. Bugün bütünsel tıpta ametistler, baş ağrılarını gidermek için kullanılmaktadır.', 'Alice-1.jpg', 'Alice-2.jpg', 'Alice-3.jpg', 'Alice-4.jpg', 'Doğal Taş', 1, 1, 4, 14, 8),
(2, 'KadinBileklik', 'Freya Bileklik', 300, 'TRY', 18, 'Çakra: Kalp | Kök\r\nElement: Toprak\r\n\r\nRodonit taşı, ismini Yunanca “Gül” anlamına gelen “Rhodon” kelimesinden alır. İlk kez 1790 yılında Rusya’nın Ural Dağlarında keşfedilmiştir. İlk kez Rusya’da keşfedilen Rodonit taşı Ruslar için önemli bir yere sahip. Rus kültüründe bebekler, gezginler ve soylular için bir tür koruma tılsımı olarak kullanılmıştır.\r\nDerin bir sevgi taşı olarak Rodonit, hayatınızdaki negatif enerjiyi azaltır. Diyet ve detoks gibi durumlara uyum sağlamayı kolaylaştırır. Kötü düşüncelerden arındıran bir etkiye sahiptir. Ruhu güzel duygu ve enerjilerle besler. Geçmişte yaşanan ve etkisini günümüzde devam ettiren kötü anılardan kurtulmaya yardım eder. Toksik ilişkilerden kurtulmaya ve iyileşmeye yardım eder.\r\nRodonit taşından verim almak için düzenli olarak kullanmak gerekir. Bu nedenle gün boyu kişinin bedenine yakın bir noktada durmalıdır.\r\nRodonit’in kalp çakrasıyla bağlantısı vardır. Kalp çakrası, sevgimizin, güvenimizin ve şefkat gösterme yeteneğimizin geldiği yerdir. Hayat sert darbelerle dolu olabileceğinden, darbeyi sık sık alan kalp çakramızdır. Duvarlar örüyoruz, kapatıyoruz ve güven seviyemiz düşüyor. Kalp boşluğunu tıkayan tıkanıklıkları temizlemeye çalıştığımızda, kendimizi iyileşmiş, uyum içinde ve hem içte hem de dışta sağlıklı seviyelere getirebiliriz. Bir sürü siyah desen ile dolu olan bu Rodonit kristalleri, aynı zamanda kök çakra ile güçlü bir şekilde rezonansa girer. Burası bizim güvenli yerimizdir. Ayaklarımızın altındaki toprağa nasıl kök saldığımızdır ve bunların hepsi dünyadaki güven duygumuzla ilgilidir.', 'Freya-1.jpg', 'Freya-2.jpg', 'Freya-3.jpg', 'Freya-4.jpg', 'Doğal Taş', 1, 1, 0, 0, 17),
(3, 'KadinBileklik', 'Diana Bİleklik', 350, 'TRY', 18, 'Florit kelimesinin kökeni, birbirinin yerine geçecek şekilde akmak anlamına gelen Latince “flux” kelimesinden gelir. Bu kelime, hem floritin renklerinin değişip karışma şeklini hem de durgun enerjinin engelini kaldırma ve enerji akışını teşvik etme şeklini ifade eder.\r\n\r\nFlorit, en sevilen aura temizleyicilerinden biridir. Aurayı arındırır ve sakinleştirir. Negatifliği emer ve etkisiz hale getirir. Ayrıca odaklanma gücümüzü, özgüvenimizi arttırır ve belirsizlikleri ortadan kaldırarak karar vermemizde bize yardımcı olur. Aynı zamanda kendilerini endişeyle bağlı tutmaya meyilli olanlar ve öz-sevgi ve güven konusunda biraz yardıma ihtiyaç duyanlar için pozitifliği teşvik eder, kuvvetleri dengeler, dengeyi arttırır ve fiziksel ve zihinsel el becerisini geliştirir. Florit, fiziksel, duygusal ve ruhsal sağlığınıza muhteşem iyileştirici özellikler getirir.\r\n\r\n•Florit kristalleri suda suda çözülebilirler, suda temizlenmemelidirler. Bunun yerine, florit taşınızı adaçayı dumanıyla tütsüleyerek veya gece boyunca dolunay ışığında banyo yapmasına izin vererek yenileyebilirsiniz.\r\n\r\nGümüş, özellikle yeni aylar ve dolunaylar sırasında ayın enerjisini taşıdığı bilinmektedir. Gümüş, değerli taşlarla birlikte kullanıldığında kişi ile taşlar arasında ki bağı güçlendirir. Taşın enerjisini emecek ve yayacaktır. Gümüş, bileğe takıldığında belirli enerjileri çekmenizde size destek olacaktır.', 'Diana-1.jpg', 'Diana-2.jpg', 'Diana-3.jpg', 'Diana-4.jpg', 'Doğal Taş', 1, 1, 2, 9, 41),
(4, 'ErkekBileklik', 'Man Collection', 300, 'TRY', 18, 'Çakra: SOLAR PLEKSUS  SAKRAL\r\nElement: ATEŞ  TOPRAK\r\nBurç: OĞLAK  ASLAN  İKİZLER  BOĞA\r\n\r\nKaplan gözü, kutupları dengelemenize ve çelişkileri kabul etmenize, hayatı olduğu gibi kabul edip yargılamadan anın ihtiyaçlarına cevap vermenize yardımcı olur. Uzun süreli zor durumlar için yararlı bir taştır, çünkü dayanıklılık verir ve sizi en iyi durumda tutar ve sorunlarla karşılaştığınızda bunalmadan, umutsuzluğa kapılmadan veya gerici olmadan başa çıkmanızı sağlar. Kaplan gözü, topraklanmayı, yaratıcılığı ve iradeyi güçlendiren çakralarla çalışır böylece sizin için dolu bir yaşam yaratmak için temel düzeyde bir destek sunduğu için her gün taşımak ve kullanmak için harika bir kristaldir. Canlılığı, fiziksel sağlığı ve dayanıklılığı destekler. Uzun günleri ve yoğun programları atlatmanıza yardımcı olmak için size ekstra destek sağlayabilir.\r\nKaplan gözü, gerçek benliğinizle, kendi değerlerinizle ve kim olduğunuz ve olmak istediğiniz kişiyle uyumlu bir yerden hareket etmenize yardımcı olabilir. Kendi duygunuz belirsizse veya yön duygunuz yoksa, Kaplan gözünü düzenli olarak takmak, kişiliğinizi güçlü, merkezci bir insan olarak sağlamlaştırmanıza yardımcı olabilir.\r\n\r\nHematit, eski dönemlerden beri gücü ve güven duygusunu arttırıcı özelliklerinin olduğuna inanılarak kullanılmıştır. Negatif enerjiyi emerek auranın olumsuzluklardan arınmasına yardımcı olur. Kan dolaşımı için faydalı taşlardandır. Yin yang enerjisinin dengelenmesine yardımcı olur. Kök çakra kristallerindendir. Bilekliğin uç kısımlarında kullanılmıştır ', 'ManCollection-1.jpg', 'ManCollection-2.jpg', 'ManCollection-3.jpg', 'ManCollection-4.jpg', 'Doğal Taş', 1, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunvaryantlari`
--

CREATE TABLE `urunvaryantlari` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunID` int(10) UNSIGNED NOT NULL,
  `VaryantAdi` varchar(100) NOT NULL,
  `StokAdedi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunvaryantlari`
--

INSERT INTO `urunvaryantlari` (`id`, `UrunID`, `VaryantAdi`, `StokAdedi`) VALUES
(1, 1, 'Standart Beden', 5),
(2, 2, 'Standart Beden', 5),
(3, 3, 'Standart Beden', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(10) UNSIGNED NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `IsimSoyisim` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Cinsiyet` varchar(5) NOT NULL,
  `Durumu` tinyint(1) UNSIGNED NOT NULL,
  `KayitTarihi` int(10) NOT NULL,
  `KayitIPAdresi` varchar(20) NOT NULL,
  `AktivasyonKodu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `EmailAdresi`, `Sifre`, `IsimSoyisim`, `TelefonNumarasi`, `Cinsiyet`, `Durumu`, `KayitTarihi`, `KayitIPAdresi`, `AktivasyonKodu`) VALUES
(1, 'varelci.i@gmail.com', '7d9b9b28fd98e993e73d292387ba9e0f', 'İbrahim Varelci', '05055245978', 'Erkek', 1, 1676804611, '::1', '68386-72443-33146-65237'),
(2, 'ireemizm@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'İrem Yılmaz', '05055245978', 'Kadın', 0, 1677317376, '::1', '65570-27392-99042-21353');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunID` int(10) UNSIGNED NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `UrunTuru` varchar(50) NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `Puan` tinyint(1) NOT NULL,
  `YorumMetni` text NOT NULL,
  `YorumTarihi` int(10) NOT NULL,
  `YorumIPAdresi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `UrunID`, `UrunAdi`, `UrunResmiBir`, `UrunTuru`, `UyeId`, `Puan`, `YorumMetni`, `YorumTarihi`, `YorumIPAdresi`) VALUES
(1, 1, 'Alice Bileklik', 'Alice-1.jpg', 'KadinBileklik', 1, 4, 'Ürüm güzel beğendim lakin biir takım eksikleri olmakla beraber aslında çok da iyi olmadığının farkına varıp daha iyi olması için size öneri ypamk isterken bundan vazgeçmeye başlamışken aslında vazgeçmemem gerektiğine karar verip bu yorumu yazdım.', 1678041917, '::1'),
(2, 3, 'Diana Bİleklik', 'Diana-1.jpg', 'KadinBileklik', 1, 5, 'Harika bileklik bayıldım. Sadece fiyatı birazcık pahalı geldi.', 1678043748, '::1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adresler`
--
ALTER TABLE `adresler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `favoriler`
--
ALTER TABLE `favoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailAdresi` (`EmailAdresi`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adresler`
--
ALTER TABLE `adresler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  MODIFY `id` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sss`
--
ALTER TABLE `sss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
