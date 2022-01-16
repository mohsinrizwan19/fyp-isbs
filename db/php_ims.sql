-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 11:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`id`, `user_name`, `date`, `type`, `time`) VALUES
(15, 'admin1 admin', '2022-01-18', 'Check In', '11:00');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int(5) NOT NULL,
  `bill_id` varchar(50) NOT NULL,
  `product_company` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_unit` varchar(20) NOT NULL,
  `packing_size` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`id`, `bill_id`, `product_company`, `product_name`, `product_unit`, `packing_size`, `price`, `qty`) VALUES
(2, '1', 'amul', 'milk', 'ml', '500', '8', '4'),
(3, '2', 'balaji', 'tomato waffer', 'grams', '100', '10', '5'),
(4, '2', 'amul', 'milk', 'ml', '500', '8', '5'),
(5, '3', 'balaji', 'tomato waffer', 'grams', '100', '10', '2'),
(6, '4', 'balaji', 'tomato waffer', 'grams', '100', '10', '2'),
(8, '6', 'amul', 'milk', 'ml', '500', '8', '5'),
(9, '8', 'balaji', 'tomato waffer', 'grams', '100', '10', '5'),
(10, '12', 'Millat Tractors', 'Valve Spring', 'kg', '30', '1540', '3'),
(11, '13', 'Millat Tractors', 'Camshaft', 'kg', '30', '900', '12'),
(13, '15', 'ALI Corporation', 'Bolt Nuts', 'kg', '30', '20', '12'),
(14, '16', 'Millat Tractors', 'Valve Spring', 'kg', '30', '1540', '1'),
(15, '17', 'Millat Tractors', 'Valve Spring', 'kg', '30', '1540', '12');

-- --------------------------------------------------------

--
-- Table structure for table `billing_header`
--

CREATE TABLE `billing_header` (
  `id` int(5) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `bill_type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `bill_no` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_header`
--

INSERT INTO `billing_header` (`id`, `full_name`, `bill_type`, `date`, `bill_no`, `username`) VALUES
(1, 'amit andipara', 'Cash', '2020-07-16', '00001', 'admin'),
(2, 'amit', 'Cash', '2020-07-17', '00002', 'admin'),
(3, 'amit', 'Cash', '2020-09-02', '00003', 'admin'),
(4, 'test', 'Cash', '2020-09-02', '00004', 'admin'),
(5, 'amit', 'Cash', '2020-09-02', '00005', 'admin'),
(6, 'amit', 'Cash', '2020-09-02', '00006', 'admin'),
(7, 'sunny', 'Cash', '2020-09-04', '00007', 'admin'),
(8, 'amit', 'Cash', '2020-12-05', '00008', 'admin'),
(9, 'pari', 'Cash', '2020-12-05', '00009', 'admin'),
(10, 'Ali Arssalan', 'Cash', '2021-11-29', '00010', 'admin'),
(11, 'Ali Arssalan', 'Cash', '2021-11-29', '00011', 'admin'),
(12, 'Shaikh Atif', 'Cash', '2021-12-06', '00012', 'admin'),
(13, 'Hussain Amjad', 'Cash', '2021-12-06', '00013', 'admin'),
(14, 'Faryad Rizvi', 'Cash', '2021-12-06', '00014', 'admin'),
(15, 'Ali Hassan', 'Cash', '2021-12-06', '00015', 'admin'),
(16, 'Shaikh Atif', 'Cash', '2021-12-07', '00016', 'Ali_1'),
(17, 'Maksha Riaz', 'Debit', '2022-01-02', '00017', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company_name`
--

