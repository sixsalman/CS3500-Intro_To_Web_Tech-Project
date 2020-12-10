USE `3674097_theclosetdb`;

DROP TABLE IF EXISTS `Employees`;

CREATE TABLE `Employees` (
	`ID` INT AUTO_INCREMENT PRIMARY KEY,
	`Full Name` TEXT,
	`Password` TEXT,
	`Seed` VARCHAR(13)
) ENGINE = innodb DEFAULT CHARSET = utf8;

SET autocommit = 1;

INSERT INTO `Employees` (`ID`, `Full Name`, `Password`, `Seed`) VALUES (NULL, "Test User One", "027bf50c85608b2ddc3c226609e0bc93", "jbdhs12134123"); -- Password: webtech1
INSERT INTO `Employees` (`ID`, `Full Name`, `Password`, `Seed`) VALUES (NULL, "Test User Two", "027f0046fdae3f95eb865a241f6daf4b", "bueh325bhjhb2"); -- Password: webtech2
INSERT INTO `Employees` (`ID`, `Full Name`, `Password`, `Seed`) VALUES (NULL, "Test User Three", "14bb25e74f4dd6a158ed5a65b054dc14", "husfggw1231sd"); -- Password: webtech3