-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 05:34 PM
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
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id_com` int(11) NOT NULL,
  `comentario` varchar(114) NOT NULL,
  `pontos` int(1) NOT NULL,
  `recurso` varchar(255) NOT NULL,
  `user` varchar(72) NOT NULL,
  `user_name` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id_com`, `comentario`, `pontos`, `recurso`, `user`, `user_name`) VALUES
(1, 'Funciona como esperava! ', 5, '13', '15', 'Inesooo'),
(2, 'Tem os seus problemas mas funciona bem. ', 3, '14', '15', 'Ines'),
(3, 'Nao presta! ', 1, '15', '15', 'Ines'),
(4, 'Um pouco dificil, mas capaz de grandes coisas. ', 4, '13', '16', 'Guilherme'),
(5, 'A Ines não sabe nada, isto funciona muito bem! ', 5, '15', '12', 'res'),
(6, 'É estranho ', 3, '13', '12', 'res');

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
  `tipo` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `espaco` varchar(72) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `reserva_user` varchar(72) NOT NULL,
  `start_date` varchar(72) NOT NULL,
  `end_date` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recursos`
--

INSERT INTO `recursos` (`id_rec`, `modelo`, `tipo`, `material`, `espaco`, `estado`, `reserva_user`, `start_date`, `end_date`) VALUES
(13, 'Ultimaker Original', 'Impressora 3D FMD	', 'PLA, ABS', 'Impressao', 'disponivel', '12', 'sadsa', 'sad'),
(14, 'Epilog Legend 36EXT', 'Corte Laser e gravura', 'Acrilico, Madeira Solida, MDF, Papel, Cartão, Couro, Tecidos', 'Impressao', 'disponivel', '12', '2018-01-09', '2018-01-17'),
(15, 'dsadsads', 'dsads', 'sadsa', 'sdsa', 'sda', '', '2018-01-08', '2018-01-16');

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
(6, 'David', 'Soares', 123456789, 'admin', 'dvdguarda@hotmail.com', 'admin', 0, '2018-01-13', 'admin', 0),
(12, 'res', 'res', 768768, 'res', 'gfh@e.op', 'res', 0, '2018-01-14', 'registado', 0),
(14, 'Jorge', 'Lopes', 934876543, 'pen', 'jorge.ploi@gmail.com', 'pen', 0, '2018-01-14', 'pendente', 0),
(15, 'Ines', 'Olivas', 2147483647, 'olives', 'oliveirinha@gmail.com', 'daserra', 0, '2018-01-14', 'registado', 0),
(16, 'Guilherme', 'Santos', 934572739, 'guitos', 'gui.hoi@hotmail.com', 'guitos123', 0, '2018-01-15', 'registado', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_com`);

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
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
