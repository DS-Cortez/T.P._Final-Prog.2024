
USE `alumno`;

INSERT INTO `alumno` (`nombre`, `apellido`, `dni`, `numero_legajo`, `email`) VALUES
('Juan', 'Pérez', '12345678', 'L001', 'juan.perez@email.com'),
('María', 'García', '23456789', 'L002', 'maria.garcia@email.com'),
('Carlos', 'Sánchez', '34567890', 'L003', 'carlos.sanchez@email.com'),
('Ana', 'López', '45678901', 'L004', 'ana.lopez@email.com'),
('Luis', 'Gómez', '56789012', 'L005', 'luis.gomez@email.com');

INSERT INTO `Materia` (`idMateria`, `Nombre`, `Descripcion`) VALUES
('MAT001', 'Matemáticas', 'Estudio de números y estructuras'),
('MAT002', 'Física', 'Estudio de las propiedades de la materia'),
('MAT003', 'Química', 'Estudio de las sustancias y sus reacciones'),
('MAT004', 'Historia', 'Estudio de los eventos del pasado'),
('MAT005', 'Geografía', 'Estudio de la Tierra y sus características');

INSERT INTO `examen` (`materia`, `nota`, `docente`, `fecha`, `Materia_idMateria`) VALUES
('Matemáticas', 8, 'Prof. Rodríguez', '2023-07-10', 'MAT001'),
('Física', 9, 'Prof. Martínez', '2023-08-15', 'MAT002'),
('Química', 7, 'Prof. Fernández', '2023-09-20', 'MAT003'),
('Historia', 6, 'Prof. Gómez', '2023-10-05', 'MAT004'),
('Geografía', 10, 'Prof. Pérez', '2023-11-12', 'MAT005');

INSERT INTO `usuario` (`usuario_empleado`, `clave_empleado`) VALUES
('jrodriguez', 'clave123'),
('mmartinez', 'clave456'),
('lfernandez', 'clave789'),
('jgomez', 'clave012'),
('eperez', 'clave345');

INSERT INTO `examen_has_alumno` (`examen_materia`, `examen_fecha`, `alumno_id_alumno`) VALUES
('Matemáticas', '2023-07-10', 1),
('Física', '2023-08-15', 2),
('Química', '2023-09-20', 3),
('Historia', '2023-10-05', 4),
('Geografía', '2023-11-12', 5);

INSERT INTO `alumno_has_Materia` (`alumno_id_alumno`, `Materia_idMateria`) VALUES
(1, 'MAT001'),
(2, 'MAT002'),
(3, 'MAT003'),
(4, 'MAT004'),
(5, 'MAT005');