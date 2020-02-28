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
-- Table `projeto`.`cliente
-- depois checar o tamnho correto de cnpj/cpf
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto`.`cliente` (
  `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `razao_social` VARCHAR(50) NOT NULL,
  `nome_fantasia` VARCHAR(50) NOT NULL,
  `CNPJ/CPF` VARCHAR(50) NOT NULL,
  `tipo` ENUM('jurídica', 'fisica') NOT NULL
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `CNPJ/CPF_UNIQUE` (`CNPJ/CPF` ASC))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
