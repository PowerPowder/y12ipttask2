SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Table structure for table `brakes`
--

CREATE TABLE IF NOT EXISTS `brakes` (
  `productid` int(10) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=700011 ;

--
-- Dumping data for table `brakes`
--

INSERT INTO `brakes` (`productid`, `productname`, `supplierid`, `cost`, `price`, `instock`) VALUES
(700001, 'Front Brake Wave Rotor Disc D002 GSX-R 1000 ', '000124', '40.00', '150.00', 'yes'),
(700002, 'Suzuki GSXR 1000 Galfer Front Wave Rotor ', '000124', '100.00', '320.00', 'yes'),
(700003, 'Brembo - HPK Disc Kit (front) - Suzuki GSXR1000', '000123', '130.00', '450.00', 'yes'),
(700004, 'Brembo - Clubman Racing Discs - Suzuki GSXR1000', '000123', '40.00', '180.00', 'yes'),
(700005, 'Brembo - Racing Brake Discs - Suzuki GSXR1000', '000123', '120.00', '380.00', 'yes'),
(700006, 'EBC - X Series Brake Discs - Suzuki GSXR1000', '001238', '40.00', '140.00', 'yes'),
(700007, 'EBC - XC Series Contour Discs - Suzuki GSXR1000', '001238', '45.00', '160.00', 'yes'),
(700008, 'EBC - Prolite Brake Disc (rear) Suzuki GSXR1000', '001238', '15.00', '90.00', 'yes'),
(700009, 'Suzuki GSX R1000 GX racing disc brakes (front)', '001235', '200.00', '800.00', 'yes'),
(700010, 'Suzuki GSX R1000 GX racing disc brakes (back)', '001235', '200.00', '800.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `chains`
--

CREATE TABLE IF NOT EXISTS `chains` (
  `productid` int(10) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=700021 ;

--
-- Dumping data for table `chains`
--

INSERT INTO `chains` (`productid`, `productname`, `supplierid`, `cost`, `price`, `instock`) VALUES
(700011, 'DID VA - O-Ring Steel Chain Suzuki GSXR1000', '000059', '10.00', '70.00', 'yes'),
(700012, 'DID VM - X-Ring Gold Chain Suzuki GSXR1000 ', '000059', '20.00', '90.00', 'yes'),
(700013, 'DID ZVM - X-Ring Gold Chain Suzuki GSXR1000 ', '000059', '40.00', '130.00', 'yes'),
(700014, 'Tsubaki Sigma O-Ring Steel Chain Suzuki GSXR1000 ', '000489', '25.00', '85.00', 'yes'),
(700015, 'Tsubaki Sigma X-Ring Gold Chain Suzuki GSXR1000 ', '000489', '25.00', '95.00', 'yes'),
(700016, 'Tsubaki Racing Pro X-Ring Gold Chain (520PRO-120) ', '000489', '30.00', '120.00', 'yes'),
(700017, 'AFAM - XHR / XHRC Racing X-Ring Chain ', '000000', '15.00', '105.00', 'yes'),
(700018, 'DID - ERV3 Road Race Gold X-Ring Chain', '00000', '30.00', '120.00', 'yes'),
(700019, 'Renthal RR4 Road Race Gold SRS Chain (520RR4-120) ', '000000', '15.00', '105.00', 'yes'),
(700020, 'DID VM X-Ring Premium Gold   ', '000000', '30.00', '120.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(11) NOT NULL auto_increment,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `suburb` text NOT NULL,
  `postcode` text NOT NULL,
  `address` text NOT NULL,
  `phonenumber` text NOT NULL,
  `productid` int(11) NOT NULL,
  PRIMARY KEY  (`customerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customers`
--


-- --------------------------------------------------------

--
-- Table structure for table `exhaust`
--

CREATE TABLE IF NOT EXISTS `exhaust` (
  `productid` int(11) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=700031 ;

--
-- Dumping data for table `exhaust`
--

INSERT INTO `exhaust` (`productid`, `productname`, `supplierid`, `cost`, `price`, `instock`) VALUES
(700021, 'Oval Silencer - Suzuki GSXR1000 ', 'arrow', '50.00', '250.00', 'yes'),
(700022, 'Arrow - Oval Silencer - Suzuki GSXR1000 High level', 'arrow', '75.00', '320.00', 'yes'),
(700023, 'Full System - Suzuki GSXR1000 ', 'arrow', '125.00', '670.00', 'yes'),
(700024, 'Full System - Suzuki GSXR1000 ', 'arrow', '175.00', '670.00', 'yes'),
(700025, 'Full Race Exhaust with Carbon Can GSXR1000 ', 'arrow', '230.00', '740.00', 'yes'),
(700026, 'Full Race Exhaust with Titanium Can GSXR1000 ', 'arrow', '275.00', '700.00', 'yes'),
(700027, 'Exhaust 600 01-03 Duplex Carbon Fiber High Exit Full System Exhaust', 'Yoshimura', '350.00', '980.00', 'yes'),
(700028, 'DISCO  TRS Tri-Oval Suzuki GSX-R1000 Race Carbon Fiber High Exit Full System Exhaust', 'yoshimura', '500.00', '1000.00', 'yes'),
(700029, 'R-22 GSX-R1000 Hayabusa 08 Bling Show Chrome 4:1 Full System Exhaust', 'yoshimura', '420.00', '980.00', 'yes'),
(700030, 'FMF POWER CORE S SLIP ON', 'Suzuki', '260.00', '570.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `footpegs`
--

CREATE TABLE IF NOT EXISTS `footpegs` (
  `productid` int(11) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=700041 ;

--
-- Dumping data for table `footpegs`
--

INSERT INTO `footpegs` (`productid`, `productname`, `supplierid`, `cost`, `price`, `instock`) VALUES
(700031, 'Custom Bladed Rear Footpeg Set GSXR Anodized Black  \r\n', '000000', '20.00', '115.00', 'yes'),
(700032, 'Custom Chrome Plated Bladed Front Footpeg Set GSXR/Hayabusa ', '000000', '40.00', '170.00', 'yes'),
(700033, 'Custom Bladed Chrome Rear Footpeg Set GSXR/Hayabusa ', '000000', '150.00', '30.00', 'yes'),
(700034, 'Suzuki GSXR 600 750 / TLR 1000S Black Rear Foot Pegs', '000000', '2.00', '15.00', 'yes'),
(700035, 'Suzuki GSXR 600 750 1000 / TLR 1000S Carbon Rear Foot Pegs\r\n', '000000', '2.00', '15.00', 'yes'),
(700036, 'Suzuki GSXR 600 750 / TLR 1000S Chrome Rear Foot Pegs\r\n', '000000', '2.00', '15.00', 'yes'),
(700037, 'Suzuki GSXR 600 750 1000 / TLR 1000S Chrome SPIKE Rear Foot Pegs\r\n', '000000', '4.00', '30.00', 'yes'),
(700038, 'Suzuki GSXR 600 750 Black Front Foot Pegs', '000000', '2.00', '15.00', 'yes'),
(700039, 'Suzuki GSXR 600 750 1000 Carbon Front Foot Pegs\r\n', '000000', '2.00', '15.00', 'yes'),
(700040, 'Suzuki GSXR 600 750 Chrome Front Foot Pegs\r\n', '000000', '2.00', '15.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sales` int(11) NOT NULL auto_increment,
  `productid` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY  (`sales`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sales`
--


-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE IF NOT EXISTS `screens` (
  `productid` int(11) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=700051 ;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`productid`, `productname`, `supplierid`, `cost`, `price`, `instock`) VALUES
(700041, 'Double Bubble Screen - Suzuki GSXR1000 clear', '000000', '10.00', '40.00', 'yes'),
(700042, 'Double Bubble Screen - Suzuki GSXR1000 blue', '000000', '10.00', '40.00', 'yes'),
(700043, 'Double Bubble Screen - Suzuki GSXR1000 green', '000000', '10.00', '40.00', 'yes'),
(700044, 'Double Bubble Screen - Suzuki GSXR1000 red', '000000', '10.00', '40.00', 'yes'),
(700045, 'Double Bubble Screen - Suzuki GSXR1000 purple', '000000', '10.00', '40.00', 'yes'),
(700046, 'Double Bubble Screen - Suzuki GSXR1000 pink', '000000', '10.00', '40.00', 'yes'),
(700047, 'Double Bubble Screen - Suzuki GSXR1000 orange', '000000', '10.00', '40.00', 'yes'),
(700048, 'Double Bubble Screen - Suzuki GSXR1000 aqua', '000000', '10.00', '40.00', 'yes'),
(700049, 'Double Bubble Screen - Suzuki GSXR1000 black', '000000', '10.00', '40.00', 'yes'),
(700050, 'Double Bubble Screen - Suzuki GSXR1000 pearl', '000000', '10.00', '40.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sprockets`
--

CREATE TABLE IF NOT EXISTS `sprockets` (
  `productid` int(11) NOT NULL,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sprockets`
--

INSERT INTO `sprockets` (`productid`, `productname`, `supplierid`, `cost`, `price`, `instock`) VALUES
(700051, 'Counter Sprocket Suzuki 520 STEEL ', '001235', '5.00', '35.00', 'yes'),
(700052, 'Counter Sprocket Suzuki 525 STEEL ', '001235', '5.00', '35.00', 'yes'),
(700053, 'Counter Sprocket Suzuki 530 STEEL  ', '001235', '5.00', '35.00', 'yes'),
(700054, 'Driven USA MX Front Sprocket Suzuki DRZ400 & DRZ400SM ', '001235', '5.00', '35.00', 'yes'),
(700055, 'Driven USA MX Rear Sprocket Suzuki DRZ400 & DRZ400SM  \r\n ', '001235', '35.00', '75.00', 'yes'),
(700056, 'Rear Sprocket 520 Suzuki - Anodized Aluminum Alloy', '001235', '75.00', '35.00', 'yes'),
(700057, 'Rear Sprocket 525 Suzuki - Anodized Aluminum Alloy', '001235', '35.00', '75.00', 'yes'),
(700058, 'Rear Sprocket 530 Suzuki - Anodized Aluminum Alloy', '001235', '35.00', '75.00', 'yes'),
(700059, 'Rear Sprocket 525 Suzuki - Anodized Aluminum Alloy - 50 spikes', '001235', '35.00', '125.00', 'yes'),
(700060, 'Rear Sprocket 530 Suzuki - Anodized Aluminum Alloy - 50 spikes', '001235', '50.00', '125.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplierid` int(11) NOT NULL auto_increment,
  `manufacturer` text NOT NULL,
  `suburb` text NOT NULL,
  `postcode` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `productid` int(11) NOT NULL,
  PRIMARY KEY  (`supplierid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `supplier`
--


-- --------------------------------------------------------

--
-- Table structure for table `suspension`
--

CREATE TABLE IF NOT EXISTS `suspension` (
  `productid` int(11) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=700064 ;

--
-- Dumping data for table `suspension`
--

INSERT INTO `suspension` (`productid`, `productname`, `supplierid`, `cost`, `price`, `instock`) VALUES
(700061, 'Suzuki Suspension - Closed Cartridge - Suzuki GSXR1000', '000000', '500.00', '1400.00', 'yes'),
(700062, 'Suzuki Suspension - Road/Track Shock Suzuki GSXR1000', '000000', '250.00', '700.00', 'yes'),
(700063, 'Suzuki Suspension - Competition Shock - Suzuki GSXR1000', '000000', '300.00', '900.00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tires`
--

CREATE TABLE IF NOT EXISTS `tires` (
  `productid` int(11) NOT NULL auto_increment,
  `productname` int(11) NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tires`
--


-- --------------------------------------------------------

--
-- Table structure for table `turbo`
--

CREATE TABLE IF NOT EXISTS `turbo` (
  `productid` int(11) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `turbo`
--


-- --------------------------------------------------------

--
-- Table structure for table `wheels`
--

CREATE TABLE IF NOT EXISTS `wheels` (
  `productid` int(11) NOT NULL auto_increment,
  `productname` text NOT NULL,
  `supplierid` text NOT NULL,
  `cost` text NOT NULL,
  `price` text NOT NULL,
  `instock` text NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wheels`
--
