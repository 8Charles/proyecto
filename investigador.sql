DROP DATABASE IF EXISTS intranet;

CREATE DATABASE intranet;

USE intranet;

CREATE TABLE usuarios(
   usuario varchar(45) PRIMARY KEY,
   clave varchar(45) NOT NULL
   );

CREATE TABLE datosPersonales(
   usuario varchar(45) PRIMARY KEY,
   nombre varchar(65),
   email varchar (45),
   password varchar(45),
   FOREIGN KEY (usuario) REFERENCES usuarios(usuario)
   );

 CREATE TABLE categorias(
   ID_Categoria int AUTO_INCREMENT PRIMARY KEY,
   catagoria varchar(45) NOT NULL

 );

 CREATE TABLE permisos(
   usuario varchar(45),
   ID_Categoria int,
   PRIMARY KEY (usuario, ID_categoria),
   FOREIGN KEY (usuario) REFERENCES usuarios(usuario),
   FOREIGN KEY (ID_Categoria) REFERENCES categorias(ID_Categoria)
 );

INSERT categorias VALUES
(NULL, 'Jefatura'),
(NULL, 'Subjefatura'),
(NULL, 'Investigdores');

INSERT usuarios VALUES
('Usuario1', '123456');