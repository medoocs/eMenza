-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 01:42 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menza`
--

-- --------------------------------------------------------

--
-- Table structure for table `cet`
--

CREATE TABLE `cet` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cet`
--

INSERT INTO `cet` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od Cvjetace', 'Kosani odrezak', 'Pire krumpir', 'Kupus', 'Kremsnita'),
(2, 'Bistra juha', 'Mesne okruglice', 'Palenta', 'Kupus', 'Ledeni vjetar'),
(3, 'Juha od brokule', 'Odrezak od soje', 'Tortelini sa sirom ', 'Zelena salata', 'Krempita');

-- --------------------------------------------------------

--
-- Table structure for table `cet2`
--

CREATE TABLE `cet2` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cet2`
--

INSERT INTO `cet2` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od brokule', 'Becki odrezak', 'Njoki sa gulasom', 'Zelena salata', 'Ledeni vjetar'),
(2, 'Juha od cvjetace', 'Mesne okruglice', 'Palenta', 'Cikla', 'Banana'),
(3, 'Juha bistra', 'Odrezak od soje', 'Pire krumpir', 'Zelena salata', 'Grejp');

-- --------------------------------------------------------

--
-- Table structure for table `cet3`
--

CREATE TABLE `cet3` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cet3`
--

INSERT INTO `cet3` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od gljiva', 'Kosani odrezak', 'Pileci rizoto', 'Zelena salata', 'Jogurt'),
(2, 'Proljetna juha', 'Grah varivo', 'Hrenovke', 'Kupus', 'Jabuka'),
(3, 'Juha od cvjetace', 'Pohana brokula', 'Mahune u umaku', 'Zelena salata', 'Puding od vanilije');

-- --------------------------------------------------------

--
-- Table structure for table `jelo`
--

