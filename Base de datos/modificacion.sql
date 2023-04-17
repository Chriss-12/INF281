--INSERCIONES EN USUARIO
INSERT INTO USUARIO(nombre, apPaterno, apMaterno, contrasenia, ci, fechaNac, tipoUsuario)
("Cristhian", "Alave", "Sanjines", 1324, 1241255, "2001-04-12", "administrador")
("Kattya", "Torrez", "Yanique", 1111, 1234545, "2001-04-12", "administrador"),
("Alex", "Roque", "Mendoza", 1234, 1545343, "2001-04-12", "administrador"),
("Gabriel", "Chacon", "Hinojosa", 5425, 6532454, "2001-04-12", "administrador")
--
CREATE TABLE EMAIL(
    correoElectronico varchar(100) not null,
    id_usuario int not null,
    primary key(correoElectronico)
);

INSERT INTO EMAIL(correoElectronico, id_usuario)
VALUES
("sanjchriss12@gmail.com",  19),
("ktorrezy@fcpn.edu.bo", 20),
("aroquem@fcpn.edu.bo", 21),
("jchaconh@fcpn.edu.bo", 22)





--TRIGGERS---------------------------------------
CREATE TABLE USUARIOS_BACKUP(
    id_usuario int,
    nombre varchar(30),
    apPaterno varchar(30),
    apMaterno varchar(30),
    contrasenia varchar(30),
    ci integer,
    fechaNac date,
    correoElectronico varchar(100),
    nombreUsuario varchar(100),
    tipoUsuario varchar(30),
    accion varchar(30)
);
CREATE TABLE ACTIVIDADES_BACKUP(
    id_actividad int,
    id_usuarioExpositor int,
    id_usuarioAdministrador int,
    cupos integer,
    carga_horaria integer,
    tipo varchar(300),
    tema varchar(200),
    fechaActividad date,
    accion varchar(30)

);
//CREACION DE TRIGGERS
CREATE TRIGGER GUARDAR_USUARIOS_ELIMINADOS
AFTER DELETE
ON USUARIO
FOR EACH ROW 
INSERT INTO USUARIOS_BACKUP(
    id_usuario,
    nombre, 
    apPaterno, 
    apMaterno, 
    contrasenia, 
    ci, 
    fechaNac, 
    correoElectronico,
    nombreUsuario,
    tipoUsuario,
    accion
)
VALUES(
    OLD.id_usuario,
    OLD.nombre, 
    OLD.apPaterno, 
    OLD.apMaterno, 
    OLD.contrasenia, 
    OLD.ci, 
    OLD.fechaNac, 
    OLD.correoElectronico,
    OLD.nombreUsuario,
    OLD.tipoUsuario,
	"eliminacion"
);

CREATE TRIGGER GUARDAR_ACTIVIDAD_ELIMINADOS
AFTER DELETE
ON ACTIVIDAD
FOR EACH ROW
INSERT INTO ACTIVIDADES_BACKUP(
    id_actividad,
    id_usuarioExpositor,
    id_usuarioAdministrador,
    cupos,
    carga_horaria,
    tipo,
    tema,
    fechaActividad,
	accion
)
VALUES(
    OLD.id_actividad,
    OLD.id_usuarioExpositor,
    OLD.id_usuarioAdministrador,
    OLD.cupos,
    OLD.carga_horaria,
    OLD.tipo,
    OLD.tema,
    OLD.fechaActividad,
	"eliminacion"
);


--------------------------------------------------------------


CREATE TRIGGER USUARIOS_ACTUALIZACION
AFTER UPDATE ON USUARIO
FOR EACH ROW
INSERT INTO USUARIOS_BACKUP(
    id_usuario,
    nombre, 
    apPaterno, 
    apMaterno, 
    contrasenia, 
    ci, 
    fechaNac, 
    correoElectronico,
    nombreUsuario,
    tipoUsuario,
    accion
)
VALUES(
    OLD.id_usuario,
    OLD.nombre, 
    OLD.apPaterno, 
    OLD.apMaterno, 
    OLD.contrasenia, 
    OLD.ci, 
    OLD.fechaNac, 
    OLD.correoElectronico,
    OLD.nombreUsuario,
    OLD.tipoUsuario,
	"actualizacion"
);


CREATE TRIGGER ACTIVIDADES_ACTUALIZACION
AFTER UPDATE ON ACTIVIDAD
FOR EACH ROW
INSERT INTO ACTIVIDADES_BACKUP(
    id_actividad,
    id_usuarioExpositor,
    id_usuarioAdministrador,
    cupos,
    carga_horaria,
    tipo,
    tema,
    fechaActividad,
    accion
)
VALUES(
    OLD.id_actividad,
    OLD.id_usuarioExpositor,
    OLD.id_usuarioAdministrador,
    OLD.cupos,
    OLD.carga_horaria,
    OLD.tipo,
    OLD.tema,
    OLD.fechaActividad,
    "actualizacion"
);

-----------------------------

