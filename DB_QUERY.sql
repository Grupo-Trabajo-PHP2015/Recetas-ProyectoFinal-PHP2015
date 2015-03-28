SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `DB_Restaurante` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `DB_Restaurante` ;

-- -----------------------------------------------------
-- Table `DB_Restaurante`.`Roles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB_Restaurante`.`Roles` (
  `idRol` INT NOT NULL AUTO_INCREMENT ,
  `Rol` VARCHAR(45) NULL ,
  PRIMARY KEY (`idRol`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Restaurante`.`Usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB_Restaurante`.`Usuarios` (
  `Cedula` INT NOT NULL ,
  `Nombre` VARCHAR(45) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `Usuario` VARCHAR(45) NOT NULL ,
  `Password` VARCHAR(45) NOT NULL ,
  `Roles_idRol` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`Cedula`) ,
  INDEX `fk_Usuarios_Roles_idx` (`Roles_idRol` ASC) ,
  CONSTRAINT `fk_Usuarios_Roles`
    FOREIGN KEY (`Roles_idRol` )
    REFERENCES `DB_Restaurante`.`Roles` (`idRol` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Restaurante`.`Clasificaciones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB_Restaurante`.`Clasificaciones` (
  `idClasificacion` INT NOT NULL AUTO_INCREMENT ,
  `Clasificacion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idClasificacion`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Restaurante`.`Recetas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB_Restaurante`.`Recetas` (
  `idReceta` INT NOT NULL AUTO_INCREMENT ,
  `Usuarios_Cedula` INT NOT NULL ,
  `Titulo` VARCHAR(45) NULL ,
  `Porciones` INT NULL ,
  `Descripcion` VARCHAR(45) NULL ,
  `Clasificaciones_idClasificacion` INT NOT NULL ,
  PRIMARY KEY (`idReceta`) ,
  INDEX `fk_Recetas_Usuarios1_idx` (`Usuarios_Cedula` ASC) ,
  INDEX `fk_Recetas_Clasificaciones1_idx` (`Clasificaciones_idClasificacion` ASC) ,
  CONSTRAINT `fk_Recetas_Usuarios1`
    FOREIGN KEY (`Usuarios_Cedula` )
    REFERENCES `DB_Restaurante`.`Usuarios` (`Cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Recetas_Clasificaciones1`
    FOREIGN KEY (`Clasificaciones_idClasificacion` )
    REFERENCES `DB_Restaurante`.`Clasificaciones` (`idClasificacion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Restaurante`.`Tipo_ingredientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB_Restaurante`.`Tipo_ingredientes` (
  `idTipo_ingrediente` INT NOT NULL AUTO_INCREMENT ,
  `Tipo` VARCHAR(45) NULL ,
  PRIMARY KEY (`idTipo_ingrediente`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Restaurante`.`Ingredientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB_Restaurante`.`Ingredientes` (
  `idIngrediente` INT NOT NULL ,
  `Nombre` VARCHAR(45) NULL ,
  `Desripcion` VARCHAR(45) NULL ,
  `Url` VARCHAR(45) NULL ,
  `Tipo_ingredientes_idTipo_ingrediente` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`idIngrediente`) ,
  INDEX `fk_Ingredientes_Tipo_ingredientes1_idx` (`Tipo_ingredientes_idTipo_ingrediente` ASC) ,
  CONSTRAINT `fk_Ingredientes_Tipo_ingredientes1`
    FOREIGN KEY (`Tipo_ingredientes_idTipo_ingrediente` )
    REFERENCES `DB_Restaurante`.`Tipo_ingredientes` (`idTipo_ingrediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Restaurante`.`Recetas_has_Ingredientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB_Restaurante`.`Recetas_has_Ingredientes` (
  `Recetas_idReceta` INT NOT NULL ,
  `Ingredientes_idIngrediente` INT NOT NULL ,
  `Cantidad` INT NULL ,
  PRIMARY KEY (`Recetas_idReceta`, `Ingredientes_idIngrediente`) ,
  INDEX `fk_Recetas_has_Ingredientes_Ingredientes1_idx` (`Ingredientes_idIngrediente` ASC) ,
  INDEX `fk_Recetas_has_Ingredientes_Recetas1_idx` (`Recetas_idReceta` ASC) ,
  CONSTRAINT `fk_Recetas_has_Ingredientes_Recetas1`
    FOREIGN KEY (`Recetas_idReceta` )
    REFERENCES `DB_Restaurante`.`Recetas` (`idReceta` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Recetas_has_Ingredientes_Ingredientes1`
    FOREIGN KEY (`Ingredientes_idIngrediente` )
    REFERENCES `DB_Restaurante`.`Ingredientes` (`idIngrediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `DB_Restaurante` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
