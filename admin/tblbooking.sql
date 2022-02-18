-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 10:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redicab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `EmailId` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `dob` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `Country` varchar(250) NOT NULL,
  `Time` varchar(250) NOT NULL,
  `RegDate` date NOT NULL,
  `DriverName` varchar(250) NOT NULL,
  `DriverMobile` int(11) NOT NULL,
  `Driver_DL_No` varchar(250) NOT NULL,
  `driver_location` varchar(250) NOT NULL,
  `driver_adhar` varchar(250) NOT NULL,
  `driver_pan` varchar(250) NOT NULL,
  `driver_licence` varchar(250) NOT NULL,
  `PricePerDay` int(11) NOT NULL,
  `SeatingCapacity` int(11) NOT NULL,
  `ModelYear` int(11) NOT NULL,
  `FromDate` varchar(250) NOT NULL,
  `ToDate` varchar(250) NOT NULL,
  `TotalNoDays` int(11) NOT NULL,
  `Categories` varchar(250) NOT NULL,
  `SubCategories` varchar(250) NOT NULL,
  `OwnerName` varchar(250) NOT NULL,
  `owner_mobile` int(11) NOT NULL,
  `owner_email` varchar(250) NOT NULL,
  `owner_vehicle_no` varchar(250) NOT NULL,
  `owner_vehicle_RCno` varchar(250) NOT NULL,
  `owner_vehicle_chesis_no` varchar(250) NOT NULL,
  `owner_vehicle_brand` varchar(250) NOT NULL,
  `owner_vehicle_name` varchar(250) NOT NULL,
  `owner_vehicle_color` varchar(250) NOT NULL,
  `Owner_Aadhar_No` varchar(250) NOT NULL,
  `BookingNumber` varchar(250) NOT NULL,
  `Vehicledesc` varchar(250) NOT NULL,
  `frontimage` varchar(250) NOT NULL,
  `backimage` varchar(250) NOT NULL,
  `DLimage` varchar(250) NOT NULL,
  `Driver_Adhar_image` varchar(250) NOT NULL,
  `own_adhar_image` varchar(250) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0 COMMENT '0=new,1=confirm,2=cancel',
  `CreatedDate` varchar(250) NOT NULL,
  `UpdatedDate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `UserName`, `EmailId`, `Password`, `ContactNo`, `dob`, `address`, `City`, `Country`, `Time`, `RegDate`, `DriverName`, `DriverMobile`, `Driver_DL_No`, `driver_location`, `driver_adhar`, `driver_pan`, `driver_licence`, `PricePerDay`, `SeatingCapacity`, `ModelYear`, `FromDate`, `ToDate`, `TotalNoDays`, `Categories`, `SubCategories`, `OwnerName`, `owner_mobile`, `owner_email`, `owner_vehicle_no`, `owner_vehicle_RCno`, `owner_vehicle_chesis_no`, `owner_vehicle_brand`, `owner_vehicle_name`, `owner_vehicle_color`, `Owner_Aadhar_No`, `BookingNumber`, `Vehicledesc`, `frontimage`, `backimage`, `DLimage`, `Driver_Adhar_image`, `own_adhar_image`, `Status`, `CreatedDate`, `UpdatedDate`) VALUES
(1, '', '', '', 0, 0, '', '', '', '', '0000-00-00', 'ff', 56, '67', '', '', '', '', 67, 6, 67, '', '', 0, '', '', 'Hari', 67, 'pragyan.biswal1@gmail.com', '12', '23', '34', 'maruti', 'rt', '', '', '', '', '', '', 'pngwing.com (1).png', 'pngwing.com.png', '', 0, '', ''),
(2, '', '', '', 0, 0, '', '', '', '', '0000-00-00', 'ff', 56, '67', '', '', '', '', 67, 6, 67, '', '', 0, '', '', 'Hari', 67, 'pragyan.biswal1@gmail.com', '12', '23', '34', 'maruti', 'rt', '', '', '', '', '', '', 'pngwing.com (1).png', 'pngwing.com.png', '', 0, '', ''),
(6, '', '', '', 0, 0, '', '', '', '', '0000-00-00', 'ff', 56, '67', '', '', '', '', 67, 6, 67, '', '', 0, '', '', 'Hari', 67, 'pragyan.biswal1@gmail.com', '12', '23', '34', 'maruti', 'rt', '', '', '', '', 'car-insurance.png', 'kashipara.png', 'kashipara.png', 'image1.png', '', 0, '', ''),
(7, '', '', '', 0, 0, '', '', '', '', '0000-00-00', 'dn', 3456, '1234', '', '', '', '', 67, 6, 67, '', '', 0, '', '', 'smruti', 6778, 'pragyan.biswal1@gmail.com', '11', '22', '33', 'Fiat', 'vv', '', '7890', '', '', 'pexels-sourav-mishra-1149831.jpg', 'pexels-andrea-piacquadio-3760814.jpg', 'image1.png', 'pexels-omar-ramadan-9516301.jpg', 'kashipara.png', 2, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
