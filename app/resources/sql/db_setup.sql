DROP DATABASE IF EXISTS SZFM;

CREATE DATABASE SZFM;

USE SZFM;

CREATE TABLE `RANKS`(
    `ID` INT AUTO_INCREMENT,
    `NAME` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

INSERT INTO `RANKS` VALUES(NULL, 'CUSTOMER');
INSERT INTO `RANKS` VALUES(NULL, 'EMPLOYEE');
INSERT INTO `RANKS` VALUES(NULL, 'BOSS');

CREATE TABLE `SZFM`.`USERS`(
    `ID` INT NOT NULL AUTO_INCREMENT ,
    `NAME` VARCHAR(60) NOT NULL , 
    `PASSWORD` MEDIUMTEXT NOT NULL , 
    `CARD` VARCHAR(40), 
    `ADDRESS` VARCHAR(200) NOT NULL , 
    `EMAIL` VARCHAR(100) NOT NULL , 
    `PHONE_NUMBER` VARCHAR(20) NOT NULL , 
    `RANK_ID` INT NOT NULL , 
    ISPREMIUMMEMBER INT , 
    IMAGE VARCHAR(300) , 
    PRIMARY KEY (`ID`), 
    UNIQUE `EMAIL` (`EMAIL`), 
    UNIQUE `PHONE` (`PHONE_NUMBER`), 
    FOREIGN KEY (`RANK_ID`) REFERENCES RANKS(`ID`)
) ENGINE = InnoDB;

INSERT INTO `SZFM`.`USERS` VALUES (
    NULL, 
    'Dummy Name',
    'password',
    '122435234145',
    '123 Dummy Street, Washington DC',
    'asd@asd.com',
    '06407561234',
    1,
    NULL,
    NULL
);

CREATE TABLE `SZFM`.`CALORIES`(
    `ID` INT AUTO_INCREMENT,
    `NAME` VARCHAR(60) NOT NULL,
    `CAL_CONTENT` INT NOT NULL,
    PRIMARY KEY (`ID`),
    UNIQUE `UNIQUE_NAME` (`NAME`)
) ENGINE = InnoDB;

INSERT INTO `SZFM`.`CALORIES` VALUES (NULL, 'Kenyér', 267);
INSERT INTO `SZFM`.`CALORIES` VALUES (NULL, 'Sertéscomb', 136);
INSERT INTO `SZFM`.`CALORIES` VALUES (NULL, 'Csirkecomb', 119);
INSERT INTO `SZFM`.`CALORIES` VALUES (NULL, 'Dió', 654);
INSERT INTO `SZFM`.`CALORIES` VALUES (NULL, 'Pisztácia', 560);

CREATE TABLE `SZFM`.`FORUM` (
    `ID` INT AUTO_INCREMENT,
    `USER_ID` INT,
    `COMMENT` VARCHAR(400),
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`USER_ID`) REFERENCES USERS(`ID`)
) ENGINE = InnoDB;

INSERT INTO `SZFM`.`FORUM` VALUES(NULL, 1, 'Dummy comment. Dummy comment. Dummy comment. ');

CREATE TABLE `SZFM`.`MUSCLE_GROUPS`(
    `ID` INT AUTO_INCREMENT,
    `NAME` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

INSERT INTO `SZFM`.`MUSCLE_GROUPS` VALUES(NULL, 'Chest');
INSERT INTO `SZFM`.`MUSCLE_GROUPS` VALUES(NULL, 'Shoulders');
INSERT INTO `SZFM`.`MUSCLE_GROUPS` VALUES(NULL, 'Back');
INSERT INTO `SZFM`.`MUSCLE_GROUPS` VALUES(NULL, 'Abs');
INSERT INTO `SZFM`.`MUSCLE_GROUPS` VALUES(NULL, 'Legs');
INSERT INTO `SZFM`.`MUSCLE_GROUPS` VALUES(NULL, 'Arms');
INSERT INTO `SZFM`.`MUSCLE_GROUPS` VALUES(NULL, 'Circuit Training');

CREATE TABLE `SZFM`.`EXCERCISES`(
    `ID` INT AUTO_INCREMENT,
    `MG_ID` INT COMMENT 'MUSCLE_GROUPS ID',
    `NAME` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`MG_ID`) REFERENCES `SZFM`.`MUSCLE_GROUPS`(`ID`)
) ENGINE = InnoDB;

CREATE TABLE `SZFM`.`TRAINING_PLANS`(
    `ID` INT AUTO_INCREMENT,
    `USER_ID` INT,
    `NAME` VARCHAR(30),
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`USER_ID`) REFERENCES `SZFM`.`USERS`(`ID`)
) ENGINE = InnoDB;

CREATE TABLE `SZFM`.`TRAINING_TO_EXCERCISES` (
    `ID` INT AUTO_INCREMENT,
    `PLAN_ID` INT COMMENT 'TRAINING_PLAN_ID',
    `EXCERCISE_ID` INT,
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`PLAN_ID`) REFERENCES `SZFM`.`TRAINING_PLANS`(`ID`) ON DELETE CASCADE,
    FOREIGN KEY (`EXCERCISE_ID`) REFERENCES `SZFM`.`EXCERCISES`(`ID`) ON DELETE CASCADE
) ENGINE = InnoDB, COMMENT 'Table for N:N connections of TRAINING_PLAN and EXCERCISES';