CREATE TABLE `jelo` (
  `Id_Jelo` int(11) NOT NULL,
  `Ime_Jela` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `Bjelancevine` int(11) NOT NULL,
  `Ugljikohidrati` int(11) NOT NULL,
  `Masti` int(11) NOT NULL,
  `Sol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jelo`
--

INSERT INTO `jelo` (`Id_Jelo`, `Ime_Jela`, `Bjelancevine`, `Ugljikohidrati`, `Masti`, `Sol`) VALUES
(1, 'Pomfrit', 4, 44, 16, 0),
(2, 'Pire krumpir', 2, 17, 4, 0),
(3, 'Pohani sir', 0, 14, 9, 0),
(4, 'Juha od gljiva', 5, 4, 11, 0),
(5, 'Proljetna juha', 2, 9, 3, 0),
(6, 'Lignje na zaru', 27, 104, 4, 2),
(7, 'Becki odrezak', 10, 49, 3, 0),
(8, 'Cikla', 1, 8, 230, 0),
(9, 'Zelena salata', 1, 1, 0, 0),
(10, 'Kupus', 0, 0, 0, 0),
(11, 'Rajcica', 25, 31, 3, 1),
(12, 'Tjestenina sa gljivama', 12, 48, 17, 0),
(13, 'Cordon blue', 72, 19, 24, 1),
(14, 'Ledene kocke', 2, 30, 9, 1),
(15, 'Tiramisu', 4, 40, 18, 0),
(16, 'Puding od vanilije', 0, 17, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `komentar_menze`
--

CREATE TABLE `komentar_menze` (
  `Id_Comm_Menze` int(11) NOT NULL,
  `Komentar` text NOT NULL,
  `Username` text NOT NULL,
  `DATE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_menze`
--

INSERT INTO `komentar_menze` (`Id_Comm_Menze`, `Komentar`, `Username`, `DATE`) VALUES
(86, 'Super!', 'nikolic', '29-01-2018 01:37:09am'),
(87, 'Paaaaaa, onako', 'renco', '29-01-2018 01:38:27am');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_menze2`
--

CREATE TABLE `komentar_menze2` (
  `Id_Comm_Menze2` int(11) NOT NULL,
  `Komentar` text NOT NULL,
  `Username` text NOT NULL,
  `DATE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_menze2`
--

INSERT INTO `komentar_menze2` (`Id_Comm_Menze2`, `Komentar`, `Username`, `DATE`) VALUES
(16, 'Velike guzve brate', 'nikolic', '29-01-2018 01:37:24am');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_menze3`
--

CREATE TABLE `komentar_menze3` (
  `Id_Comm_Menze3` int(11) NOT NULL,
  `Komentar` text NOT NULL,
  `Username` text NOT NULL,
  `DATE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_menze3`
--

INSERT INTO `komentar_menze3` (`Id_Comm_Menze3`, `Komentar`, `Username`, `DATE`) VALUES
(9, 'Brutalno...', 'nikolic', '29-01-2018 01:37:35am'),
(10, 'Vidio sam i bolje', 'renco', '29-01-2018 01:38:44am');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `Username` varchar(11) NOT NULL,
  `Email` text NOT NULL,
  `Lozinka` text NOT NULL,
  `Ovlasti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`Username`, `Email`, `Lozinka`, `Ovlasti`) VALUES
('13', '13@13.com', 'c51ce410c124a10e0db5e4b97fc2af39', 1),
('farina', '', '', 1),
('nikolic', 'nikolic@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
('renco', 'renco@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ocjena1`
--

CREATE TABLE `ocjena1` (
  `id` int(11) NOT NULL,
  `ocjena` int(11) NOT NULL,
  `submittedby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocjena1`
--

INSERT INTO `ocjena1` (`id`, `ocjena`, `submittedby`) VALUES
(1, 5, 'nikolic'),
(2, 5, '13'),
(3, 5, 'aba'),
(4, 1, 'mevar');

-- --------------------------------------------------------

--
-- Table structure for table `ocjena2`
--

CREATE TABLE `ocjena2` (
  `id` int(11) NOT NULL,
  `ocjena` int(11) NOT NULL,
  `submittedby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocjena2`
--

INSERT INTO `ocjena2` (`id`, `ocjena`, `submittedby`) VALUES
(1, 5, 'nikolic'),
(2, 3, 'niko'),
(3, 1, 'aba'),
(4, 1, '13');

-- --------------------------------------------------------

--
-- Table structure for table `ocjena3`
--

CREATE TABLE `ocjena3` (
  `id` int(11) NOT NULL,
  `ocjena` int(11) NOT NULL,
  `submittedby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocjena3`
--

INSERT INTO `ocjena3` (`id`, `ocjena`, `submittedby`) VALUES
(1, 1, 'nikolic'),
(2, 4, 'mevar'),
(3, 5, 'aba'),
(4, 2, '13');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od rajcice', 'Raznjici', 'Tjestenina bologneze', 'Zelena salata', 'Stefanija'),
(2, 'Juha od gljiva', 'Pohani Oslic', 'Blitva s krumpirom', 'Zelena salata ', 'Euphorija'),
(3, 'Juha od gljiva', 'Pohana cvjetaca', 'Zeleni rizot', 'Cikla', 'Euphoria');

-- --------------------------------------------------------

--
-- Table structure for table `pet2`
--

CREATE TABLE `pet2` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet2`
--

INSERT INTO `pet2` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od gljiva', 'Lignje na brodet', 'Slani krumpir', 'Zelena salata', 'Puding'),
(2, 'Proljetna juha', 'Becki odrezak', 'Pomfrit', 'Cikla', 'Banana'),
(3, 'Juha od brokule', 'Pohana cvjetaca', 'Zeleni rizoto', 'Mrkva', 'Banana');

-- --------------------------------------------------------

--
-- Table structure for table `pet3`
--

CREATE TABLE `pet3` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet3`
--

INSERT INTO `pet3` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od brokula', 'Kosani odrezak', 'Pire krumpir', 'Cikla', 'Puding od vanilije'),
(2, 'Bistra juha', 'Svinjski odrezak', 'Pire krumpir', 'Zelena salata', 'Jogurt'),
(3, 'Juha od brokule', 'Tikvice na zaru', 'Riza s povrcem', 'Cikla', 'Puding od cokolade');

-- --------------------------------------------------------

--
-- Table structure for table `pon`
--

CREATE TABLE `pon` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pon`
--

INSERT INTO `pon` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od gljiva', 'Becki odrezak', 'Pomfrit', 'Zelena salata', 'Puding'),
(2, 'Juha od rajcice', 'Pljeskavice', 'Pomfrit', 'Kupus', 'Ledene kocke'),
(3, 'Juha od brokule', 'Pohani sir', 'Grasak s mrkvom', 'Kupus', 'Jogurt');

-- --------------------------------------------------------

--
-- Table structure for table `pon2`
--

CREATE TABLE `pon2` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pon2`
--

INSERT INTO `pon2` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od gljiva', 'Kosani odrezak', 'Pire krumpir', 'Kupus', 'Ledena kocka'),
(2, 'Bistra juha', 'Pohani sir', 'Pire krumpir', 'Zelena salata', 'Stefanija'),
(3, 'Juha od brokule', 'Pohani sir', 'Grasak s mrkvom', 'kupus', 'Ledeni vjetar');

-- --------------------------------------------------------

--
-- Table structure for table `pon3`
--

CREATE TABLE `pon3` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pon3`
--

INSERT INTO `pon3` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Proljetna juha', 'Raznjici', 'Pire krumpir', 'Zelena salata', 'Krempita'),
(2, 'Bistra juha', 'Odrezak u umaku od sira', 'Pire krumpir', 'Cikla', 'Ledeni vjetar'),
(3, 'Juha od brokule', 'Odrezak od soje', 'Pomfrit', 'Mrkva', 'Ledeni vjetar');

-- --------------------------------------------------------

--
-- Table structure for table `sri`
--

CREATE TABLE `sri` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sri`
--

INSERT INTO `sri` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Proljetna juha', 'Pohani oslic', 'Mlinci', 'Zelena salata', 'Banana'),
(2, 'Juha od gljiva', 'Becki', 'Musaka', 'Zelena salata', 'Nanana'),
(3, 'Juha od brokule', 'Odrezak od soje', 'Rezanci s brokulom', 'Mrkva', 'Grejp');

-- --------------------------------------------------------

--
-- Table structure for table `sri2`
--

CREATE TABLE `sri2` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sri2`
--

INSERT INTO `sri2` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha bistra', 'Mesne okruglice', 'Pire krumpir', 'Kupus', 'Ledena kocka'),
(2, 'Juha od gljiva', 'Becki odrezak', 'Spageti milanez', 'Kupus', 'Jogurt'),
(3, 'Juha od brokule', 'Pohani sir', 'Grasak s mrkvom', 'Cikla', 'Grejp');

-- --------------------------------------------------------

--
-- Table structure for table `sri3`
--

CREATE TABLE `sri3` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sri3`
--

INSERT INTO `sri3` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od brokule', 'Kosani odrezak', 'Pire krumpir', 'Cikla', 'Krempita'),
(2, 'Juha od brokule', 'Becki odrezak', 'Pire krumpir', 'Mrkva', 'Banana'),
(3, 'Juha od rajcice', 'Odrezak od soje', 'Zapecena tjestenina', 'Cikla', 'Ledene kocke');

-- --------------------------------------------------------

--
-- Table structure for table `uto`
--

CREATE TABLE `uto` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uto`
--

INSERT INTO `uto` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Bistra juha', 'Raznjici', 'Tjestenina', 'Cikla', 'Tiramisu'),
(2, 'Juha od rajcice', 'Lignje na zaru', 'Pomfrit', 'Kupus', 'Euphoria'),
(3, 'Juha od brokule', 'Pohani sir', 'Pomfrit', 'Cikla', 'Banana');

-- --------------------------------------------------------

--
-- Table structure for table `uto2`
--

CREATE TABLE `uto2` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uto2`
--

INSERT INTO `uto2` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od cvjetace', 'Kotlet u povrcu', 'Blitva s krumpirom', 'Zelena salata', 'Jogurt'),
(2, 'Juha od brokule', 'Pohani oslic', 'Rezanci s brokulom', 'Mrkva', 'Naranca'),
(3, 'Juha od koromaca', 'Odrezak od soje', 'Tortelini od sira', 'Zelena salata', 'Puding od cokolade');

-- --------------------------------------------------------

--
-- Table structure for table `uto3`
--

CREATE TABLE `uto3` (
  `Id` int(11) NOT NULL,
  `Juha` text NOT NULL,
  `Gl_Jelo` text NOT NULL,
  `Prilog` text NOT NULL,
  `Salata` text NOT NULL,
  `Desert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uto3`
--

INSERT INTO `uto3` (`Id`, `Juha`, `Gl_Jelo`, `Prilog`, `Salata`, `Desert`) VALUES
(1, 'Juha od rajcice', 'Mesne okruglice', 'Pire krumpir', 'Kupus', 'Stefanija'),
(2, 'Juha bistra', 'Pljeskavice', 'Pomfrit', 'Cikla', 'Puding'),
(3, 'Juha od brokule', 'Pohani oslic', 'Pire krumpir', 'Zelena salata', 'Puding od vanilije');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cet`
--
ALTER TABLE `cet`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cet2`
--
ALTER TABLE `cet2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cet3`
--
ALTER TABLE `cet3`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jelo`
--
ALTER TABLE `jelo`
  ADD PRIMARY KEY (`Id_Jelo`);

--
-- Indexes for table `komentar_menze`
--
ALTER TABLE `komentar_menze`
  ADD PRIMARY KEY (`Id_Comm_Menze`);

--
-- Indexes for table `komentar_menze2`
--
ALTER TABLE `komentar_menze2`
  ADD PRIMARY KEY (`Id_Comm_Menze2`);

--
-- Indexes for table `komentar_menze3`
--
ALTER TABLE `komentar_menze3`
  ADD PRIMARY KEY (`Id_Comm_Menze3`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `ocjena1`
--
ALTER TABLE `ocjena1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocjena2`
--
ALTER TABLE `ocjena2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocjena3`
--
ALTER TABLE `ocjena3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pet2`
--
ALTER TABLE `pet2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pet3`
--
ALTER TABLE `pet3`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pon`
--
ALTER TABLE `pon`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pon2`
--
ALTER TABLE `pon2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pon3`
--
ALTER TABLE `pon3`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sri`
--
ALTER TABLE `sri`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sri2`
--
ALTER TABLE `sri2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sri3`
--
ALTER TABLE `sri3`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `uto`
--
ALTER TABLE `uto`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `uto2`
--
ALTER TABLE `uto2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `uto3`
--
ALTER TABLE `uto3`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cet`
--
ALTER TABLE `cet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jelo`
--
ALTER TABLE `jelo`
  MODIFY `Id_Jelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komentar_menze`
--
ALTER TABLE `komentar_menze`
  MODIFY `Id_Comm_Menze` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `komentar_menze2`
--
ALTER TABLE `komentar_menze2`
  MODIFY `Id_Comm_Menze2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komentar_menze3`
--
ALTER TABLE `komentar_menze3`
  MODIFY `Id_Comm_Menze3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ocjena1`
--
ALTER TABLE `ocjena1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ocjena2`
--
ALTER TABLE `ocjena2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ocjena3`
--
ALTER TABLE `ocjena3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pon`
--
ALTER TABLE `pon`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sri`
--
ALTER TABLE `sri`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uto`
--
ALTER TABLE `uto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
