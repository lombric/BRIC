SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `lombric` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `lombric` ;

-- -----------------------------------------------------
-- Table `lombric`.`group`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lombric`.`group` (
  `idgroup` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL ,
  `specifications` TEXT NULL ,
  `date_begin` DATE NULL ,
  `date_end` DATE NULL ,
  `fk_idgroup` INT NULL DEFAULT NULL ,
  PRIMARY KEY (`idgroup`) ,
  INDEX `fk_group_group_idx` (`fk_idgroup` ASC) ,
  CONSTRAINT `fk_group_group`
    FOREIGN KEY (`fk_idgroup` )
    REFERENCES `lombric`.`group` (`idgroup` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `lombric` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
