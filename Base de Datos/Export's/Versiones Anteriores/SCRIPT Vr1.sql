-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Burguerlandia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Burguerlandia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Burguerlandia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Burguerlandia` ;

-- -----------------------------------------------------
-- Table `Burguerlandia`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Burguerlandia`.`Cliente` (
  `Cedula` INT NOT NULL COMMENT '',
  `Telefono` VARCHAR(45) NULL COMMENT '',
  `Celular` VARCHAR(45) NULL COMMENT '',
  `Nombre` VARCHAR(45) NOT NULL COMMENT '',
  `Direccion` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`Cedula`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Burguerlandia`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Burguerlandia`.`Productos` (
  `Id_Productos` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(45) NOT NULL COMMENT '',
  `Valor` VARCHAR(45) NOT NULL COMMENT '',
  `Descripcion` VARCHAR(45) NOT NULL COMMENT '',
  `Foto` LONGBLOB NULL COMMENT '',
  PRIMARY KEY (`Id_Productos`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Burguerlandia`.`Domicilio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Burguerlandia`.`Domicilio` (
  `IdDomicilio` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Fecha_Dom` DATE NULL COMMENT '',
  `Hora_Dom` TIME(7) NULL COMMENT '',
  `Cliente_Cedula` INT NOT NULL COMMENT '',
  PRIMARY KEY (`IdDomicilio`)  COMMENT '',
  INDEX `fk_Domicilio_Cliente_idx` (`Cliente_Cedula` ASC)  COMMENT '',
  CONSTRAINT `fk_Domicilio_Cliente`
    FOREIGN KEY (`Cliente_Cedula`)
    REFERENCES `Burguerlandia`.`Cliente` (`Cedula`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Burguerlandia`.`Detalle_Domicilio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Burguerlandia`.`Detalle_Domicilio` (
  `Id_Detalle_Domicilio` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Cantidad` INT UNSIGNED NOT NULL COMMENT '',
  `IdDomicilio` INT NOT NULL COMMENT '',
  `Productos_Id_Productos` INT NOT NULL COMMENT '',
  PRIMARY KEY (`Id_Detalle_Domicilio`)  COMMENT '',
  INDEX `fk_Detalle_Domicilio_Domicilio1_idx` (`IdDomicilio` ASC)  COMMENT '',
  INDEX `fk_Detalle_Domicilio_Productos1_idx` (`Productos_Id_Productos` ASC)  COMMENT '',
  CONSTRAINT `fk_Detalle_Domicilio_Domicilio1`
    FOREIGN KEY (`IdDomicilio`)
    REFERENCES `Burguerlandia`.`Domicilio` (`IdDomicilio`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Detalle_Domicilio_Productos1`
    FOREIGN KEY (`Productos_Id_Productos`)
    REFERENCES `Burguerlandia`.`Productos` (`Id_Productos`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Burguerlandia`.`Opinion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Burguerlandia`.`Opinion` (
  `idOpinion` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Opinion` VARCHAR(250) NOT NULL COMMENT '',
  PRIMARY KEY (`idOpinion`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