CREATE TABLE `company_name` (
  `id` int(5) NOT NULL,
  `company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_name`
--

INSERT INTO `company_name` (`id`, `company_name`) VALUES
(1, 'balaji'),
(3, 'gopol'),
(4, 'ALI Corporation'),
(5, 'Millat Tractors'),
(6, 'Al Ghazi Tractors'),
(7, 'FIAT'),
(8, 'New Holland'),
(9, 'Massey Ferguson'),
(10, 'Pak Hero Tractors');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `name`, `description`, `date`, `status`) VALUES
(1, 'Testing123', 'Testing123', '2022-01-07', 'Completed'),
(4, 'Maksha Riaz', 'Testing2', '2022-01-13', 'Pending'),
(5, 'Testing', 'Testing', '2022-01-14', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `name`, `description`, `date`, `status`) VALUES
(1, 'Testing', 'Testing', '2022-01-07', 'Pending'),
(4, 'Admin123', 'Testing123', '2022-01-13', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_role`
--

CREATE TABLE `model_has_role` (
  `id` int(255) NOT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `model_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `party_info`
--

CREATE TABLE `party_info` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `businessname` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party_info`
--

INSERT INTO `party_info` (`id`, `firstname`, `lastname`, `businessname`, `contact`, `address`, `city`) VALUES
(2, 'Ahsan', 'Kamran', 'BB Corporation', '+923334455677', 'Canal View Housing Society, Block C, Lahore', 'Lahore'),
(3, 'Rashid', 'Jamal', 'Jamal Dealers and Associates', '+923118988977', '1003 C, Sundar Industrial Estate, Lahore', 'Lahore'),
(4, 'Nafees', 'Ahsan', 'SRK Agriparts', '+923457896546', '98-C, Multan Road, Near Thokar Niaz Beig, Lahore', 'Lahore'),
(5, 'Raza', 'Jaffer', 'Jaffar Sons', '+923337788644', '67-B, Multan Road, Near Thokar Niaz Beig, Lahore', 'Lahore'),
(6, 'Aamir', 'Sheikh', 'Aamir Auto & AgriParts', '+923219087675', '56-D, Quaid-e-Azam Business Park, Sheikhopura Road, Sheikhpura', 'Sheikhpura'),
(7, 'Naeem', 'Barkat', 'Barkat Sons', '+923458900766', '106-G, Rachna Industrial Estate, Sheikhpura', 'Sheikhpura'),
(8, 'Yousaf', 'Mehdi', 'CT Autoparts', '+923226765657', 'Quaid-e-Azam Industrial Complex, Raiwind Road, Lahore', 'Lahore'),
(9, 'Azmat', 'Khan', 'Khan Lucky Dealers', '+923377665444', '1008-D, Multan Road, Lahore', 'Lahore'),
(10, 'Ali', 'Jameel', 'Jameel Traders', '+923457876564', 'Thokar Niaz Beig, Lahore', 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `name`) VALUES
(2, 'create-user'),
(3, 'edit-user'),
(4, 'list-user'),
(5, 'delete-user'),
(6, 'create-role'),
(7, 'edit-role'),
(8, 'list-role'),
(9, 'delete-role'),
(10, 'create-productUnit'),
(11, 'edit-productUnit'),
(12, 'list-productUnit'),
(13, 'delete-productUnit'),
(24, 'create-company'),
(25, 'edit-company'),
(26, 'list-company'),
(27, 'delete-company'),
(28, 'create-product'),
(29, 'edit-product'),
(30, 'list-product'),
(31, 'delete-product'),
(32, 'create-purchaseParty'),
(33, 'edit-purchaseParty'),
(34, 'list-purchaseParty'),
(35, 'delete-purchaseParty'),
(48, 'create-purchaseMaster'),
(49, 'edit-purchaseMaster'),
(50, 'list-purchaseMaster'),
(51, 'delete-purchaseMaster'),
(52, 'create-saleMaster'),
(53, 'edit-saleMaster'),
(54, 'delete-saleMaster'),
(55, 'list-saleMaster'),
(56, 'create-transaction'),
(57, 'edit-transaction'),
(58, 'list-transaction'),
(59, 'delete-transaction'),
(72, 'create-report'),
(73, 'edit-report'),
(74, 'list-report'),
(75, 'delete-report');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `packing_size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `company_name`, `product_name`, `unit`, `packing_size`) VALUES
(1, 'balaji', 'Harvestor', 'grams', '102'),
(3, 'ALI Corporation', 'Bolt Nuts', 'kg', '30'),
(4, 'ALI Corporation', 'Bolt Nuts 2', 'kg', '30'),
(5, 'balaji', 'Boilers', 'kg', '2x3'),
(6, 'balaji', 'Cylinder Heads', 'kg', '30'),
(7, 'balaji', 'Pistons', 'kg', '34'),
(8, 'balaji', 'Liners', 'kg', '30'),
(9, 'Millat Tractors', 'Valve Spring', 'kg', '30'),
(10, 'Millat Tractors', 'Camshaft', 'kg', '30'),
(11, 'Al Ghazi Tractors', 'Connecting Rods', 'kg', '45'),
(12, 'Pak Hero Tractors', 'Pistonss', 'kg', '30');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_master`
--

CREATE TABLE `purchase_master` (
  `id` int(5) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `packing_size` varchar(20) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `party_name` varchar(100) NOT NULL,
  `purchase_type` varchar(100) NOT NULL,
  `expiry_date` date NOT NULL,
  `purchase_date` date NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_master`
--

