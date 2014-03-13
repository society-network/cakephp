SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `uiproperties` DEFAULT CHARACTER SET utf8 ;
USE `uiproperties` ;

-- -----------------------------------------------------
-- Table `uiproperties`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`user` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_group_id` INT NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `created` TIMESTAMP NOT NULL ,
  `modified` TIMESTAMP NULL ,
  `deleted` TIMESTAMP NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uiproperties`.`category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`category` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`category` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(11) NOT NULL ,
  `name` VARCHAR(100) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`document`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`document` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`document` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(11) NULL DEFAULT NULL ,
  `user_id` INT(11) NOT NULL ,
  `locale_id` INT(11) NOT NULL ,
  `category_id` INT(11) NULL DEFAULT NULL ,
  `title` VARCHAR(100) NOT NULL ,
  `summary` TEXT NOT NULL ,
  `body` TEXT NOT NULL ,
  `is_login_required` TINYINT(1) NOT NULL DEFAULT '0' ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`document_translation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`document_translation` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`document_translation` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `document_id` INT(11) NOT NULL ,
  `locale_id` INT(11) NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  `title` VARCHAR(100) NOT NULL ,
  `summary` TEXT NOT NULL ,
  `body` TEXT NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`file`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`file` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`file` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `document_id` INT(11) NULL DEFAULT NULL ,
  `document_translation_id` INT(11) NULL DEFAULT NULL ,
  `name` VARCHAR(100) NOT NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `path` VARCHAR(100) NOT NULL ,
  `is_a_link` TINYINT(1) NOT NULL DEFAULT '0' ,
  `is_login_required` TINYINT(1) NOT NULL DEFAULT '0' ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`locale`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`locale` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`locale` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `code` VARCHAR(45) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`user_group`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`user_group` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`user_group` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`categories` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`categories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(11) NULL DEFAULT NULL ,
  `name` VARCHAR(100) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`document_files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`document_files` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`document_files` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `document_id` INT(11) NULL DEFAULT NULL ,
  `document_translation_id` INT(11) NULL DEFAULT NULL ,
  `name` VARCHAR(100) NOT NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `path` VARCHAR(100) NOT NULL ,
  `is_a_link` TINYINT(1) NOT NULL DEFAULT '0' ,
  `is_login_required` TINYINT(1) NOT NULL DEFAULT '0' ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`document_translations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`document_translations` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`document_translations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `document_id` INT(11) NOT NULL ,
  `locale_id` INT(11) NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  `title` VARCHAR(100) NOT NULL ,
  `summary` TEXT NOT NULL ,
  `body` TEXT NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`documents`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`documents` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`documents` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(11) NULL DEFAULT NULL ,
  `user_id` INT(11) NOT NULL ,
  `locale_id` INT(11) NOT NULL ,
  `category_id` INT(11) NULL DEFAULT NULL ,
  `title` VARCHAR(100) NOT NULL ,
  `summary` TEXT NOT NULL ,
  `body` TEXT NOT NULL ,
  `is_login_required` TINYINT(1) NOT NULL DEFAULT '0' ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`locales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`locales` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`locales` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `code` VARCHAR(45) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`user_groups`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`user_groups` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`user_groups` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(11) NULL DEFAULT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `uiproperties`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uiproperties`.`users` ;

CREATE  TABLE IF NOT EXISTS `uiproperties`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `user_group_id` INT(11) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `password` VARCHAR(100) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `modified` TIMESTAMP NULL DEFAULT NULL ,
  `deleted` TIMESTAMP NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
