ALTER TABLE `tenants` ADD `gender` ENUM('male','female') NOT NULL AFTER `lname`; 


ALTER TABLE `properties` CHANGE `adress` `address` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL; 