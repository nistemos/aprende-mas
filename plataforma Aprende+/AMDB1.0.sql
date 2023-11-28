-- MySQL Script generated by MySQL Workbench
-- Fri Oct 16 03:39:09 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema AM
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `AM` ;

-- -----------------------------------------------------
-- Schema AM
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `AM` DEFAULT CHARACTER SET utf8 ;
USE `AM` ;

-- -----------------------------------------------------
-- Table `AM`.`AMTU`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AM`.`AMTU` (
  `AMTU00` INT NOT NULL AUTO_INCREMENT,
  `AMTU01` VARCHAR(45) NOT NULL,
  `AMTU02` TINYINT(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`AMTU00`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `AMTU02_UNIQUE` ON `AM`.`AMTU` (`AMTU02` ASC);


-- -----------------------------------------------------
-- Table `AM`.`AMU`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AM`.`AMU` (
  `AMU00` INT NOT NULL AUTO_INCREMENT,
  `AMU01` VARCHAR(45) NOT NULL,
  `AMU02` VARCHAR(45) NULL,
  `AMU03` VARCHAR(45) NOT NULL,
  `AMU04` VARCHAR(45) NOT NULL,
  `AMU05` VARCHAR(255) NOT NULL,
  `AMU06` VARCHAR(45) NOT NULL,
  `AMU07` VARCHAR(255) NOT NULL,
  `AMU08` DATE NULL,
  `AMU09` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `AMU10` INT NOT NULL DEFAULT 1,
  `AMU11` VARCHAR(45) NOT NULL DEFAULT 'INACTIVO',
  PRIMARY KEY (`AMU00`),
  CONSTRAINT `fk_AMU_AMTU1`
    FOREIGN KEY (`AMU10`)
    REFERENCES `AM`.`AMTU` (`AMTU00`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `AMU05_UNIQUE` ON `AM`.`AMU` (`AMU05` ASC);

CREATE UNIQUE INDEX `AMU06_UNIQUE` ON `AM`.`AMU` (`AMU06` ASC);

CREATE INDEX `fk_AMU_AMTU1_idx` ON `AM`.`AMU` (`AMU10` ASC);


-- -----------------------------------------------------
-- Table `AM`.`AMD`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AM`.`AMD` (
  `AMD00` INT NOT NULL AUTO_INCREMENT,
  `AMD01` VARCHAR(45) NOT NULL,
  `AMD02` VARCHAR(255) NOT NULL,
  `AMD03` VARCHAR(255) NOT NULL,
  `AMD04` VARCHAR(45) NOT NULL,
  `AMD05` VARCHAR(45) NOT NULL DEFAULT '$0',
  PRIMARY KEY (`AMD00`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AM`.`AMDU`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AM`.`AMDU` (
  `AMDU00` INT NOT NULL AUTO_INCREMENT,
  `AMDU01` INT NOT NULL,
  `AMDU02` INT NOT NULL,
  `AMDU03` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`AMDU00`, `AMDU01`, `AMDU02`),
  CONSTRAINT `fk_AMD_has_AMU_AMD`
    FOREIGN KEY (`AMDU01`)
    REFERENCES `AM`.`AMD` (`AMD00`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AMD_has_AMU_AMU1`
    FOREIGN KEY (`AMDU02`)
    REFERENCES `AM`.`AMU` (`AMU00`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_AMD_has_AMU_AMU1_idx` ON `AM`.`AMDU` (`AMDU02` ASC);

CREATE INDEX `fk_AMD_has_AMU_AMD_idx` ON `AM`.`AMDU` (`AMDU01` ASC);


-- -----------------------------------------------------
-- Table `AM`.`AMCV`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AM`.`AMCV` (
  `AMCV00` INT NOT NULL AUTO_INCREMENT,
  `AMCV01` VARCHAR(45) NOT NULL DEFAULT 'Hoja de Vida',
  `AMCV02` VARCHAR(45) NOT NULL DEFAULT '/',
  `AMCV03` INT NOT NULL,
  PRIMARY KEY (`AMCV00`),
  CONSTRAINT `fk_AMCV_AMU1`
    FOREIGN KEY (`AMCV03`)
    REFERENCES `AM`.`AMU` (`AMU00`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_AMCV_AMU1_idx` ON `AM`.`AMCV` (`AMCV03` ASC);


-- -----------------------------------------------------
-- Table `AM`.`AMPEU`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AM`.`AMPEU` (
  `AMPEU00` INT NOT NULL AUTO_INCREMENT,
  `AMPEU01` VARCHAR(255) NOT NULL,
  `AMPEU02` VARCHAR(45) NOT NULL,
  `AMPEU03` VARCHAR(45) NOT NULL DEFAULT 'DESAPROBAR',
  `AMDU_AMDU00` INT NOT NULL,
  `AMDU_AMDU01` INT NOT NULL,
  `AMDU_AMDU02` INT NOT NULL,
  PRIMARY KEY (`AMPEU00`),
  CONSTRAINT `fk_AMPEU_AMDU1`
    FOREIGN KEY (`AMDU_AMDU00` , `AMDU_AMDU01` , `AMDU_AMDU02`)
    REFERENCES `AM`.`AMDU` (`AMDU00` , `AMDU01` , `AMDU02`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `AMPEU02_UNIQUE` ON `AM`.`AMPEU` (`AMPEU02` ASC);

CREATE INDEX `fk_AMPEU_AMDU1_idx` ON `AM`.`AMPEU` (`AMDU_AMDU00` ASC, `AMDU_AMDU01` ASC, `AMDU_AMDU02` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
