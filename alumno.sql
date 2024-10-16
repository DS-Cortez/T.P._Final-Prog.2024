CREATE SCHEMA IF NOT EXISTS `alumno` DEFAULT CHARACTER SET utf8mb4;
USE `alumno`;

-- -----------------------------------------------------
-- Tabla alumno
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alumno` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `dni` VARCHAR(20) NOT NULL,
  `numero_legajo` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;

-- -----------------------------------------------------
-- Tabla Materia
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Materia` (
  `idMateria` VARCHAR(50) NOT NULL,
  `Nombre` VARCHAR(50) NOT NULL,
  `Descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idMateria`)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;

-- -----------------------------------------------------
-- Tabla examen
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `examen` (
  `materia` VARCHAR(100) NOT NULL,
  `nota` INT(11) NOT NULL,
  `docente` VARCHAR(100) NOT NULL,
  `fecha` DATE NOT NULL,
  `Materia_idMateria` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`materia`, `fecha`),
  INDEX `fk_examen_Materia1_idx` (`Materia_idMateria`),
  CONSTRAINT `fk_examen_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Tabla usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario_empleado` VARCHAR(45) NULL DEFAULT NULL,
  `clave_empleado` VARCHAR(250) NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE = InnoDB AUTO_INCREMENT = 3 DEFAULT CHARACTER SET = utf8mb4;

-- -----------------------------------------------------
-- Tabla examen_has_alumno (relación entre examen y alumno)
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `examen_has_alumno` (
  `examen_materia` VARCHAR(100) NOT NULL,
  `examen_fecha` DATE NOT NULL,
  `alumno_id_alumno` INT(11) NOT NULL,
  PRIMARY KEY (`examen_materia`, `examen_fecha`, `alumno_id_alumno`),
  INDEX `fk_examen_has_alumno_alumno1_idx` (`alumno_id_alumno`),
  INDEX `fk_examen_has_alumno_examen_idx` (`examen_materia`, `examen_fecha`),
  CONSTRAINT `fk_examen_has_alumno_examen`
    FOREIGN KEY (`examen_materia`, `examen_fecha`)
    REFERENCES `examen` (`materia`, `fecha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_examen_has_alumno_alumno1`
    FOREIGN KEY (`alumno_id_alumno`)
    REFERENCES `alumno` (`id_alumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Tabla alumno_has_Materia (relación entre alumno y materia)
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `alumno_has_Materia` (
  `alumno_id_alumno` INT(11) NOT NULL,
  `Materia_idMateria` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`alumno_id_alumno`, `Materia_idMateria`),
  INDEX `fk_alumno_has_Materia_Materia1_idx` (`Materia_idMateria`),
  INDEX `fk_alumno_has_Materia_alumno1_idx` (`alumno_id_alumno`),
  CONSTRAINT `fk_alumno_has_Materia_alumno1`
    FOREIGN KEY (`alumno_id_alumno`)
    REFERENCES `alumno` (`id_alumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_alumno_has_Materia_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;

