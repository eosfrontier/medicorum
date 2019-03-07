-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 06 mrt 2019 om 16:06
-- Serverversie: 10.0.37-MariaDB-cll-lve
-- PHP-versie: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heirbaut_meditest`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `med_fieldtypes`
--

CREATE TABLE `med_fieldtypes` (
  `fieldtypeID` int(11) NOT NULL,
  `fieldname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fieldlabel` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fielddescription` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `med_fieldtypes`
--

INSERT INTO `med_fieldtypes` (`fieldtypeID`, `fieldname`, `fieldlabel`, `fielddescription`) VALUES
(1, 'bloodtype', 'Bloedgroep', 'Bloedgroep van de persoon (AB+, O-, etc)'),
(2, 'status', 'Status', 'Status van de patient (levend, dood, ziek, niet bestaamd, etc.)'),
(3, 'nextofkin', 'Familieleden', 'Familieleden van de patient'),
(4, 'contact', 'Contact in geval van nood', 'Contactpersoon die in geval van nood kan worden benaderd'),
(5, 'physician', 'Huisarts', 'Huisarts van deze patient'),
(6, 'patientalert', 'waarschuwing', 'melding in scherm bij het vinden van een patient'),
(7, 'contact_contact', 'Contactinformatie van contactpersoon', 'De informatie hoe je contact met de contactpersoon kan krijgen'),
(8, 'physician_contact', 'Contactinformatie van huisarts', 'De informatie hoe je contact met de huisarts kan krijgen'),
(9, 'nextofkinfather', 'Vader', 'de vader van de patient'),
(10, 'nextofkinmother', 'Moeder', 'de moeder van de patient'),
(11, 'medic_allergies', 'Allergieen', 'Bekende allergieen'),
(12, 'medic_implants', 'Implantaten', 'Implantaten die de patient heeft'),
(13, 'medic_dna', 'Erfelijkheid', 'Bekende erfelijke kwalen (in de familie)'),
(14, 'medic_gravity', 'Zwaartekracht indicatie', 'Zwaartekracht gerelateerde problematiek'),
(15, 'treatment-chart', 'Behandelkaart', 'Een enkele behandelkaart voor deze patient.  NB: De velden van de behandelkaart zitten in subfieldvalues, dit veld bevat de titel');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `med_fieldvalues`
--

