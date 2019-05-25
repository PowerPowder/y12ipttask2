SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `suppliers` (
   `id` varchar(2) NOT NULL,
   `name` varchar(30) NOT NULL,
   `address` varchar(75) NOT NULL,
   `postcode` int(4),   
   `phone` int(10) NOT NULL,
   `brands_supplied` varchar(50),
   PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `suppliers` (`id`, `name`, `address`, `postcode`, `phone`, `brands_supplied`) VALUES
("Ho", "Hooli",                "21 Trump's Stump st", 2260, 480370613, "Acer MSI Apple Microsoft"),
("AE", "Alex Eletronics",      "19 Big Crash st",     2222, 540302551, "Razor Lenovo HP Dell"),
("FB", "Fat Bird Electronics", "11 I Can Do That st", 2150, 345235328, "Alienware Asus");
