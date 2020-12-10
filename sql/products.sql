USE `3674097_theclosetdb`;

DROP TABLE IF EXISTS `Product Categories`;

CREATE TABLE `Product Categories` (
	`ID` INT AUTO_INCREMENT PRIMARY KEY,
	`Category` TEXT
) ENGINE = innodb DEFAULT CHARSET = utf8;

SET autocommit = 1;

INSERT INTO `Product Categories` (`ID`, `Category`) VALUES (NULL, "Tops");
INSERT INTO `Product Categories` (`ID`, `Category`) VALUES (NULL, "Suits");
INSERT INTO `Product Categories` (`ID`, `Category`) VALUES (NULL, "Bottoms");
INSERT INTO `Product Categories` (`ID`, `Category`) VALUES (NULL, "Ties");
INSERT INTO `Product Categories` (`ID`, `Category`) VALUES (NULL, "Shoes");

DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
	`ID` INT AUTO_INCREMENT PRIMARY KEY,
	`Category ID` INT,
	`Title` TEXT,
	`Image Name` TEXT,
	`Description` TEXT,
	`Price Range` TEXT,
	`Stock Status` TEXT
) ENGINE = innodb DEFAULT CHARSET = utf8;

SET autocommit = 1;

INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 1, "T-Shirts", "tShirt.jpeg", "We are known for our equation t-shirts.", "$20 - $50", "87 in stock. 150 arriving next week.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 1, "Dress Shirts", "dressShirt.jpg", "We alter our shirts within 15 minutes - you'll love the fitting.", "$50 - $110", "63 in stock");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 1, "Hoodies", "hoodie.jpeg", "We offer hoodies in various designs, colors and fabrics.", "$35 - $85", "39 in stock. 80 arriving next month.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 1, "Jackets", "jacket.jpg", "Our jackets are comfy fur lined on the inside.", "$80 - $220", "72 in stock. 30 arriving tomorrow.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 1, "Blazers", "blazer.jpg", "Our store is home to the widest variety of blazers in town.", "$160 - $330", "16 in stock.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 2, "Suits", "suit.jpeg", "Name your color - trust us - we've got it!", "$200 - $500", "0 in stock. 43 arriving in two weeks.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 3, "Jeans", "jeans.jpg", "Our jeans are made of the finest materials and last longer than long lasting jeans.", "$40 - $80", "13 in stock. 225 arriving next month.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 3, "Casual Pants", "casualPants.jpg", "It's hard to beat the distinctive and remarkable comfort our causal pants offer.", "$50 - $90", "24 in stock.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 4, "Ties", "tie.jpg", "Our ties are made of wrinkle proof material so you get to worry about one less thing.", "$15 - $35", "44 in stock.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 4, "Bow Ties", "bowTie.jpg", "Our staff is quite creative when it comes to bow tie knots. Learn a new knot on your next visit.", "$15 - $25", "23 in stock.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 5, "Sneakers", "sneakers.jpg", "Our sneakers have anti slip patterns underneath to help reduce your slipping worries.", "$60 - $170", "27 in stock. 20 arriving tomorrow.");
INSERT INTO `Products` (`ID`, `Category ID`, `Title`, `Image Name`, `Description`, `Price Range`, `Stock Status`) VALUES (NULL, 5, "Formal Shoes", "formalShoes.jpg", "We offer some of the most comfortable formal shoes in town.", "$100 - $250", "12 in stock.");