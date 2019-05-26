SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `users` (
   `username` varchar(100) NOT NULL,
   `password` varchar(100) NOT NULL,
   `email` varchar(100) NOT NULL,
   `history` varchar(1000),
   PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `users` (`username`, `password`) VALUES
("admin", "password", "admin@gmail.com", "26/5/19(1 2 3)");
