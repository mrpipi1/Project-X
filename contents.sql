-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 02. Aug 2016 um 14:43
-- Server-Version: 5.7.11-4-log
-- PHP-Version: 5.5.36-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `u64409db1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `_name` varchar(1000) NOT NULL,
  `type` varchar(150) NOT NULL,
  `content` varchar(1000) NOT NULL DEFAULT '',
  `sequence` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `contents`
--

INSERT INTO `contents` (`id`, `_name`, `type`, `content`, `sequence`, `is_active`, `deleted_at`) VALUES
(3, '', 'Über Uns', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, NULL),
(4, '', 'Datenschutz', 'Lorem Ipsum\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, NULL),
(5, '', 'test', 'test', 0, 0, '0000-00-00 00:00:00'),
(6, '', 'rrtreb', 'regbergb', 0, 0, '0000-00-00 00:00:00'),
(7, '', 'rrtr', 'reert', 0, 0, '0000-00-00 00:00:00'),
(8, '', 'qwefwf', 'wqfwfewf', 0, 0, '0000-00-00 00:00:00'),
(10, '', 'ukmumum', 'm67m67', 0, 0, '0000-00-00 00:00:00'),
(11, '', 'h tehh', 'enb ', 0, 0, '0000-00-00 00:00:00'),
(12, '', 'erhrh', 'rthzhtb', 0, 0, '0000-00-00 00:00:00'),
(13, '', 'fbgrenn', 'ku,iz,io', 0, 0, '0000-00-00 00:00:00'),
(14, '', 'uk,u,u', 'ut,ui,', 0, 0, '0000-00-00 00:00:00'),
(15, 'Kontakt', 'headline', 'Kontakt', 0, 0, NULL),
(16, 'Kontakt', 'content', 'Du hast Fragen ?', 1, 1, NULL),
(17, 'Kontakt', 'subheadline', 'Unser Studio', 3, 1, NULL),
(18, 'Kontakt', 'tel', '01 555 555 55', 4, 1, NULL),
(19, 'Kontakt', 'content', 'Kontaktiere uns doch einfach und wir melden uns unverzüglich.', 2, 1, NULL),
(20, 'Kontakt', 'email', 'office@lotusyoga.at', 5, 1, NULL),
(21, 'Kontakt', 'content', 'Siebensterngasse 2', 6, 1, NULL),
(22, 'Kontakt', 'content', 'Österreich, Wien', 8, 1, NULL),
(23, 'Kontakt', 'content', 'Stock 1 | Tür 13', 7, 1, NULL),
(24, 'Kontakt', 'content', '1070', 9, 1, NULL),
(25, 'Map', 'lat', '48.20294029999999', 0, 1, NULL),
(26, 'Map', 'lng', '16.356826899999987', 1, 1, NULL),
(27, 'contactform_main', 'fullname', 'Vorname | Nachname*', 1, 1, NULL),
(28, 'contactform_main', 'tel', 'Telefonnummer*', 2, 1, NULL),
(29, 'contactform_main', 'email', 'E-Mailadresse*', 3, 1, NULL),
(30, 'contactform_main', 'comment', 'Kommentar', 4, 1, NULL),
(31, 'contactform_main', 'submit', 'Absenden', 5, 1, NULL),
(32, 'contactform_main', 'subheadline', 'Schreibe uns', 0, 1, NULL),
(33, 'footer', 'subheadline', 'Socialmedia', 0, 1, NULL),
(34, 'footer', 'Facebook', 'http://www.facebook.com', 1, 1, NULL),
(35, 'footer', 'Instagram', 'http://www.instagram.com', 2, 1, NULL),
(36, 'footer', 'Youtube', 'http://www.youtube.com', 3, 1, NULL),
(37, 'footer', 'subheadline', 'Kurse', 4, 1, NULL),
(38, 'footer', 'Yin Yoga', '#', 5, 1, NULL),
(39, 'footer', 'Ashtanga Yoga', '#', 6, 1, NULL),
(40, 'footer', 'Tri Yoga', '#', 7, 1, NULL),
(41, 'footer', 'subheadline', 'Shop', 8, 1, NULL),
(42, 'footer', 'Angebote', 'index.php?page=home#saleproducts_main', 9, 1, NULL),
(43, 'footer', 'Rückgaberecht', 'index.php?page=Rueckgaberecht', 10, 1, NULL),
(45, 'footer', 'subheadline', 'Lorem', 12, 1, NULL),
(46, 'footer', 'Impressum', 'index.php?page=Impressum', 13, 1, NULL),
(47, 'footer', 'AGB', 'index.php?page=AGB', 14, 1, NULL),
(48, 'footer', 'Datenschutz', 'index.php?page=Datenschutz', 15, 1, NULL),
(49, 'footer', 'FAQs', 'index.php?page=FAQs', 16, 1, NULL),
(50, 'testobert', 'asd', 'asd', 1, 0, NULL),
(51, 'asdasd', 'asdasd', 'adsasd', 1, 0, '0000-00-00 00:00:00'),
(52, 'test', 'test', 'test', 1, 0, '0000-00-00 00:00:00'),
(53, 'test', 'test', 'test', 0, 0, '0000-00-00 00:00:00'),
(54, 'asdasd', 'asdasd', 'asdasd', 1, 0, '0000-00-00 00:00:00'),
(55, 'ads', 'asdasd', 'adsasd', 1, 0, '0000-00-00 00:00:00'),
(56, 'testaktion', 'headline', 'test', 1, 1, NULL),
(57, 'agb', 'headline', 'AGB', 1, 1, NULL),
(58, 'agb', 'subheadline', 'I. Allgemeines', 1, 1, NULL),
(59, 'agb', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 1, 1, NULL),
(61, 'faqs', 'headline', 'FAQs', 1, 1, NULL),
(62, 'faqs', 'subheadline', 'Ich habe mein Passwort vergessen, was kann ich tun?', 1, 1, NULL),
(63, 'faqs', 'content', 'Tragen Sie ihre E-Mailadresse oder Ihren Usernamen in das Formular ein und klicken Sie auf den "Passwort vergessen" Link unter dem Formular. Sie erhalten danach eine E-Mail mit allen Informationen um Ihr Passwort zurück zusetzten.', 1, 1, NULL),
(64, 'faqs', 'subheadline', 'Als ich einen Artikel in die Einkaufstasche gelegt habe, war er noch verfügbar, aber an der Kasse war er dann vergriffen. Wie kann das sein?', 2, 1, NULL),
(65, 'faqs', 'content', 'Wir reservieren den Artikel an der Kasse für Sie, sobald Sie Ihren Einkauf abgeschlossen haben. Wenn der Artikel besonders beliebt ist, kann es vorkommen, dass er noch verfügbar ist, wenn Sie ihn in die Einkaufstasche legen, aber bereits verkauft ist, wenn Sie zur Kasse kommen. Ein Artikel, der sich in Ihrer Einkaufstasche befindet, wird für 7 Tage gespeichert, die Verfügbarkeit kann aber nicht garantiert werden.\r\n', 2, 1, NULL),
(66, 'faqs', 'subheadline', 'Wo gebe ich beim Einkaufen meinen Gutscheincode ein', 3, 1, NULL),
(67, 'faqs', 'content', 'Um einen Gutscheincode einzulösen müssen Sie "zur Kasse" gehen und unter dem Punkt Bezahlung und Versand Ihren Gutscheincode eingeben.\r\n', 3, 1, NULL),
(68, 'faqs', 'subheadline', 'Wie bezahle ich?', 4, 1, NULL),
(69, 'faqs', 'content', 'Sie könne per Nachnahmen, Rechnung oder Vorkasse bezahlen. Weitere Informationen dazu finden Sie hier.', 4, 1, NULL),
(74, 'faqs', 'subheadline', 'Wie lange dauert die Lieferung?', 5, 1, NULL),
(75, 'faqs', 'content', 'Ihre Bestellung sollte innerhalb von 3 bis 5 Tagen nach Bestellbestätigung der vorrätigen Artikel geliefert werden. Weitere Informationen zur Lieferung erhalten Sie an der Kasse.\r\n', 5, 1, NULL),
(76, 'faqs', 'subheadline', 'Wohin liefern Sie?', 6, 1, NULL),
(77, 'faqs', 'content', 'Wie liefern nur nach innerhalb von Österreich.', 6, 1, NULL),
(78, 'faqs', 'subheadline', 'Wie gebe ich einen Artikel zurück?', 7, 1, NULL),
(79, 'faqs', 'content', 'Sie können Ihre(n) Artikel innerhalb von 14 Tagen nach Erhalt Ihres Pakets für eine Gebühr in Höhe von 1,00 € zurückschicken. Die Artikel müssen ungetragen und in einwandfreiem Zustand sein.  Alle Pakete enthalten ein Rücksendeetikett und einen Lieferschein. Bitte verwenden Sie dieses Etikett, wenn Sie Artikel zurücksenden möchten.\r\n', 7, 1, NULL),
(80, 'agb', 'subheadline', 'II. BESONDERE BEDINGUNGEN', 2, 1, NULL),
(81, 'agb', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 2, 1, NULL),
(82, 'agb', 'subheadline', 'III. GEWÄHRLEISTUNG', 3, 1, NULL),
(83, 'agb', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 3, 1, NULL),
(84, 'datenschutz', 'headline', 'DATENSCHUTZ', 1, 1, NULL),
(85, 'datenschutz', 'subheadline', 'Lorem Ipsum', 1, 1, NULL),
(86, 'datenschutz', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 1, 1, NULL),
(87, 'datenschutz', 'subheadline', 'Lorem Ipsum', 2, 1, NULL),
(88, 'datenschutz', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 2, 1, NULL),
(89, 'datenschutz', 'subheadline', 'Lorem Ipsum', 3, 1, NULL),
(90, 'datenschutz', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 3, 1, NULL),
(91, 'datenschutz', 'subheadline', 'Lorem Ipsum', 4, 1, NULL),
(93, 'datenschutz', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 4, 1, NULL),
(94, 'agb', 'subheadline', 'IV. LOREM', 4, 1, NULL),
(95, 'agb', 'content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 4, 1, NULL),
(96, 'impressum', 'headline', 'IMPRESSUM', 1, 1, NULL),
(97, 'impressum', 'subheadline', 'Yoga Studio - Lotus Yoga', 1, 1, NULL),
(98, 'impressum', 'content', 'Siebensterngasse 2\r\n', 1, 1, NULL),
(99, 'impressum', 'content', 'Tel.: 01 555 555 55', 2, 1, NULL),
(100, 'impressum', 'content', 'E-Mail: office@lotusyoga.at', 3, 1, NULL),
(101, 'impressum', 'content', 'Web: wwww.lotusyoga.at', 4, 1, NULL),
(103, 'impressum', 'subheadline', 'Firmenname: Lotus Yoga', 2, 1, NULL),
(104, 'impressum', 'content', 'Firmengericht: Handelsgericht Wien', 5, 1, NULL),
(105, 'impressum', 'content', 'FN: 12345LY', 5, 1, NULL),
(106, 'impressum', 'content', 'UID: ATU12345', 6, 1, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
