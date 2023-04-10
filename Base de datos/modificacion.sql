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
ALTER TABLE ASISTENCIA ADD COLUMN horario_entrada boolean;
ALTER TABLE ASISTENCIA ADD COLUMN horario_salida boolean;
