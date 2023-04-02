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


