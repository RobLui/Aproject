-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mrt 2017 om 16:25
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `posted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Test', 'http://www.helloworld.com', 'Robbert', '2017-03-12 19:22:06', '2017-03-12 19:22:06', NULL),
(2, 'Test', 'https://youtube-eng.blogspot.com/2016/08/youtubes-road-to-https.html', 'Robbert', '2017-03-12 19:50:59', '2017-03-12 19:51:04', '2017-03-12 19:51:04'),
(3, 'Another', 'http://www.google.be', 'Robbert', '2017-03-12 23:46:55', '2017-03-12 23:46:55', NULL),
(4, 'Just making sure :D', 'http://www.test.com', 'Robbert', '2017-03-13 16:42:26', '2017-03-13 22:03:31', '2017-03-13 22:03:31');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `brainfoods`
--

CREATE TABLE `brainfoods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `events`
--

INSERT INTO `events` (`id`, `title`, `text`, `posted_by`, `data`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-14 15:45:43', '2017-03-14 15:45:43', NULL),
(2, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-14 15:46:32', '2017-03-14 15:46:32', NULL),
(3, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-14 15:46:36', '2017-03-14 15:46:36', NULL),
(4, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-14 16:00:13', '2017-03-14 16:00:13', NULL),
(5, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-17 12:20:56', '2017-03-17 12:20:56', NULL),
(6, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-17 12:21:09', '2017-03-17 12:21:09', NULL),
(7, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-17 13:15:11', '2017-03-17 13:15:11', NULL),
(8, 'ThessaRock!', 'ThessaRock Event Upcoming, march 2nd 2019!', 'Admin', 0x30, '2017-03-17 14:12:34', '2017-03-17 14:12:34', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2016_12_30_204857_articles', 1),
(12, '2017_01_04_152425_create_comments_table', 1),
(13, '2017_03_12_204306_create_events_table', 2),
(15, '2017_03_12_223926_create_richtingen_table', 3),
(18, '2017_03_15_091615_create_brainfood_table', 4),
(19, '2017_03_15_171109_create_table_places_to_eat', 4),
(20, '2017_03_15_172244_create_table_places_to_study', 5),
(21, '2017_03_15_172835_create_table_places_to_see', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `places`
--

CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `richtings`
--

CREATE TABLE `richtings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `richtings`
--

INSERT INTO `richtings` (`id`, `title`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Antwerp management school', 'http://www.antwerpmanagementschool.be/', '2017-03-14 09:23:35', '2017-03-17 12:21:44', NULL),
(12, 'Artesis Plantijn Hogeschool Antwerpen', 'https://www.ap.be/', '2017-03-14 09:25:25', '2017-03-14 09:25:25', NULL),
(13, 'Hogere Zeevaartschool', 'http://www.hzs.be/nl/', '2017-03-14 09:26:02', '2017-03-14 09:26:02', NULL),
(14, 'Instituut voor Tropische Geneeskunde', 'http://www.itg.be/itg/GeneralSite/Default.aspx?WPID=513&L=N', '2017-03-14 09:26:17', '2017-03-14 09:26:17', NULL),
(15, 'Karel de Grote-Hogeschool', 'http://www.kdg.be/', '2017-03-14 09:26:57', '2017-03-14 09:26:57', NULL),
(16, 'KU Leuven Campus Antwerpen', 'http://www.kuleuven.be/kuleuven/', '2017-03-14 09:27:08', '2017-03-14 09:27:08', NULL),
(17, 'Thomas More Antwerpen', 'http://www.thomasmore.be/', '2017-03-14 09:27:18', '2017-03-14 09:27:18', NULL),
(18, 'Universiteit Antwerpen', 'https://www.uantwerpen.be/nl/', '2017-03-14 09:27:26', '2017-03-14 09:27:26', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `see_places`
--

CREATE TABLE `see_places` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `study_places`
--

CREATE TABLE `study_places` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Robbert', 'robbertluit@hotmail.com', '$2y$10$z.YL27FEKjZ3BG0rpUHl1uivvroFlkUs4pTjfdqBFVDrz41ySvDge', '2G4BaeCOivLZ8yRKnthQzNizSSxu2IAVhwyaQQjTpOK8BLc8zgpFEq4H8Adk', '2017-03-12 19:21:36', '2017-03-14 07:52:28'),
(2, 'Admin', 'admin@hotmail.com', '$2y$10$IJ9/IAKvaC9HaBJEXBHoWOmcpVDTDEW8wJV1jra1IsehNwJ8NfKfa', 'GZ23nS2CGTKyjaVSfFhJfD0I5c2wNT6ftTDkhOJgjebBbXAY3Bs7VcKWKpOA', '2017-03-13 16:44:37', '2017-03-17 14:12:52'),
(3, 'Student', 'student@hotmail.com', '$2y$10$4rf4i2Jw6PUamIVgBkhONu3RJcyWVPMy9zWtUoCDnl6STL5HTvnKq', 'C4JK9XZTH8ac1P0bOJfYsSgR20oP9LWYXWQPx9vi9lhYjx2hNMFw0adWfLjc', '2017-03-13 16:45:03', '2017-03-13 16:45:06');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_title_index` (`title`),
  ADD KEY `articles_url_index` (`url`),
  ADD KEY `articles_posted_by_index` (`posted_by`);

--
-- Indexen voor tabel `brainfoods`
--
ALTER TABLE `brainfoods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brainfoods_name_index` (`name`),
  ADD KEY `brainfoods_url_index` (`url`),
  ADD KEY `brainfoods_text_index` (`text`),
  ADD KEY `brainfoods_posted_by_index` (`posted_by`);

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_title_index` (`title`),
  ADD KEY `events_text_index` (`text`),
  ADD KEY `events_posted_by_index` (`posted_by`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `richtings`
--
ALTER TABLE `richtings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `richtings_title_index` (`title`),
  ADD KEY `richtings_url_index` (`url`);

--
-- Indexen voor tabel `see_places`
--
ALTER TABLE `see_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `study_places`
--
ALTER TABLE `study_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `brainfoods`
--
ALTER TABLE `brainfoods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT voor een tabel `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `richtings`
--
ALTER TABLE `richtings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT voor een tabel `see_places`
--
ALTER TABLE `see_places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `study_places`
--
ALTER TABLE `study_places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
