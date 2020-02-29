SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projeto
-- ----------------------------------------------------
DROP DATABASE IF EXISTS `projeto`;-- apagando o banco para inserir novamente
CREATE SCHEMA IF NOT EXISTS `projeto` DEFAULT CHARACTER SET utf8 ;
USE `projeto` ;

-- -----------------------------------------------------
-- Table `projeto`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto`.`usuario` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(40) NOT NULL,
  `senha` VARCHAR(20) NOT NULL
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC))
ENGINE = InnoDB;

iNSERT INTO usuario (usuario, senha) VALUES ('administrador', 'senhaincrivel' );

-- -----------------------------------------------------
-- Table `projeto`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto`.`empresa` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `razaoSocial` VARCHAR(50) NOT NULL,
  `nomeFantasia` VARCHAR(50) NOT NULL,
  `CNPJ` VARCHAR(19) NOT NULL,
  `site` VARCHAR(50) NOT NULL,
  `inscricaoEstadual` VARCHAR(9) NOT NULL,
  `matriz` VARCHAR(40) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `cidade` VARCHAR(40) NOT NULL,
  `endereco` VARCHAR(50) NOT NULL,
  `numero` VARCHAR(6) NOT NULL,
  `cep` CHAR(9) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `CNPJ_UNIQUE` (`CNPJ` ASC))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
