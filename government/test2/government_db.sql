-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 01:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `government_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `official_id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `salary_grade` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`official_id`, `name`, `salary_grade`, `position`) VALUES
(1, 'Ferdinand Marcos Jr.', '33', 'President'),
(2, 'Sara Duterte', '32', 'Vice President'),
(3, 'Juan Miguel Zubiri', '32', 'Senator'),
(4, 'Martin Romualdez', '30', 'Congressman'),
(5, 'Benjamin Diokno', '31', 'Cabinet Secretary'),
(6, 'Maria Rosario Vergeire', '29', 'Undersecretary'),
(7, 'Eduardo Año', '28', 'Assistant Secretary'),
(8, 'John Sevilla', '28', 'Commissioner'),
(9, 'Jose Maria Chan', '27', 'Director General'),
(10, 'Enrique Manalo', '27', 'Ambassador'),
(11, 'Menardo Guevarra', '30', 'Solicitor General'),
(12, 'Alexander Gesmundo', '32', 'Chief Justice'),
(13, 'Antonio Carpio', '31', 'Associate Justice'),
(14, 'Samuel Martires', '32', 'Ombudsman'),
(15, 'Cyril Ramos', '30', 'Deputy Ombudsman'),
(16, 'Gwendolyn Garcia', '30', 'Governor'),
(17, 'Junjun Davide', '28', 'Vice Governor'),
(18, 'Maria F. Ortiz', '26', 'Board Member'),
(19, 'Francis Zamora', '30', 'Mayor'),
(20, 'Honey Lacuna', '28', 'Vice Mayor'),
(21, 'John Velasco', '24', 'City Councilor'),
(22, 'Pedro Dela Cruz', '22', 'Barangay Captain'),
(23, 'Maria Santos', '18', 'Barangay Councilor'),
(24, 'Rodolfo Azurin', '30', 'Chief of Police'),
(25, 'Rogelio Dela Peña', '29', 'Regional Director'),
(26, 'Liza Bautista', '24', 'Municipal Treasurer'),
(27, 'Carlos Hernandez', '24', 'Municipal Assessor'),
(28, 'Gloria Reyes', '26', 'Provincial Engineer'),
(29, 'Jose Villanueva', '27', 'Provincial Health Officer'),
(30, 'Nina Magpale', '22', 'Election Officer'),
(31, 'Rafael Torres', '28', 'Public Attorney'),
(32, 'Luz Mercado', '28', 'Prosecutor'),
(33, 'Arlene Serrano', '24', 'Public School District Su'),
(34, 'Roberto Tan', '32', 'Chairperson'),
(35, 'Emmanuel Ledesma', '31', 'President/CEO'),
(36, 'Cynthia Villar', '30', 'Board Member'),
(37, 'Anita Lopez', '18', 'Administrative Officer'),
(38, 'Ricardo Santos', '20', 'Budget Officer'),
(39, 'Estrella David', '19', 'Human Resource Officer'),
(40, 'Camille Mendoza', '20', 'Information Officer'),
(41, 'Antonio Dela Cruz', '22', 'Accountant'),
(42, 'Marissa Go', '22', 'Auditor'),
(43, 'Daniel Tiu', '21', 'Planning Officer'),
(44, 'Ramon Flores', '23', 'Legal Officer'),
(45, 'Gloria Macapagal-Arroyo', '33', 'President'),
(46, 'Jejomar Binay', '32', 'Vice President'),
(47, 'Risa Hontiveros', '32', 'Senator'),
(48, 'Pantaleon Alvarez', '30', 'Congressman'),
(49, 'Ramon Lopez', '31', 'Cabinet Secretary'),
(50, 'Ricardo Morales', '29', 'Undersecretary'),
(51, 'Ana Santiago', '28', 'Assistant Secretary'),
(52, 'Raul Villanueva', '28', 'Commissioner'),
(53, 'Dante Peralta', '27', 'Director General'),
(54, 'Lourdes Cruz', '27', 'Ambassador'),
(55, 'Florin Hilbay', '30', 'Solicitor General'),
(56, 'Lucas Bersamin', '32', 'Chief Justice'),
(57, 'Marvic Leonen', '31', 'Associate Justice'),
(58, 'Conchita Carpio Morales', '32', 'Ombudsman'),
(59, 'Arthur Carandang', '30', 'Deputy Ombudsman'),
(60, 'Ramil Hernandez', '30', 'Governor'),
(61, 'Agnes Magpale', '28', 'Vice Governor'),
(62, 'Teodoro Soriano', '26', 'Board Member'),
(63, 'Isko Moreno', '30', 'Mayor'),
(64, 'Edgardo Labella', '28', 'Vice Mayor'),
(65, 'Arvin Lopez', '24', 'City Councilor'),
(66, 'Mario Rios', '22', 'Barangay Captain'),
(67, 'Jenna Perez', '18', 'Barangay Councilor'),
(68, 'Guillermo Eleazar', '30', 'Chief of Police'),
(69, 'Victoria Manalo', '29', 'Regional Director'),
(70, 'Francisco Peña', '24', 'Municipal Treasurer'),
(71, 'Gina Mateo', '24', 'Municipal Assessor'),
(72, 'Erwin Gomez', '26', 'Provincial Engineer'),
(73, 'Lourdes Santos', '27', 'Provincial Health Officer'),
(74, 'Dario Morales', '22', 'Election Officer'),
(75, 'Carmela Cruz', '28', 'Public Attorney'),
(76, 'Edwin Marquez', '28', 'Prosecutor'),
(77, 'Rebecca Paloma', '24', 'Public School District Su'),
(78, 'Alfredo Tan', '32', 'Chairperson'),
(79, 'Christina Torres', '31', 'President/CEO'),
(80, 'Henry Sy Jr.', '30', 'Board Member'),
(81, 'Rita Angeles', '18', 'Administrative Officer'),
(82, 'Ferdinand Reyes', '20', 'Budget Officer'),
(83, 'Criselda Mendoza', '19', 'Human Resource Officer'),
(84, 'Louie Balmes', '20', 'Information Officer'),
(85, 'Angelito Garcia', '22', 'Accountant'),
(86, 'Mark dela Paz', '22', 'Auditor'),
(87, 'Josefina Navarro', '21', 'Planning Officer'),
(88, 'Elena Ramos', '23', 'Legal Officer'),
(89, 'Corazon Aquino', '33', 'President'),
(90, 'Diosdado Macapagal', '32', 'Vice President'),
(91, 'Francis Pangilinan', '32', 'Senator'),
(92, 'Feliciano Belmonte', '30', 'Congressman'),
(93, 'Cesar Purisima', '31', 'Cabinet Secretary'),
(94, 'Manuel Roxas II', '29', 'Undersecretary'),
(95, 'Rafael Alunan', '28', 'Assistant Secretary'),
(96, 'Ricardo Saludo', '28', 'Commissioner'),
(97, 'Leila de Lima', '27', 'Director General'),
(98, 'Teresita Leonardo-De Cast', '27', 'Ambassador'),
(99, 'Jose Calida', '30', 'Solicitor General'),
(100, 'Diosdado Peralta', '32', 'Chief Justice'),
(101, 'Estela Perlas-Bernabe', '31', 'Associate Justice'),
(102, 'Aniano Desierto', '32', 'Ombudsman'),
(103, 'Edilberto Sandoval', '30', 'Deputy Ombudsman'),
(104, 'Wilhelmino Alvarado', '30', 'Governor'),
(105, 'Oscar Moreno', '28', 'Vice Governor'),
(106, 'Victor Yap', '26', 'Board Member'),
(107, 'Herbert Bautista', '30', 'Mayor'),
(108, 'Joy Belmonte', '28', 'Vice Mayor'),
(109, 'Dennis Lacuna', '24', 'City Councilor'),
(110, 'Victorino Cruz', '22', 'Barangay Captain'),
(111, 'Julia Santiago', '18', 'Barangay Councilor'),
(112, 'Debold Sinas', '30', 'Chief of Police'),
(113, 'Alicia Mendoza', '29', 'Regional Director'),
(114, 'Melvin Dela Rosa', '24', 'Municipal Treasurer'),
(115, 'Rita Manalo', '24', 'Municipal Assessor'),
(116, 'Arnold Soriano', '26', 'Provincial Engineer'),
(117, 'Margarita Santos', '27', 'Provincial Health Officer'),
(118, 'Julius Salazar', '22', 'Election Officer'),
(119, 'Paula Reyes', '28', 'Public Attorney'),
(120, 'Jorge Alvarez', '28', 'Prosecutor'),
(121, 'Cecilia Lopez', '24', 'Public School District Su'),
(122, 'Rogelio Domingo', '32', 'Chairperson'),
(123, 'Andrea Domingo', '31', 'President/CEO'),
(124, 'Emilio Tan', '30', 'Board Member'),
(125, 'Lorna Dela Cruz', '18', 'Administrative Officer'),
(126, 'Michael Francisco', '20', 'Budget Officer'),
(127, 'Carlos Lopez', '19', 'Human Resource Officer'),
(128, 'Katrina Velasco', '20', 'Information Officer'),
(129, 'Armando Bautista', '22', 'Accountant'),
(130, 'Helen Sison', '22', 'Auditor'),
(131, 'Diana Rivera', '21', 'Planning Officer'),
(132, 'Isabel Gomez', '23', 'Legal Officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`official_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `official_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
