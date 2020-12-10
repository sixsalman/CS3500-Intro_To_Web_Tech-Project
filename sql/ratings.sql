USE `3674097_theclosetdb`;

DROP TABLE IF EXISTS `Ratings`;

CREATE TABLE `Ratings` (
	`ID` INT AUTO_INCREMENT PRIMARY KEY,
	`Overall` INT,
	`Fabric Quality` INT,
	`Stitch Quality` INT,
	`Staff Hospitality` INT,
	`Store Cleanliness` INT,
	`Comments / Improvement Suggestions` VARCHAR(280)
) ENGINE = innodb DEFAULT CHARSET=utf8;

SET autocommit = 1;