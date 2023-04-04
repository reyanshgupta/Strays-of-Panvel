CREATE TABLE `straysofpanvel`.`adoptionrequests` (`Name` VARCHAR(30) NOT NULL , `PhoneNumber` VARCHAR(15) NOT NULL , `Email` VARCHAR(25) NOT NULL , `Address` VARCHAR(100) NOT NULL , `PetName` VARCHAR(15) NOT NULL , `PetAge` INT(5) NOT NULL , `PetBreed` VARCHAR(20) NOT NULL , `Gender` VARCHAR(10) NOT NULL ) ENGINE = InnoDB;
CREATE TABLE `straysofpanvel`.`adminlogin` (`admin_id` VARCHAR(25) NOT NULL , `password` VARCHAR(25) NOT NULL , PRIMARY KEY (`admin_id`)) ENGINE = InnoDB;
ALTER TABLE `adoptionrequests` ADD `req_id` INT(30) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`req_id`);
ALTER TABLE `adoptionrequests` ADD `lastName` VARCHAR(30) NOT NULL AFTER `Name`;
ALTER TABLE `adoptionrequests` CHANGE `Name` `firstName` VARCHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;
<<<<<<< HEAD
ALTER TABLE `adoptionrequests` CHANGE `Address` `primAddress` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;




CREATE TABLE `StraysOfPanvel`.`adoptionrequests` (`req_id` INT(30) NOT NULL AUTO_INCREMENT , `firstName` VARCHAR(30) NOT NULL , `lastName` VARCHAR(30) NOT NULL , `PhoneNumber` INT(15) NOT NULL , `Email` VARCHAR(30) NOT NULL , `primAddress` VARCHAR(255) NOT NULL , `PetName` VARCHAR(30) NOT NULL , `PetAge` INT(20) NOT NULL , `PetBreed` VARCHAR(30) NOT NULL , `Gender` VARCHAR(10) NOT NULL , PRIMARY KEY (`req_id`)) ENGINE = InnoDB;
=======
ALTER TABLE `adoptionrequests` CHANGE `Address` `primAddress` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;
>>>>>>> eefd58be306a6911013669c4c860da207a06b2a1
