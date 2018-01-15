-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 12:59 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspirelab`
--

-- --------------------------------------------------------

--
-- Table structure for table `mensagens`
--

CREATE TABLE `mensagens` (
  `id_msg` int(11) NOT NULL,
  `mensagem` varchar(720) NOT NULL,
  `ip` int(36) NOT NULL,
  `criado_a` date NOT NULL,
  `remetente` varchar(72) NOT NULL,
  `destinatario` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE `recursos` (
  `id_rec` int(11) NOT NULL,
  `modelo` varchar(72) NOT NULL,
  `quantidade` tinyint(4) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `espaco` varchar(72) NOT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recursos`
--

INSERT INTO `recursos` (`id_rec`, `modelo`, `quantidade`, `tipo`, `material`, `espaco`, `estado`) VALUES
(1, 'Ultimaker Original', 2, 'Impressora 3D FMD', 'PLA, ABS', '', '0'),
(3, 'Epilog Legend 36EXT', 1, 'Corte Laser e gravura', 'Acrilico, Madeira Solida, MDF, Papel, Cartão, Couro, Tecidos', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id_user` int(11) NOT NULL,
  `primeiro nome` varchar(72) NOT NULL,
  `ultimo nome` varchar(72) NOT NULL,
  `telemovel` int(9) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ip` int(15) NOT NULL,
  `data_reg` date NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `n_reservas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizadores`
--

INSERT INTO `utilizadores` (`id_user`, `primeiro nome`, `ultimo nome`, `telemovel`, `username`, `email`, `password`, `ip`, `data_reg`, `user_type`, `n_reservas`) VALUES
(1, 'Antonio', 'Soares', 2147483647, 'dvdguarda@hotmail.com', 'banana', 'banana3', 0, '2018-01-09', 'pendente', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id_msg`);

--
-- Indexes for table `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id_rec`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
