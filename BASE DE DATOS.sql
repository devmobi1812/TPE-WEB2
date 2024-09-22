-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2024 at 08:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libreria`
--

-- --------------------------------------------------------

--
-- Table structure for table `autores`
--

CREATE TABLE `autores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `biografia` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autores`
--

INSERT INTO `autores` (`id`, `nombre`, `biografia`) VALUES
(1, 'Gabriel García Márquez', 'Gabriel García Márquez fue un escritor colombiano, autor de Cien años de soledad. Ganó el Premio Nobel de Literatura en 1982.'),
(2, 'Isabel Allende', 'Isabel Allende es una autora chilena, conocida por su obra La casa de los espíritus y sus historias que mezclan lo mágico con lo real.'),
(3, 'J.K. Rowling', 'J.K. Rowling es la autora de la serie de libros Harry Potter, que ha sido adaptada al cine y ha vendido millones de copias en todo el mundo.');

-- --------------------------------------------------------

--
-- Table structure for table `libros`
--

CREATE TABLE `libros` (
  `isbn` bigint(13) NOT NULL,
  `titulo` varchar(128) NOT NULL,
  `fecha_de_publicacion` date NOT NULL,
  `editorial` varchar(32) NOT NULL,
  `encuadernado` enum('Tapa dura','Tapa blanda') NOT NULL,
  `sinopsis` varchar(2000) NOT NULL,
  `autor` int(11) NOT NULL,
  `nro_de_paginas` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libros`
--

INSERT INTO `libros` (`isbn`, `titulo`, `fecha_de_publicacion`, `editorial`, `encuadernado`, `sinopsis`, `autor`, `nro_de_paginas`) VALUES
(9780747532743, 'Harry Potter and the Philosopher\'s Stone', '1997-06-26', 'Bloomsbury', 'Tapa dura', 'El primer libro de la famosa serie de Harry Potter, donde Harry descubre que es un mago y asiste a Hogwarts.', 3, 0),
(9788437604947, 'Cien años de soledad', '1967-06-05', 'Sudamericana', 'Tapa dura', 'La obra maestra de García Márquez, que relata la historia de la familia Buendía a lo largo de siete generaciones.', 1, 0),
(9789506441844, 'La casa de los espíritus', '1982-04-12', 'Sudamericana', 'Tapa blanda', 'Novela que narra la saga familiar de los Trueba y los poderes sobrenaturales de algunos de sus miembros.', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `idioma` (`autor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `autores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