CREATE TABLE `med_fieldvalues` (
  `fieldvalueID` int(11) NOT NULL,
  `fieldtypeID` int(11) NOT NULL,
  `characterID` int(11) NOT NULL,
  `fieldvalue` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mod_characterID` int(11) NOT NULL,
  `mod_timestamp` datetime DEFAULT CURRENT_TIMESTAMP,
  `close_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `med_subfieldtypes`
--

CREATE TABLE `med_subfieldtypes` (
  `subfieldtypeID` int(11) NOT NULL,
  `fieldtypeID` int(11) NOT NULL,
  `subfieldname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subfieldlabel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subfielddescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `med_subfieldtypes`
--

INSERT INTO `med_subfieldtypes` (`subfieldtypeID`, `fieldtypeID`, `subfieldname`, `subfieldlabel`, `subfielddescription`) VALUES
(1, 15, 'wound', 'Verwonding', NULL),
(2, 15, 'wound-shot', 'Schotwond', NULL),
(3, 15, 'wound-burn', 'Brandwond', NULL),
(4, 15, 'wound-fracture', 'Breuk', NULL),
(5, 15, 'wound-cut', 'Snijwond', NULL),
(6, 15, 'wound-abrasion', 'Schaafwond', NULL),
(7, 15, 'wound-infection', 'Infectie', NULL),
(8, 15, 'wound-blunt', 'Slagwond (stomp)', NULL),
(9, 15, 'wound-sprain', 'Verstuiking/verrekking', NULL),
(10, 15, 'psych', 'Psychologische klachten', NULL),
(11, 15, 'psych-acute', 'Acuut', NULL),
(12, 15, 'psych-long', 'Langdurig', NULL),
(13, 15, 'poison', 'Vergiftiging door (indien bekend)', NULL),
(14, 15, 'other', 'Anders', NULL),
(15, 15, 'care-reanimation', 'Reanimatie', NULL),
(16, 15, 'care-transfusion', 'Bloedtransfusie', NULL),
(17, 15, 'care-scan', 'Scan', NULL),
(18, 15, 'care-transplant', 'Transplantatie', NULL),
(19, 15, 'care-regeneration', 'Regeneratie', NULL),
(20, 15, 'care-psychic', 'Psychische zorg', NULL),
(21, 15, 'care-dental', 'Tandheelkundige zorg', NULL),
(22, 15, 'care-wound', 'Wondzorg', NULL),
(23, 15, 'care-other', 'Anders', NULL),
(24, 15, 'oper-suture', 'Hechten', NULL),
(25, 15, 'oper-removal', 'Verwijderen lichaamsvreemd materiaal', NULL),
(26, 15, 'oper-transplant', 'Transplantatie', NULL),
(27, 15, 'oper-fracture', 'Herstel breuk', NULL),
(28, 15, 'oper-prosthetic', 'Prothese plaatsen/vervangen/onderhoud', NULL),
(29, 15, 'oper-dental', 'Tandheelkundig/endodontologisch', NULL),
(30, 15, 'oper-other', 'Anders', NULL),
(31, 15, 'side-hypertension', 'Bloeddruk verhoogd', NULL),
(32, 15, 'side-drymouth', 'Droge mond', NULL),
(33, 15, 'side-arrythmia', 'Hartritmestoornissen', NULL),
(34, 15, 'side-throatache', 'Keelpijn', NULL),
(35, 15, 'side-gastro', 'Maag en darmklachten', NULL),
(36, 15, 'side-inflammation', 'Ontsteking', NULL),
(37, 15, 'side-insomnia', 'Slaapproblemen', NULL),
(38, 15, 'side-appetite-increase', 'Verhoogde eetlust', NULL),
(39, 15, 'side-confusion', 'Verwardheid', NULL),
(40, 15, 'side-hypotension', 'Bloeddruk verlaagd', NULL),
(41, 15, 'side-vertigo', 'Duizeligheid', NULL),
(42, 15, 'side-headache', 'Hoofdpijn', NULL),
(43, 15, 'side-fever', 'Koorts', NULL),
(44, 15, 'side-nausea', 'Misselijkheid', NULL),
(45, 15, 'side-sensitivity-sun', 'Overgevoeligheid zonlicht', NULL),
(46, 15, 'side-myalgia', 'Spierpijn', NULL),
(47, 15, 'side-appetite-loss', 'Verminderde eetlust', NULL),
(48, 15, 'side-transpiration', 'Zweten', NULL),
(49, 15, 'side-concentration', 'Concentratieproblemen', NULL),
(50, 15, 'side-hairloss', 'Haaruitval', NULL),
(51, 15, 'side-infection', 'Infectie', NULL),
(52, 15, 'side-breathlessness', 'Kortademigheid', NULL),
(53, 15, 'side-bleeding', 'Nabloedingen', NULL),
(54, 15, 'side-panic', 'Paniekaanvallen', NULL),
(55, 15, 'side-muscletwitching', 'Spiertrillen', NULL),
(56, 15, 'side-fatigue', 'Vermoeidheid', NULL),
(57, 15, 'side-functionloss', 'Functieverlies', NULL),
(58, 15, 'side-other', 'Anders', NULL),
(59, 15, 'startdate', 'datum opname', NULL),
(60, 15, 'starttime', 'tijd opname', NULL),
(61, 15, 'enddate', 'datum ontslag', NULL),
(62, 15, 'endtime', 'tijd ontslag', NULL),
(63, 15, 'doctor-responsible', 'Verantwoordelijk arts', NULL),
(64, 15, 'doctor-acting', 'Behandelend arts', NULL),
(65, 15, 'doctor-assisting', 'Assistentie door', NULL),
(66, 15, 'aftercare-plan', 'Nazorg inplannen?', NULL),
(67, 15, 'treated-location', 'Omschrijving behandelde locatie', NULL),
(68, 15, 'used-bloodbags', 'Aantal gebruikte bloedzakken', NULL),
(69, 15, 'used-medication', 'Gebruikte medicatie tijdens de behandeling', NULL),
(70, 15, 'prescribed-medication', 'Voorgeschreven medicatie', NULL),
(71, 15, 'referral', 'Doorverwijzing', NULL),
(72, 15, 'aftercare-appointment', 'Controleafspraak', NULL),
(73, 15, 'care-amputate', 'Amputatie', NULL),
(75, 15, 'oper-amputate', 'Amputatie', NULL),
(76, 15, 'care-aid', 'Hulpmiddel toegepast (mitella, nek-brace, ed)', NULL),
(77, 15, 'care-reanimation-note', 'Reanimatie', 'Reanimatie (Extra notitie)'),
(78, 15, 'care-transfusion-note', 'Bloedtransfusie', 'Bloedtransfusie (Extra notitie)'),
(79, 15, 'care-scan-note', 'Scan', 'Scan (Extra notitie)'),
(80, 15, 'care-regeneration-note', 'Regeneratie', 'Regeneratie (Extra notitie)'),
(81, 15, 'care-psychic-note', 'Psychische zorg', 'Psychische zorg (Extra notitie)'),
(82, 15, 'care-dental-note', 'Tandheelkundige zorg', 'Tandheelkundige zorg (Extra notitie)'),
(83, 15, 'care-other-note', 'Anders', 'Anders (Extra notitie)'),
(84, 15, 'oper-suture-note', 'Hechten', 'Hechten (Extra notitie)'),
(85, 15, 'oper-removal-note', 'Verwijderen lichaamsvreemd materiaal', 'Verwijderen lichaamsvreemd materiaal (Extra notitie)'),
(86, 15, 'oper-fracture-note', 'Herstel breuk', 'Herstel breuk (Extra notitie)'),
(87, 15, 'oper-prosthetic-note', 'Prothese plaatsen/vervangen/onderhoud', 'Prothese plaatsen/vervangen/onderhoud (Extra notitie)'),
(88, 15, 'oper-dental-note', 'Tandheelkundig/endodontologisch', 'Tandheelkundig/endodontologisch (Extra notitie)'),
(89, 15, 'side-other-note', 'Anders', 'Anders (Extra notitie)'),
(90, 15, 'care-amputate-note', 'Amputatie', 'Amputatie (Extra notitie)'),
(91, 15, 'oper-amputate-note', 'Amputatie', 'Amputatie (Extra notitie)'),
(92, 15, 'care-aid-note', 'Hulpmiddel toegepast (mitella, nek-brace, ed)', 'Hulpmiddel toegepast (mitella, nek-brace, ed) (Extra notitie)'),
(93, 15, 'care-transplant-note', 'Transplantatie', 'Transplantatie (Extra notitie)'),
(94, 15, 'care-wound-note', 'Wondzorg', 'Wondzorg (Extra notitie)'),
(95, 15, 'oper-transplant-note', 'Transplantatie', 'Transplantatie (Extra notitie)'),
(96, 15, 'oper-other-note', 'Anders', 'Anders (Extra notitie)'),
(97, 15, 'poison-note', 'Vergiftiging door (indien bekend)', 'Vergiftiging door (indien bekend) (Extra notitie)'),
(98, 15, 'other-note', 'Anders', 'Anders (Extra notitie)');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `med_subfieldvalues`
--

CREATE TABLE `med_subfieldvalues` (
  `subfieldvalueID` int(11) NOT NULL,
  `subfieldtypeID` int(11) NOT NULL,
  `fieldvalueID` int(11) NOT NULL,
  `subfieldvalue` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mod_characterID` int(11) NOT NULL,
  `mod_timestamp` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `med_fieldtypes`
--
ALTER TABLE `med_fieldtypes`
  ADD PRIMARY KEY (`fieldtypeID`),
  ADD UNIQUE KEY `idx_fieldname` (`fieldname`);

--
-- Indexen voor tabel `med_fieldvalues`
--
ALTER TABLE `med_fieldvalues`
  ADD PRIMARY KEY (`fieldvalueID`),
  ADD KEY `idx_character_fieldtype` (`characterID`,`fieldtypeID`) USING BTREE;

--
-- Indexen voor tabel `med_subfieldtypes`
--
ALTER TABLE `med_subfieldtypes`
  ADD PRIMARY KEY (`subfieldtypeID`),
  ADD UNIQUE KEY `idx_subfieldname` (`fieldtypeID`,`subfieldname`) USING BTREE;

--
-- Indexen voor tabel `med_subfieldvalues`
--
ALTER TABLE `med_subfieldvalues`
  ADD PRIMARY KEY (`subfieldvalueID`),
  ADD KEY `idx_fieldvalueID` (`fieldvalueID`,`subfieldtypeID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `med_fieldtypes`
--
ALTER TABLE `med_fieldtypes`
  MODIFY `fieldtypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `med_fieldvalues`
--
ALTER TABLE `med_fieldvalues`
  MODIFY `fieldvalueID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `med_subfieldtypes`
--
ALTER TABLE `med_subfieldtypes`
  MODIFY `subfieldtypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT voor een tabel `med_subfieldvalues`
--
ALTER TABLE `med_subfieldvalues`
  MODIFY `subfieldvalueID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