CREATE TRIGGER USUARIOS_INSERCION
AFTER INSERT ON USUARIO
FOR EACH ROW
INSERT INTO USUARIOS_BACKUP(
    id_usuario,
    nombre, 
    apPaterno, 
    apMaterno, 
    contrasenia, 
    ci, 
    fechaNac, 
    correoElectronico,
    nombreUsuario,
    tipoUsuario,
    accion
)
VALUES(
    NEW.id_usuario,
    NEW.nombre, 
    NEW.apPaterno, 
    NEW.apMaterno, 
    NEW.contrasenia, 
    NEW.ci, 
    NEW.fechaNac, 
    NEW.correoElectronico,
    NEW.nombreUsuario,
    NEW.tipoUsuario,
	"insercion"
);


CREATE TRIGGER ACTIVIDADES_INSERCION
AFTER INSERT ON ACTIVIDAD
FOR EACH ROW
INSERT INTO ACTIVIDADES_BACKUP(
    id_actividad,
    id_usuarioExpositor,
    id_usuarioAdministrador,
    cupos,
    carga_horaria,
    tipo,
    tema,
    fechaActividad,
    accion
)
VALUES(
    NEW.id_actividad,
    NEW.id_usuarioExpositor,
    NEW.id_usuarioAdministrador,
    NEW.cupos,
    NEW.carga_horaria,
    NEW.tipo,
    NEW.tema,
    NEW.fechaActividad,
    "insercion"
);


-------------------Correciones para el horario de entrada y salida-------------
ALTER TABLE ASISTENCIA ADD COLUMN horario_entrada integer;
ALTER TABLE ASISTENCIA ADD COLUMN horario_salida integer;




---MODIFICACIONES ULTIMA VEZ --------------------
CREATE TABLE USUARIO(
    id_usuario int not null AUTO_INCREMENT,
    nombre varchar(30),
    apPaterno varchar(30),
    apMaterno varchar(30),
    contrasenia varchar(30),
    ci integer,
    fechaNac date,
    correoElectronico varchar(100),
    nombreUsuario varchar(100),
    tipoUsuario varchar(30),
    primary key(id_usuario)
);


INSERT INTO USUARIO(nombre, apPaterno, apMaterno, contrasenia, ci, fechaNac, correoElectronico, nombreUsuario, tipoUsuario)
VALUES
('Juan', 'Espinoza', 'Alba', '123',500, '1999-02-02', 'espinoza12@gmail.com', 'juan12', 'participante'),
('Maria', 'Cespedes', 'Alcalde', '123',501, '1999-02-02', 'maria12@gmail.com', 'maria12', 'participante'),
('Mario', 'Chavez', 'Bustamante', '123',502, '1999-02-02', 'mario12@gmail.com', 'mario12', 'participante'),
('Diana', 'Contreras', 'Mendoza', '123',503, '1999-02-02', 'diana12@gmail.com', 'diana12', 'participante'),
('Santiago', 'Torrez', 'Rojas', '123',504, '1999-02-02', 'santiago12@gmail.com', 'santiago12', 'participante'),
('Dayan', 'Gutierrez', 'Ortiz', '123',505, '1999-02-02', 'dayan12@gmail.com', 'dayan12', 'participante'),
('Aneth', 'Martinez', 'Garcia', '123',506, '1999-02-02', 'aneth12@gmail.com', 'aneth12', 'participante'),
('Selena', 'Villaroel', 'Gomez', '123',507, '1999-02-02', 'selena12@gmail.com', 'selena12', 'participante'),
('Jaime', 'Cruz', 'Perez', '123',700, '1999-02-02', 'jaime12@gmail.com', 'jaime12', 'control'),
('Wilson', 'Bustamante', 'Ortiz', '123',701, '1999-02-02', 'wilson12@gmail.com', 'wilson12', 'control'),
('Jaime', 'Cruz', 'Perez', '123',800, '1999-02-02', 'jaime13@gmail.com', 'jaime13', 'expositor'),
('Wilson', 'Bustamante', 'Ortiz', '123',801, '1999-02-02', 'wilson13@gmail.com', 'wilson13', 'expositor'),
('Aneth', 'Mendez', 'Alba', '123',802, '1999-02-02', 'aneth13@gmail.com', 'aneth13', 'expositor'),
('Bernard', 'Vasquez', 'Gonzales', '123',900, '1999-02-02', 'bernard13@gmail.com', 'bernard13', 'administrador'),
("Cristhian", "Alave", "Sanjines", 1324, 1241255, "2001-04-12", "sanjchriss12@gmail.com", "chriss12", "administrador")
("Kattya", "Torrez", "Yanique", 1111, 1234545, "2001-04-12", "ktorrezy@fcpn.edu.bo", "kattya12","administrador"),
("Alex", "Roque", "Mendoza", 1234, 1545343, "2001-04-12", "aroquem@fcpn.edu.bo", "alex12","administrador"),
("Gabriel", "Chacon", "Hinojosa", 5425, 6532454, "2001-04-12", "jchaconh@fcpn.edu.bo", "gabo12", "administrador");
