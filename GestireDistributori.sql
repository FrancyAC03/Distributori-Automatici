CREATE database GestireDistributori;
use GestireDistributori;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `bevande` (
  `IdBevanda` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `Tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`IdBevanda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



INSERT INTO `bevande` (`IdBevanda`, `Nome`, `Tipo`) VALUES
(1, 'CocaCola', 'Bevanda Gassata'),
(2, 'Aranciata', 'Bevanda Gassata'),
(3, 'Pepsi', 'Bevanda Gassata'),
(4, 'Peroni', 'Birra'),
(5, 'Sprite', 'Bevanda Gassata'),
(6, 'Acqua Frizzante', 'Bevanda Gassata'),
(7, 'Acqua Liscia', 'Bevanda Liscia');


CREATE TABLE IF NOT EXISTS `contenere` (
  `IdContenere` int(11) NOT NULL AUTO_INCREMENT,
  `IdDistributore` int(11) NOT NULL,
  `IdBevanda` int(11) NOT NULL,
  `Quantita` int(11) NOT NULL,
  PRIMARY KEY (`IdContenere`),
  KEY `contenere_ibfk_1` (`IdDistributore`),
  KEY `contenere_ibfk_2` (`IdBevanda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO Contenere
(IdDistributore,IdBevanda,Quantita)
values
(1,1,20),
(1,2,10),
(1,3,15),
(1,4,20),
(1,5,10),
(1,6,15),
(1,7,20),
(2,1,0),
(2,2,0),
(2,3,0),
(2,4,0),
(2,5,0),
(2,6,0),
(2,7,0),
(3,1,15),
(3,2,20),
(3,3,10),
(3,4,15),
(3,5,20),
(3,6,10),
(3,7,15),
(4,1,30),
(4,2,12),
(4,3,20),
(4,4,30),
(4,5,12),
(4,6,20),
(4,7,20),
(5,1,0),
(5,2,0),
(5,3,0),
(5,4,0),
(5,5,0),
(5,6,0),
(5,7,0),
(6,1,0),
(6,2,0),
(6,3,0),
(6,4,0),
(6,5,0),
(6,6,0),
(6,7,0),
(7,1,15),
(7,2,20),
(7,3,30),
(7,4,15),
(7,5,20),
(7,6,30),
(7,7,30);


CREATE TABLE IF NOT EXISTS `distributori` (
  `IdDistributore` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `FlagAttivo` int(11) NOT NULL,
  PRIMARY KEY (`IdDistributore`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



INSERT INTO `distributori` (`IdDistributore`, `Nome`, `FlagAttivo`) VALUES
(1, 'H24', 1),
(2, 'BariDistribuzione', 0),
(3, 'DistriPuglia', 0),
(4, 'NiciosDispenser', 0),
(5, 'GrumoDispenser', 1),
(6, 'SqueoDispenser', 1);



