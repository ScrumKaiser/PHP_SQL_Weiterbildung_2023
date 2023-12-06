-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Nov 2023 um 08:53
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `filmverleih`
--
CREATE DATABASE IF NOT EXISTS `filmverleih` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `filmverleih`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titel` varchar(150) NOT NULL,
  `spieldauer` int(11) DEFAULT NULL,
  `erscheinungsjahr` int(11) NOT NULL,
  `kurzbeschreibung` text DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `regisseur_id` int(11) DEFAULT NULL,
  `preiskategorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `filme`
--

INSERT INTO `filme` (`id`, `titel`, `spieldauer`, `erscheinungsjahr`, `kurzbeschreibung`, `genre`, `regisseur_id`, `preiskategorie_id`) VALUES
(1, 'Cube', 90, 1997, '7 völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.', 'scifi', 1, 1),
(2, 'Herr der Ringe - Die Gefährten', 178, 2001, 'In einem kleinen Dorf wird einem junger Hobbit namens Frodo mit ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksaalsberg begeben um ihn zu zerstören.', 'fantasy', 2, 2),
(3, 'Mononoke-hime', 134, 1997, 'Das Schicksaal der Welt liegt in den Händen eines einzigen Kriegers.', 'anime', 3, 1),
(4, 'Donnie Darko', 113, 2001, 'Das Leben ist eine lange verrückte Reise. Einige Leute haben einfach einen besseren Orientierungssinn', 'fantasy', 4, 1),
(5, 'The Dark Knight', 152, 2008, 'Batman, Gordon und Harvey Dent müssen den Joker stoppen, ein Anarchistengenie, der einen Ring der Gewalt über die Stadt legt.', 'action', 5, 3),
(6, 'The Prestige', 130, 2006, 'Robert und Alfred sind Magierrivalen. Als Alfred den ultimativen Trick zeigt, versucht Robert verzweifelt das Geheimnis herauszufinden.', 'fantasy', 5, 1),
(7, 'The Ring', 115, 2002, 'Bevor Du stirbst siehst Du den Ring.', 'horror', 6, 1),
(8, 'The Ring 2', 110, 2005, 'Fear comes full circle.', 'horror', 8, 1),
(9, 'Inglourious Basterds', 153, 2009, 'Es war einmal in einem von Nazis besetzen Frankreich...', 'drama', 7, 3),
(10, 'Star Trek', 127, 2009, 'Die Zukunft beginnt', 'scifi', 9, 3),
(11, 'District 9', 153, 2009, 'Eine auserirdische Rasse ist gezwungen auf der Erde in Slums zu leben...', 'scifi', 10, 3),
(12, 'Fluch der Karibik', 143, 2003, 'Der Schied \"Will Turner\" verbündet sich mit dem Piraten \"Captain\" Jack Sparrow\" um seine Geliebte zu retten', 'abenteuer', 6, 2),
(13, 'Herr der Ringe - Die Zwei Türme', 179, 2002, 'Frodo & Sam begeben sich nach Mordor um den Ring zu zerstören.', 'fantasy', 2, 2),
(14, 'Braindead', 104, 1992, 'Die Mutter eines Jungen Mannes wird im Zoo gebissen...', 'horror', 2, 1),
(15, 'Pulp Fiction', 154, 1994, 'Die Leben von 2 Auftragsmördern, Einem Boxer und der Frau eines Gangsters vermischen sich..', 'drama', 7, 2),
(16, 'Public Enemies', 140, 2009, 'Americas Meistgesuchter..', 'drama', 14, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme_personen`
--

CREATE TABLE `filme_personen` (
  `schauspieler_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `filme_personen`
--

INSERT INTO `filme_personen` (`schauspieler_id`, `film_id`) VALUES
(2, 14),
(11, 5),
(11, 6),
(11, 16),
(12, 12),
(12, 16),
(13, 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `geburtsdatum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`id`, `name`, `geburtsdatum`) VALUES
(1, 'Vincent Natali', '1969-01-06'),
(2, 'Peter Jackson', '1961-10-31'),
(3, 'Miyazaki Hayao', '1951-01-05'),
(4, 'Kelly Richard', '1975-03-28'),
(5, 'Christopher Nolan', '1970-07-30'),
(6, 'Gore Verbinski', '1964-03-16'),
(7, 'Quentin Tarantino', '1963-03-27'),
(8, 'Hideo Nakata', '1963-03-27'),
(9, 'Jeffrey Abrams', '1966-06-27'),
(10, 'Neill Blomkamp', '1979-09-17'),
(11, 'Christian Bale', '1974-01-30'),
(12, 'Johnny Depp', '1963-06-09'),
(13, 'Brad Pit', '1963-12-18'),
(14, 'Michael Mann', '1963-12-18');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `preiskategorien`
--

CREATE TABLE `preiskategorien` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `preis` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `preiskategorien`
--

INSERT INTO `preiskategorien` (`id`, `name`, `preis`) VALUES
(1, 'günstig', 0.50),
(2, 'beliebt', 1.00),
(3, 'neu', 2.00);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titel` (`titel`,`erscheinungsjahr`),
  ADD KEY `regisseur_id` (`regisseur_id`),
  ADD KEY `preiskategorie_id` (`preiskategorie_id`);

--
-- Indizes für die Tabelle `filme_personen`
--
ALTER TABLE `filme_personen`
  ADD PRIMARY KEY (`schauspieler_id`,`film_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `preiskategorien`
--
ALTER TABLE `preiskategorien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `preiskategorien`
--
ALTER TABLE `preiskategorien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `filme_ibfk_1` FOREIGN KEY (`regisseur_id`) REFERENCES `personen` (`id`),
  ADD CONSTRAINT `filme_ibfk_2` FOREIGN KEY (`preiskategorie_id`) REFERENCES `preiskategorien` (`id`);

--
-- Constraints der Tabelle `filme_personen`
--
ALTER TABLE `filme_personen`
  ADD CONSTRAINT `filme_personen_ibfk_1` FOREIGN KEY (`schauspieler_id`) REFERENCES `personen` (`id`),
  ADD CONSTRAINT `filme_personen_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `filme` (`id`);
--
-- Datenbank: `fluggesellschaft`
--
CREATE DATABASE IF NOT EXISTS `fluggesellschaft` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fluggesellschaft`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `flugzeugtypen`
--

CREATE TABLE `flugzeugtypen` (
  `modell` varchar(80) NOT NULL,
  `hersteller` varchar(60) NOT NULL,
  `flugstunden` int(11) DEFAULT NULL,
  `hoechstgeschwindigkeit` int(11) DEFAULT NULL,
  `erstflug` date DEFAULT NULL,
  `typische_sitzanzahl` int(11) DEFAULT NULL,
  `reichweite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `flugzeugtypen`
--

INSERT INTO `flugzeugtypen` (`modell`, `hersteller`, `flugstunden`, `hoechstgeschwindigkeit`, `erstflug`, `typische_sitzanzahl`, `reichweite`) VALUES
('A319', 'Airbus', 64012, 871, '1995-08-25', 156, 3350),
('A330', 'Airbus', 102420, 912, '1992-11-02', 400, 9500),
('A380', 'Airbus', 24682, 961, '2005-04-27', 555, 1185);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `piloten`
--

CREATE TABLE `piloten` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `vorname` varchar(40) NOT NULL,
  `geburtsdatum` date DEFAULT NULL,
  `flugstunden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `piloten`
--

INSERT INTO `piloten` (`id`, `name`, `vorname`, `geburtsdatum`, `flugstunden`) VALUES
(1, 'Alpha', 'Albert', '1986-11-07', 46844),
(2, 'Beta', 'Bernard', '1972-08-10', 62845),
(3, 'Charlie', 'Charles', '1990-01-20', 25690);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `flugzeugtypen`
--
ALTER TABLE `flugzeugtypen`
  ADD PRIMARY KEY (`modell`,`hersteller`);

--
-- Indizes für die Tabelle `piloten`
--
ALTER TABLE `piloten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `piloten`
--
ALTER TABLE `piloten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Datenbank: `partnervermittlung`
--
CREATE DATABASE IF NOT EXISTS `partnervermittlung` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `partnervermittlung`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `vorname` varchar(40) NOT NULL,
  `geschlecht` varchar(8) DEFAULT NULL,
  `haarfarbe` varchar(20) DEFAULT NULL,
  `groesse` int(11) DEFAULT NULL,
  `gewicht` int(11) DEFAULT NULL,
  `geburtsdatum` date NOT NULL,
  `wohnort` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`id`, `name`, `vorname`, `geschlecht`, `haarfarbe`, `groesse`, `gewicht`, `geburtsdatum`, `wohnort`) VALUES
(1, 'Meier', 'Hans', 'männlich', 'brunette', 182, 80, '1968-06-08', 'Castrop-Rauxel'),
(2, 'Weich', 'Kevin', 'männlich', 'grau', 178, 82, '1972-07-12', 'Buxtehude'),
(3, 'Musterfrau', 'Jaqueline', 'weiblich', 'blond', 165, 68, '1992-02-23', 'Berlin');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Datenbank: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Daten für Tabelle `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"relation_lines\":\"true\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Daten für Tabelle `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"filmverleih\",\"table\":\"filme\"},{\"db\":\"filmverleih\",\"table\":\"filme_personen\"},{\"db\":\"filmverleih\",\"table\":\"preiskategorien\"},{\"db\":\"filmverleih\",\"table\":\"personen\"},{\"db\":\"seminarverwaltung\",\"table\":\"nimmt_teil\"},{\"db\":\"seminarverwaltung\",\"table\":\"seminartermine\"},{\"db\":\"filmverleih\",\"table\":\"spielt\"},{\"db\":\"seminarverwaltung\",\"table\":\"seminare\"},{\"db\":\"seminarverwaltung\",\"table\":\"benutzer\"},{\"db\":\"filmverleih\",\"table\":\"regisseure\"}]');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Daten für Tabelle `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-11-15 07:52:53', '{\"Console\\/Mode\":\"show\",\"lang\":\"de\",\"ThemeDefault\":\"boodark\"}');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indizes für die Tabelle `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indizes für die Tabelle `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indizes für die Tabelle `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indizes für die Tabelle `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indizes für die Tabelle `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indizes für die Tabelle `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indizes für die Tabelle `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indizes für die Tabelle `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indizes für die Tabelle `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indizes für die Tabelle `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indizes für die Tabelle `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indizes für die Tabelle `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indizes für die Tabelle `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Datenbank: `seminarverwaltung`
--
CREATE DATABASE IF NOT EXISTS `seminarverwaltung` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `seminarverwaltung`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `id` int(11) NOT NULL,
  `anrede` varchar(10) DEFAULT NULL,
  `vorname` varchar(40) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passwort` varchar(20) DEFAULT NULL,
  `registriert_seit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`id`, `anrede`, `vorname`, `name`, `email`, `passwort`, `registriert_seit`) VALUES
(1, 'Herr', 'Frank', 'Reich', 'f.reich@example.com', 'kochtopf', '2008-04-12'),
(2, 'Frau', 'Marie', 'Huana', 'huana@example.com', 'reibekuche', '2009-02-03'),
(3, 'Herr', 'Andreas', 'Meisenbär', 'a.meisenbär@example.com', 'schüssel', '2008-07-15'),
(4, 'Herr', 'Klaus', 'Uhr', 'klaus@ur.org', 'bratpfanne', '2008-02-05'),
(5, 'Herr', 'Mike', 'Rosoft', 'sichtbar_grundlegend@kleinweich.com', 'teekessel', '2009-11-11'),
(6, 'Dr', 'Beatrice', 'Lödmann', 'beatrice@fraudoktor.de', 'kaffeemuehle', '2006-09-09');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer_seminartermine`
--

CREATE TABLE `benutzer_seminartermine` (
  `benutzer_id` int(11) NOT NULL,
  `seminartermin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `benutzer_seminartermine`
--

INSERT INTO `benutzer_seminartermine` (`benutzer_id`, `seminartermin_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `seminare`
--

CREATE TABLE `seminare` (
  `id` int(11) NOT NULL,
  `titel` varchar(120) DEFAULT NULL,
  `beschreibung` text DEFAULT NULL,
  `preis` decimal(6,2) DEFAULT NULL,
  `kategorie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `seminare`
--

INSERT INTO `seminare` (`id`, `titel`, `beschreibung`, `preis`, `kategorie`) VALUES
(1, 'Relationale Datenbanken & MySQL', 'Nahezu alle modernen W...', 975.00, 'Datenbanken'),
(2, 'Ruby on Rails', 'Ruby on Rails ist das neue, sensation...', 2500.00, 'Programmierung'),
(3, 'Ajax & DOM-Scripting', 'Ajax ist längst dem Hype-Stadium ... JavaScript ist dabei ein essentieller Teil ...', 1699.99, 'Programmierung'),
(4, 'Moderne JavaScript-Programmierung', '...gilt als DIE Programmiersprache für clientseitige Web...', 2500.00, 'Programmierung'),
(5, 'Adobe Flash Professional (Grundlagen)', 'Adobe Flash bringt voll animierte, multimediale, interaktive Präsentationen und Anwendungen ...', 1500.00, 'Webdesign'),
(6, 'Adobe Flash Professional (ActionScript)', 'Für anspruchsvolle Flash-Präsentationen und interaktive Anwendungen werden fundierte Kenntnisse in der Programmierung mit ActionScript ...', 1500.00, 'Programmierung'),
(7, 'Digitale Bildbearbeitung mit Adobe Photoshop', 'In diesem Seminar lernen Sie die Grundlagen der digitalen Bildbearbeitung mit Adobe Photoshop ...', 1500.00, 'Webdesign');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `seminartermine`
--

CREATE TABLE `seminartermine` (
  `id` int(11) NOT NULL,
  `beginn` date DEFAULT NULL,
  `ende` date DEFAULT NULL,
  `raum` varchar(30) DEFAULT NULL,
  `seminar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `seminartermine`
--

INSERT INTO `seminartermine` (`id`, `beginn`, `ende`, `raum`, `seminar_id`) VALUES
(1, '2005-06-20', '2005-06-25', 'Schulungsraum 1', 1),
(2, '2005-11-07', '2005-11-12', 'Schulungsraum 2', 1),
(3, '2006-03-20', '2006-03-25', 'Schulungsraum 1', 1),
(4, '2006-12-04', '2006-12-09', 'Besprechungsraum', 1),
(5, '2005-01-17', '2005-01-24', 'Schulungsraum 1', 4),
(6, '2005-05-31', '2005-06-07', 'Aula', 4),
(7, '2005-10-17', '2005-10-24', 'Schulungsraum 2', 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `benutzer_seminartermine`
--
ALTER TABLE `benutzer_seminartermine`
  ADD PRIMARY KEY (`benutzer_id`,`seminartermin_id`);

--
-- Indizes für die Tabelle `seminare`
--
ALTER TABLE `seminare`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `seminartermine`
--
ALTER TABLE `seminartermine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `seminare`
--
ALTER TABLE `seminare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `seminartermine`
--
ALTER TABLE `seminartermine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