INSERT INTO `purchase_master` (`id`, `company_name`, `product_name`, `unit`, `packing_size`, `quantity`, `price`, `party_name`, `purchase_type`, `expiry_date`, `purchase_date`, `username`) VALUES
(2, 'amul', 'milk', 'ml', '500', '5', 115, 'noble infotech', 'Cash', '2020-07-01', '2020-12-01', 'admin'),
(3, 'amul', 'milk', 'ml', '500', '10', 500, 'noble infotech', 'Cash', '2020-07-02', '2020-12-01', 'admin'),
(4, 'balaji', 'tomato waffer', 'grams', '100', '25', 1500, 'noble infotech', 'Cash', '2020-07-20', '2020-12-01', 'admin'),
(5, 'balaji', 'tomato waffer', 'grams', '100', '5', 105, 'noble infotech', 'Cash', '2020-12-12', '2020-12-05', 'admin'),
(6, 'balaji', 'tomato waffer', 'grams', '100', '5', 1010, 'noble infotech', 'Cash', '2020-12-16', '2020-12-05', 'admin'),
(7, 'ALI Corporation', 'Bolt Nuts', 'kg', '30', '120', 100, 'BB Corporation', 'Cash', '2021-12-31', '2021-11-29', 'admin'),
(8, 'ALI Corporation', 'Bolt Nuts 2', 'kg', '30', '50', 90, 'BB Corporation', 'Cash', '2021-12-31', '2021-11-29', 'admin'),
(9, 'Millat Tractors', 'Valve Spring', 'kg', '30', '20', 1500, 'Aamir Auto & AgriParts', 'Cash', '2021-12-26', '2021-12-06', 'admin'),
(10, 'Millat Tractors', 'Camshaft', 'kg', '30', '170', 950, 'CT Autoparts', 'Cash', '2021-12-31', '2021-12-06', 'admin'),
(11, 'Al Ghazi Tractors', 'Connecting Rods', 'kg', 'Select', '56', 850, 'Khan Lucky Dealers', 'Cash', '2021-12-31', '2021-12-06', 'admin'),
(12, 'Al Ghazi Tractors', 'Connecting Rods', 'kg', '45', '34', 70, 'Aamir Auto & AgriParts', 'Cash', '2021-12-31', '2021-12-06', 'admin'),
(13, 'balaji', 'Cylinder Heads', 'kg', '30', '12', 90, 'Aamir Auto & AgriParts', 'Cash', '0000-00-00', '2021-12-06', 'admin'),
(14, 'ALI Corporation', 'Bolt Nuts', 'kg', '30', '2', 143, 'Jaffar Sons', 'Debit', '2021-12-30', '2021-12-20', 'Ali_1'),
(15, 'ALI Corporation', 'Bolt Nuts', 'kg', '30', '10', 34567, 'Jaffar Sons', 'Cash', '2022-01-13', '2021-12-27', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `return_products`
--

CREATE TABLE `return_products` (
  `id` int(5) NOT NULL,
  `return_by` varchar(100) NOT NULL,
  `bill_no` varchar(10) NOT NULL,
  `return_date` varchar(15) NOT NULL,
  `product_company` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_unit` varchar(20) NOT NULL,
  `packing_size` varchar(20) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_qty` int(10) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_products`
--

INSERT INTO `return_products` (`id`, `return_by`, `bill_no`, `return_date`, `product_company`, `product_name`, `product_unit`, `packing_size`, `product_price`, `product_qty`, `total`) VALUES
(3, 'admin', '00001', '2020-11-23', 'balaji', 'tomato waffer', 'grams', '100', '10', 5, '50'),
(4, 'admin', '00005', '2020-11-23', 'balaji', 'tomato waffer', 'grams', '100', '10', 5, '50'),
(5, 'admin', '00009', '2020-12-05', 'balaji', 'tomato waffer', 'grams', '100', '10', 6, '60'),
(6, 'admin', '00010', '2021-11-29', 'ALI Corporation', 'Bolt Nuts', 'kg', '30', '20', 12, '240'),
(7, 'admin', '00011', '2021-11-30', 'ALI Corporation', 'Bolt Nuts 2', 'kg', '30', '95', 12, '1140'),
(8, 'Ali_1', '00014', '2021-12-20', 'ALI Corporation', 'Bolt Nuts 2', 'kg', '30', '95', 3, '285');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(25, 'Testing'),
(26, 'Admin'),
(27, 'Testing2');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permission`
--

CREATE TABLE `role_has_permission` (
  `id` int(255) NOT NULL,
  `permission_id` varchar(255) DEFAULT NULL,
  `role_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_has_permission`
--

INSERT INTO `role_has_permission` (`id`, `permission_id`, `role_id`) VALUES
(9, '2', '23'),
(10, '3', '23'),
(11, '4', '23'),
(12, '5', '23'),
(13, '6', '23'),
(14, '7', '23'),
(15, '8', '23'),
(16, '9', '23'),
(17, '10', '23'),
(18, '11', '23'),
(19, '12', '23'),
(20, '13', '23'),
(21, '24', '23'),
(22, '25', '23'),
(23, '26', '23'),
(24, '27', '23'),
(25, '28', '23'),
(26, '29', '23'),
(27, '30', '23'),
(28, '31', '23'),
(29, '32', '23'),
(30, '33', '23'),
(31, '34', '23'),
(32, '35', '23'),
(33, '48', '23'),
(34, '49', '23'),
(35, '50', '23'),
(36, '51', '23'),
(37, '52', '23'),
(38, '53', '23'),
(39, '54', '23'),
(40, '55', '23'),
(41, '56', '23'),
(42, '57', '23'),
(43, '58', '23'),
(44, '59', '23'),
(45, '72', '23'),
(46, '73', '23'),
(47, '74', '23'),
(48, '75', '23'),
(49, '2', '24'),
(50, '3', '24'),
(51, '4', '24'),
(52, '2', '25'),
(53, '3', '25'),
(54, '4', '25'),
(55, '2', '26'),
(56, '3', '26'),
(57, '5', '26'),
(58, '6', '26'),
(59, '2', '27'),
(60, '3', '27'),
(61, '4', '27');

-- --------------------------------------------------------

--
-- Table structure for table `stock_master`
--

CREATE TABLE `stock_master` (
  `id` int(5) NOT NULL,
  `product_company` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_unit` varchar(50) NOT NULL,
  `packing_size` varchar(100) NOT NULL,
  `product_qty` int(10) NOT NULL,
  `product_selling_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_master`
--

INSERT INTO `stock_master` (`id`, `product_company`, `product_name`, `product_unit`, `packing_size`, `product_qty`, `product_selling_price`) VALUES
(1, 'Balaji', 'Cylinder Heads', 'kg', '500', 1, 8),
(2, 'balaji', 'Boilers', 'grams', '100', 38, 10),
(3, 'ALI Corporation', 'Bolt Nuts', 'kg', '30', 120, 20),
(4, 'ALI Corporation', 'Bolt Nuts 2', 'kg', '30', 182, 95),
(5, 'Millat Tractors', 'Valve Spring', 'kg', '30', 4, 1540),
(6, 'Millat Tractors', 'Camshaft', 'kg', '30', 58, 900),
(7, 'Al Ghazi Tractors', 'Connecting Rods', 'kg', '30', 90, 750),
(8, 'balaji', 'Cylinder Heads', 'kg', '30', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `expense` int(255) DEFAULT 0,
  `income` int(255) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `type`, `account`, `category`, `amount`, `payment`, `reference`, `description`, `expense`, `income`) VALUES
(4, 'Account Payable (A/P)', 'Pety Cash', 'Loss', '456789', 'Cash', '2342355984360', 'description', NULL, NULL),
(6, 'Account Payable (A/P)', 'Pety Cash', 'Profit', '45536', 'Check', '7567856545634231', 'Account Payable (A/P)', NULL, NULL),
(8, 'Account Payable (A/P)', 'Pety Cash', 'Profit', '346534', 'Cash', '4365463457645', 'qwerty', 1, 0),
(9, 'Account Receivable (A/R)', 'Pety Cash', 'Loss', '4564', 'Cash', '23452457638356', 'qwerty', 1, 0),
(11, 'Expense', 'Pety Cash', 'Loss', '45476', 'Cash', '34534253459', 'qwerty', 0, 4),
(12, '', 'Pety Cash', 'Profit', '23456', 'Check', '987654323456789', 'Testing', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(5) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit`) VALUES
(3, 'kg'),
(4, 'grams'),
(5, 'ml');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `role`, `status`) VALUES
(3, 'admin1', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '26', 'active'),
(4, 'Mohsin', 'Rizwan', 'mohsin', 'mohsin', '25', 'active'),
(6, 'Ali', 'Arsalan', 'Ali', 'Ali', '25', 'active'),
(7, 'Ali', 'Arsalan', 'Ali_1', 'ali', '27', 'active'),
(13, 'testing', 'user', 'testinguser', '1a1dc91c907325c69271ddf0c944bc72', '25', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_header`
--
ALTER TABLE `billing_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_name`
--
ALTER TABLE `company_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_role`
--
ALTER TABLE `model_has_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party_info`
--
ALTER TABLE `party_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_master`
--
ALTER TABLE `purchase_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_products`
--
ALTER TABLE `return_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permission`
--
ALTER TABLE `role_has_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_master`
--
ALTER TABLE `stock_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attandance`
--
ALTER TABLE `attandance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `billing_header`
--
ALTER TABLE `billing_header`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company_name`
--
ALTER TABLE `company_name`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `model_has_role`
--
ALTER TABLE `model_has_role`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `party_info`
--
ALTER TABLE `party_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase_master`
--
ALTER TABLE `purchase_master`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `return_products`
--
ALTER TABLE `return_products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `role_has_permission`
--
ALTER TABLE `role_has_permission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `stock_master`
--
ALTER TABLE `stock_master`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
