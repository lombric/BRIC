SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `lombric` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `lombric`;

-- -----------------------------------------------------
-- Table `lombric`.`group`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lombric`.`group` (
  `idgroup` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `specifications` TEXT NULL ,
  `date_begin` TIME NULL ,
  `date_end` TIME NULL ,
  PRIMARY KEY (`idgroup`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lombric`.`subgroup`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lombric`.`subgroup` (
  `idsubgroup` INT NOT NULL ,
  `fk_idgroup` INT NULL ,
  PRIMARY KEY (`idsubgroup`) ,
  INDEX `fk_sousgroupe_groupe` (`fk_idgroup` ASC) ,
  CONSTRAINT `fk_sousgroupe_groupe`
    FOREIGN KEY (`fk_idgroup` )
    REFERENCES `lombric`.`group` (`idgroup` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
