-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Versie:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Databasestructuur van tb_site wordt geschreven
CREATE DATABASE IF NOT EXISTS `tb_site` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tb_site`;

-- Structuur van  tabel tb_site.categorien wordt geschreven
CREATE TABLE IF NOT EXISTS `categorien` (
  `catID` int NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel tb_site.categorien: ~9 rows (ongeveer)
INSERT INTO `categorien` (`catID`, `categorie`) VALUES
	(1, 'friet'),
	(2, 'pizza'),
	(3, 'burger'),
	(4, 'snacks'),
	(5, 'menu\'s'),
	(6, 'drinken\r\n'),
	(7, 'kapsalon'),
	(8, 'vega'),
	(9, 'saus');

-- Structuur van  tabel tb_site.contact wordt geschreven
CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL DEFAULT '0',
  `message` mediumtext NOT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel tb_site.contact: ~2 rows (ongeveer)
INSERT INTO `contact` (`contactID`, `email`, `subject`, `message`) VALUES
	(1, 'test@test.nl', 'Test', 'dit is een test bericht'),
	(2, 'test@tester', 'reas', 'dit is testbericht 2'),
	(3, 'ry65ry6rhytruhyty6r@ddh.ll', 'rwgrwgfrw', '');

-- Structuur van  tabel tb_site.menu wordt geschreven
CREATE TABLE IF NOT EXISTS `menu` (
  `menuID` int NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL DEFAULT '0',
  `allergeen` varchar(255) NOT NULL DEFAULT '0',
  `img_path` varchar(255) NOT NULL DEFAULT '0',
  `categorie` int NOT NULL DEFAULT '0',
  `prijs` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`menuID`),
  KEY `categorie` (`categorie`),
  CONSTRAINT `FK_menu_categorien` FOREIGN KEY (`categorie`) REFERENCES `categorien` (`catID`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel tb_site.menu: ~78 rows (ongeveer)
INSERT INTO `menu` (`menuID`, `naam`, `allergeen`, `img_path`, `categorie`, `prijs`) VALUES
	(2, 'Friet oorlog', 'Pindas', 'img/friet/test', 1, 3),
	(5, 'kapsalon kip', 'kip', '0', 7, 15.5),
	(16, 'Vegetarische Burger', 'Smaakvolle burger op basis van plantaardige ingrediënten.', '0', 8, 8.65),
	(18, 'Zoete Aardappel Friet', 'Gezonde frietjes van zoete aardappel.', '0', 1, 5.91),
	(29, 'Aardappelkroketjes', 'Krokant van buiten, zacht van binnen.', '0', 4, 10.79),
	(37, 'Fanta', 'Zoete sinaasappelfrisdrank met een bruisende toets.', '0', 6, 1.56),
	(42, 'Spinaziekaasrol', 'Bladerdeeg gevuld met spinazie en smeltende kaas.', '0', 4, 2.51),
	(43, 'Mayonaise', 'Romige mayonaise, perfect voor bij friet.', '0', 9, 2.92),
	(46, 'Friet', 'Vers gebakken frietjes, goudgeel en krokant.', '0', 1, 2.5),
	(60, 'Snackbox Small', 'Kleine snackbox met friet en twee snacks naar keuze.', '0', 4, 4.77),
	(64, 'Cola', 'Frisse, koolzuurhoudende frisdrank met een zoete smaak.', '0', 6, 11.26),
	(68, 'Falafel', 'Knapperige falafelballetjes met een kruidige smaak.', '0', 4, 4.58),
	(70, 'Milkshake Aardbei', 'Romige aardbeienmilkshake met slagroom.', '0', 6, 10.93),
	(84, 'Pindasaus', 'Pindasaus met een licht pittige twist.', '0', 9, 8.41),
	(91, 'Kaassoufflé', 'Een romige kaassoufflé in een krokant jasje.', '0', 4, 8.69),
	(93, 'Knoflooksaus', 'Heerlijke knoflooksaus met een zachte smaak.', '0', 9, 3.95),
	(96, 'Hamburger Menu', 'Hamburger met friet en een drankje naar keuze.', '0', 5, 11.31),
	(97, 'Frikandel', 'Lange, sappige frikandel met een stevige bite.', '0', 4, 8.37),
	(98, 'Groentekroket', 'Kroket gevuld met een rijke mix van groenten.', '0', 8, 9.27),
	(100, 'Snackbox Large', 'Grote snackbox voor meerdere personen.', '0', 4, 9.89),
	(102, 'Onion Rings', 'Gefrituurde uienringen in een krokant laagje.', '0', 4, 5.91),
	(103, 'Curry', 'Zoet-pittige curry met een vleugje kruiden.', '0', 9, 5.48),
	(104, 'Friet & Kroket Combo', 'Een portie friet gecombineerd met een kroket.', '0', 5, 5.41),
	(106, 'Milkshake Vanille', 'Klassieke vanillesmaak in een zachte milkshake.', '0', 6, 9.04),
	(107, 'Kroket', 'Krokante kroket gevuld met een romige vleessaus.', '0', 4, 5.48),
	(110, 'Bamischijf', 'Ronde snack met een vulling van gekruide bami.', '0', 4, 11.71),
	(112, 'Kroket', 'Gluten, Lactose', '/images/snacks/kroket.jpg', 4, 2.75),
	(113, 'Pizza Margherita', 'Gluten, Lactose', '/images/pizza/pizza_margherita.jpg', 2, 7.5),
	(114, 'Hamburger', 'Gluten', '/images/burger/hamburger.jpg', 3, 5),
	(115, 'Frikandel Speciaal', 'Gluten', '/images/snacks/frikandel_speciaal.jpg', 4, 3),
	(116, 'Pizza Pepperoni', 'Gluten, Lactose', '/images/pizza/pizza_pepperoni.jpg', 2, 8),
	(117, 'Cheeseburger', 'Gluten, Lactose', '/images/burger/cheeseburger.jpg', 3, 5.5),
	(118, 'Tosti Ham Kaas', 'Gluten, Lactose', '/images/snacks/tosti_ham_kaas.jpg', 4, 3),
	(119, 'Fanta', 'Gluten', '/images/drinken/fanta.jpg', 6, 1.5),
	(120, 'Kapsalon', 'Gluten, Lactose', '/images/kapsalon/kapsalon.jpg', 7, 8.5),
	(121, 'Vega Burger', 'Gluten', '/images/vega/vega_burger.jpg', 8, 6),
	(122, 'Patat Met Mayo', 'Gluten', '/images/friet/patat_mayo.jpg', 1, 2),
	(123, 'Pizza Hawaï', 'Gluten, Lactose', '/images/pizza/pizza_hawai.jpg', 2, 7.5),
	(124, 'Veggie Pizza', 'Gluten, Lactose', '/images/pizza/veggie_pizza.jpg', 2, 7),
	(125, 'Frikandel', 'Gluten', '/images/snacks/frikandel.jpg', 4, 2.5),
	(126, 'Bitterballen', 'Gluten, Lactose', '/images/snacks/bitterballen.jpg', 4, 3),
	(127, 'Coca-Cola', 'Gluten', '/images/drinken/coca_cola.jpg', 6, 1.5),
	(128, 'Milkshake Vanille', 'Lactose', '/images/drinken/milkshake_vanille.jpg', 6, 3.5),
	(129, 'Patat Speciaal', 'Gluten, Lactose', '/images/friet/patat_speciaal.jpg', 1, 3),
	(130, 'Pizza Quattro Stagioni', 'Gluten, Lactose', '/images/pizza/pizza_quattro_stagioni.jpg', 2, 9),
	(131, 'Bacon Cheeseburger', 'Gluten, Lactose', '/images/burger/bacon_cheeseburger.jpg', 3, 6),
	(132, 'Vega Wrap', 'Gluten', '/images/vega/vega_wrap.jpg', 8, 6.5),
	(133, 'Knakworst', 'Gluten', '/images/snacks/knakworst.jpg', 4, 2),
	(134, 'Fanta Orange', 'Gluten', '/images/drinken/fanta_orange.jpg', 6, 1.5),
	(135, 'Taco', 'Gluten, Lactose', '/images/snacks/taco.jpg', 4, 2.5),
	(136, 'Patat Stoofvlees', 'Gluten', '/images/friet/patat_stoofvlees.jpg', 1, 4.5),
	(137, 'Pizza Calzone', 'Gluten, Lactose', '/images/pizza/pizza_calzone.jpg', 2, 8.5),
	(138, 'Fish & Chips', 'Gluten', '/images/snacks/fish_chips.jpg', 4, 4),
	(139, 'Limonade', 'Gluten', '/images/drinken/limonade.jpg', 6, 1.5),
	(140, 'Kapsalon Kip', 'Gluten, Lactose', '/images/kapsalon/kapsalon_kip.jpg', 7, 9),
	(141, 'Veggie Wrap', 'Gluten', '/images/vega/veggie_wrap.jpg', 8, 6),
	(142, 'Chicken Nuggets', 'Gluten', '/images/snacks/chicken_nuggets.jpg', 4, 3.5),
	(143, 'Appelflap', 'Gluten, Lactose', '/images/snacks/appelflap.jpg', 4, 2),
	(144, 'Patat Oorlog', 'Gluten, Lactose', '/images/friet/patat_oorlog.jpg', 1, 3.5),
	(145, 'Pizza Funghi', 'Gluten, Lactose', '/images/pizza/pizza_funghi.jpg', 2, 7.5),
	(146, 'Spaghetti Bolognese', 'Gluten, Lactose', '/images/menu/spaghetti_bolognese.jpg', 5, 8.5),
	(147, 'Chicken Wrap', 'Gluten', '/images/snacks/chicken_wrap.jpg', 4, 4),
	(148, 'Tomatensoep', 'Gluten, Lactose', '/images/menu/tomatensoep.jpg', 5, 3),
	(149, 'Patat Speciaal Deluxe', 'Gluten, Lactose', '/images/friet/patat_speciaal_deluxe.jpg', 1, 4),
	(150, 'Pizza Margherita Vegan', 'Gluten', '/images/pizza/pizza_margherita_vegan.jpg', 2, 8),
	(151, 'Tuna Melt', 'Gluten, Lactose', '/images/snacks/tuna_melt.jpg', 4, 3),
	(152, 'Witbier', 'Gluten', '/images/drinken/witbier.jpg', 6, 2),
	(153, 'Hamburger Deluxe', 'Gluten', '/images/burger/hamburger_deluxe.jpg', 3, 5.5),
	(154, 'Patat Met Kaas', 'Gluten', '/images/friet/patat_kaas.jpg', 1, 3),
	(155, 'Pikante Kipburger', 'Gluten, Lactose', '/images/burger/pikante_kipburger.jpg', 3, 5.5),
	(156, 'Pizza Vegetariano', 'Gluten, Lactose', '/images/pizza/pizza_vegetariano.jpg', 2, 8.5),
	(157, 'Bavaria', 'Gluten', '/images/drinken/bavaria.jpg', 6, 2),
	(158, 'Broodje Haring', 'Gluten', '/images/snacks/broodje_haring.jpg', 4, 3.5),
	(159, 'Patat Met Stoofvlees', 'Gluten', '/images/friet/patat_stoofvlees2.jpg', 1, 4.5),
	(160, 'Frikandelbroodje', 'Gluten, Lactose', '/images/snacks/frikandelbroodje.jpg', 4, 3),
	(161, 'Chocolademelk', 'Lactose', '/images/drinken/chocolademelk.jpg', 6, 2),
	(162, 'Kip Krokant', 'Gluten', '/images/snacks/kip_krokant.jpg', 4, 3),
	(166, 'Frietje Dylan', 'vettig', 'dyla/dyl', 9, 50);

-- Structuur van  tabel tb_site.roles wordt geschreven
CREATE TABLE IF NOT EXISTS `roles` (
  `roleID` int NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`roleID`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel tb_site.roles: ~2 rows (ongeveer)
INSERT INTO `roles` (`roleID`, `role`) VALUES
	(1, 'admin'),
	(3, 'user'),
	(2, 'worker');

-- Structuur van  tabel tb_site.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `role` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`),
  KEY `role` (`role`),
  CONSTRAINT `FK_users_roles` FOREIGN KEY (`role`) REFERENCES `roles` (`roleID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel tb_site.users: ~6 rows (ongeveer)
INSERT INTO `users` (`UserID`, `username`, `password`, `role`) VALUES
	(3, 'TooHighDude', '$2y$10$NHIG8L7CopQkdJHdjFPUUuqvGMS/H8cvqC7TCdokE/Z6NyxyAH9z2', 1),
	(4, 'test', '$2y$10$y7R5OXYVUby/LNIvo4kWdO6n.Y1mkwiPYlCnJ6JdZe2N/VT17pZ1S', 2),
	(5, 'neil', '$2y$10$qFP7juWcJ7BsRQPWN0Wj2Ob3uMTGxgGsf3zifOAWC5VnqZp/W2t6y', 2),
	(6, 'tim', '$2y$10$bDGNjgFMwzyj.c7DRLT65ekIrUdGJ3t31MVB4sypRNiT5vUKx1Dp2', 2),
	(7, 'kane', '$2y$10$1TG.cW7adcmDr8Yoo98yOuONykUVvWUbO/HkxfFihSztH2jNQ0eQ2', 2),
	(8, 'Niek', '$2y$10$C45Wq3GPC59fTeCwvjNZtO/zac/f7Q.dMvY72m1nfMKlHO35fCbHe', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
