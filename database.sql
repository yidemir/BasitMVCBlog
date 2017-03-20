-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 20 Mar 2017, 17:40:17
-- Sunucu sürümü: 5.6.34
-- PHP Sürümü: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `body` text COLLATE utf32_turkish_ci NOT NULL,
  `tags` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `tags`, `created`) VALUES
(5, 'Lorem ipsum dolor sit amet', 'Cras vulputate erat sollicitudin lectus ullamcorper mollis. Ut nec leo in nibh luctus consequat. Nunc id augue et ipsum porta volutpat. Nam eros purus, rhoncus quis lobortis varius, suscipit ut lacus. Sed consequat dui vitae magna ornare, sit amet placerat purus tincidunt. Suspendisse tellus sem, malesuada ut sollicitudin nec, tempor eu massa. Nam malesuada, sem ac imperdiet fermentum, ex elit molestie sem, vitae porttitor neque lacus vel nibh. Phasellus aliquet felis velit, in dignissim ex molestie vel. Pellentesque finibus ante in orci aliquam, vitae vestibulum est rutrum.', 'lorem,ipsum,dolor', '2017-03-20 17:16:05'),
(6, 'Cras vel ex ac ligula blandit pharetra', 'Nulla fermentum urna elit, vitae vestibulum mauris tempus et. Vivamus molestie, felis non luctus sollicitudin, nisl sapien auctor ante, eu efficitur metus felis eu tortor. Pellentesque est arcu, suscipit vitae ligula quis, sodales convallis sem. Aenean ante tellus, auctor et hendrerit in, tincidunt vel ante. Vivamus venenatis consequat urna a bibendum. Integer bibendum suscipit libero. Donec vestibulum sapien sapien.', 'lorem,nulla,dolor', '2017-03-20 17:16:24'),
(7, 'Praesent vitae dolor massa', 'Mauris velit odio, ultricies non metus eget, faucibus accumsan ex. Sed imperdiet non est vel porttitor. In sagittis erat felis, vel tempor urna eleifend quis. Nulla cursus metus ut eleifend pretium. Nullam quis ante elit. In volutpat posuere elit eget efficitur. Nulla posuere, libero ac molestie finibus, dui est ultrices urna, quis commodo ante est facilisis lorem. Vivamus iaculis, lorem a malesuada maximus, justo augue mollis nunc, vitae placerat tellus lacus feugiat neque. Proin ut rhoncus nisl, auctor cursus risus. Nullam ultricies condimentum enim a molestie. Suspendisse at dignissim elit. Donec semper aliquam ipsum, non gravida velit luctus eu. Curabitur quis ultricies magna, in dictum turpis.\r\n\r\n', 'lorem,prasent,vitae', '2017-03-20 17:16:45');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;