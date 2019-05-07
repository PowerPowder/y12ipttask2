# drop <yourtablename> table if it exists, then recreate it

DROP TABLE IF EXISTS <yourtablename>;

CREATE TABLE IF NOT EXISTS `<yourtablename>` 
( `product_code` varchar(4),
  `product_name` varchar(30),
  `product_description` varchar(425),
  `product_catergory` varchar(20),
  `product_price` decimal(6,2),
  `product_availability` varchar(10)
);

INSERT INTO `<yourtablename>` (`product_code`,`product_name`,`product_description`,`product_catergory`,`product_price`,`product_availability`) VALUES

('UB01', 'ASUS 13.3 UX303LA R5166H W8.1 Ultrabook', 'Key Features 13.3 LED HD+ Display  4th gen Intel® Core™ i5-4210U Processor Up to 2.7GHz  4GB RAM  1TB HDD  Intel® HD Graphics 4400  Windows® 8.1 ', 'Ultrabook', '1099', 'in stock'),
('UB01', 'ASUS 13.3 UX303LA R5166H W8.1 Ultrabook', 'Key Features 13.3 LED HD+ Display  4th gen Intel® Core™ i5-4210U Processor Up to 2.7GHz  4GB RAM  1TB HDD  Intel® HD Graphics 4400  Windows® 8.1 ', 'Ultrabook', '1099', 'in stock'); 
