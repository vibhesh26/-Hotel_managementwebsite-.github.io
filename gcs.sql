-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2018 at 10:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_mast`
--

CREATE TABLE IF NOT EXISTS `client_mast` (
  `clientid` int(5) NOT NULL,
  `party_name` varchar(25) NOT NULL,
  `address` varchar(35) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gstno` int(15) NOT NULL,
  `station` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_mast`
--

INSERT INTO `client_mast` (`clientid`, `party_name`, `address`, `city`, `state`, `gstno`, `station`) VALUES
(100, 'Compucom software ltd ', '5A , sitapura, rico , india gate ', 'jaipur ', 'rajasthan ', 214748364, 'jaipur '),
(101, 'Laxmi textiles  ltd', '12/A , sodala , jaipur ', 'jaipur ', 'rajasthan ', 875766478, 'jaipur'),
(102, 'Sumit Textiles ltd. ', '12/A , ramnagar , madhopur ', 'Madhopur ', 'Rajasthan ', 68754643, 'kota'),
(103, 'Ajmer textile ltd. ', '13/B , Ajmer road , ', 'Ajmer ', 'Rajasthan ', 653457, 'Ajmer ');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_det`
--

CREATE TABLE IF NOT EXISTS `invoice_det` (
  `invoice_num` int(15) NOT NULL,
  `sno` int(15) NOT NULL,
  `idate` date NOT NULL,
  `chno` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `station` varchar(15) NOT NULL,
  `obc_otc` varchar(15) NOT NULL,
  `wt` varchar(15) NOT NULL,
  `amt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_det`
--

INSERT INTO `invoice_det` (`invoice_num`, `sno`, `idate`, `chno`, `state`, `station`, `obc_otc`, `wt`, `amt`) VALUES
(500, 1, '2018-11-27', '564543345', 'rajasthan ', 'ajmer', '100', '1240', '13450'),
(500, 2, '2018-11-27', '654532778', 'rajasthan', 'bhilwara', '200', '140', '1255'),
(500, 3, '2018-11-28', '56546786', 'rajasthan', 'bundi', '57755', '657', '5434'),
(500, 4, '2018-12-06', '45333865', 'rajasthan', 'ajmer', '4333', '543', '3244'),
(55, 0, '0000-00-00', '', 'Assam', 'Ajmer', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_mast`
--

CREATE TABLE IF NOT EXISTS `invoice_mast` (
  `invoiceno` int(15) NOT NULL,
  `clientid` int(15) NOT NULL,
  `inv_date` date NOT NULL,
  `state` varchar(20) NOT NULL,
  `station_code` varchar(20) NOT NULL,
  `total` int(15) NOT NULL,
  `cgst` int(15) NOT NULL,
  `sgst` int(15) NOT NULL,
  `igst` int(15) NOT NULL,
  `roundoff` int(15) NOT NULL,
  `grandtotal` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_mast`
--

INSERT INTO `invoice_mast` (`invoiceno`, `clientid`, `inv_date`, `state`, `station_code`, `total`, `cgst`, `sgst`, `igst`, `roundoff`, `grandtotal`) VALUES
(500, 100, '2018-11-27', 'rajasthan', 'ajmer', 55000, 1344, 1254, 329, 0, 57927),
(501, 101, '2018-12-06', 'rajasthan', 'Ajmer', 1111, 222, 333, 444, 100, 2342);

-- --------------------------------------------------------

--
-- Table structure for table `state_mast`
--

CREATE TABLE IF NOT EXISTS `state_mast` (
  `st_code` int(2) NOT NULL,
  `st_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_mast`
--

INSERT INTO `state_mast` (`st_code`, `st_name`) VALUES
(1, 'ANDHRA PRADESH'),
(2, 'ASSAM'),
(3, 'BIHAR'),
(4, 'CHATTISHGARH'),
(5, 'DELHI'),
(6, 'GUJRAT'),
(7, 'JHARKHAND'),
(8, 'KARNATAKA'),
(9, 'MADHYA PRADESH '),
(10, 'MAHARASTRA'),
(11, 'MANIPUR'),
(12, 'MEGHALAYA'),
(13, 'NAGALAND '),
(14, 'ORISSA '),
(15, 'PUNJAB & HARAYANA '),
(16, 'RAJASTHAN '),
(17, 'TAMILNADU'),
(18, 'TRIPURA'),
(19, 'UTTAR PRADESH'),
(20, 'WEST BENGAL ');

-- --------------------------------------------------------

--
-- Table structure for table `station_mast`
--

CREATE TABLE IF NOT EXISTS `station_mast` (
  `state_code` int(2) NOT NULL,
  `station_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station_mast`
--

INSERT INTO `station_mast` (`state_code`, `station_name`) VALUES
(16, 'ABU ROAD '),
(16, 'AJMER'),
(16, 'BALOTRA'),
(16, 'BARMER'),
(16, 'BHARATPUR'),
(16, 'BHILWARA'),
(16, 'BIKANER'),
(16, 'BUNDI'),
(16, 'CHITTORGARH'),
(16, 'FALNA'),
(16, 'JAIPUR'),
(16, 'JASOR'),
(16, 'JODHPUR'),
(1, 'CHIRALA'),
(1, 'ELURU'),
(1, 'GUNTAKAL'),
(1, 'GUNTUR'),
(1, 'HANAMKONDA'),
(1, 'HYDERABAD '),
(2, 'B.CHARALI'),
(2, 'BARPETA ROAD '),
(2, 'BIHUPURIA'),
(2, 'BILASIPURA'),
(2, 'BONGAIGAON '),
(2, 'DERGAON '),
(3, 'ARARIA COURT '),
(3, 'ARRH '),
(3, 'ARWAL'),
(3, 'AURANGABAD '),
(4, 'AMBIKAPUR'),
(4, 'BALODA BAZAR '),
(4, 'BEMETRA'),
(4, 'BHATPARA '),
(5, 'DELHI '),
(6, 'AHMEDABAD '),
(6, 'ANKLESHWAR '),
(7, 'B.BEOGHAR'),
(7, 'BARHARWA'),
(7, 'BERMO '),
(7, 'BOKARO'),
(55, 'aa'),
(66, 'sss'),
(0, '');
