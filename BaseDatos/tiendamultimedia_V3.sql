DROP DATABASE IF EXISTS tiendamultimedia;
CREATE DATABASE IF NOT EXISTS tiendamultimedia;
USE tiendamultimedia;

#DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(40) NOT NULL,
    apellido VARCHAR(40) NOt NULL,
    username VARCHAR(40) NOT NULL,
    pass VARCHAR(60) NOT NULL,
    email VARCHAR(70) NOT NULL,
    telefono INT NOT NULL
);
CREATE TABLE IF NOT EXISTS direcciones(
	id_direccion int primary key auto_increment,
	id_user int,
    calle varchar(200),
    num int,
    puerta int,
    localidad varchar(200),
    provincia varchar(200),
    cp int,
	FOREIGN KEY(id_user) REFERENCES usuario(id) ON DELETE CASCADE ON UPDATE CASCADE
);

#metodo pago
#DROP TABLE IF EXISTS metodo_pago;
CREATE TABLE IF NOT EXISTS metodo_pago (
	id INT primary key auto_increment,
	num INT ,
    nombre VARCHAR(400) NOT NULL,
    detalles VARCHAR(200) NOT NULL,
    fechacaducidad int,
    cvv int
);
DROP TABLE IF EXISTS metodo_pago_user;
CREATE TABLE IF NOT EXISTS metodo_pago_user(
	id_user INT ,
    id_metodo INT ,
    num int,
    nombre VARCHAR(400) NOT NULL,
    detalles VARCHAR(200) NOT NULL,
    fechacaducidad int,
    cvv int,
	FOREIGN KEY(id_user) REFERENCES usuario(id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(id_metodo) REFERENCES metodo_pago(id) ON DELETE CASCADE ON UPDATE CASCADE

);

#DROP TABLE IF EXISTS  media;
CREATE TABLE IF NOT EXISTS media (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(500) NOT NULL,
    precio float ,
    img LONGBLOB,
    tipo VARCHAR(50),
    genero varchar(50),
    fecha_lanzamiento DATE,
    cantidad int
);

#DROP TABLE IF EXISTS pedido;
CREATE TABLE IF NOT EXISTS pedido(
	id int PRIMARY KEY auto_increment,
    userid INT NOT NULL,
    fecha DATE NOT NULL,
    num_pago_user INT, 
    cantidad int,
    total int,
    direccion varchar(200),
	FOREIGN KEY (userid) REFERENCES usuario(id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (num_pago_user) REFERENCES metodo_pago_user(id_metodo) ON DELETE CASCADE ON UPDATE CASCADE

);

#DROP TABLE IF EXISTS media_pedido;
CREATE TABLE IF NOT EXISTS media_pedido(
	id_lista INT PRIMARY KEY AUTO_INCREMENT,
	id INT  ,
    id_usuario int,
    id_pedido int,
	nombre VARCHAR(500) NOT NULL,
    precio float ,
	img LONGBLOB,
    cantidad int ,
    total float,
    FOREIGN KEY(id) REFERENCES media(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(id_usuario) REFERENCES usuario(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(id_pedido) REFERENCES pedido(id) ON DELETE CASCADE ON UPDATE CASCADE

    

);

#DROP TABLE IF EXISTS musica;
CREATE TABLE IF NOT EXISTS musica (
	id_musica INT primary key auto_increment,
    id int,
    nombre VARCHAR(100) NOT NULL,
    genero VARCHAR(50)  NOT NULL,
    fecha_lanzamiento DATE NOT NULL,
    autor VARCHAR(50) NOT NULL,
    img LONGBLOB,
    demo LONGBLOB,
    precio FLOAT NOT NULL,
    cancion LONGBLOB,
    FOREIGN KEY (id) REFERENCES media(id) ON DELETE CASCADE ON UPDATE CASCADE
);

#DROP TABLE IF EXISTS juegos;
CREATE TABLE IF NOT EXISTS juegos(
  id_juegos INT primary key auto_increment,
  id int,
  nombre VARCHAR(40) NOT NULL,
  genero VARCHAR(40) NOT NULL,
  fecha_lanzamiento DATE NOT NULL,
  sinopsis varchar(1000),
  img LONGBLOB,
  gameplay VARCHAR(200),
  precio FLOAT NOT NULL,
  codigo int,
  FOREIGN KEY (id) REFERENCES media(id) ON DELETE CASCADE ON UPDATE CASCADE
);


#DROP TABLE IF EXISTS peliculas;
CREATE TABLE IF NOT EXISTS peliculas(
	id_peliculas INT primary key auto_increment,
    id int,
    nombre VARCHAR(100) NOT NULL,
    genero VARCHAR(40) NOT NULL,
    director VARCHAR(40) NOT NULL,
    duracion FLOAT NOT NULL,
    fecha_lanzamiento INT NOT NULL,
    sinopsis varchar(700),
    img LONGBLOB,
    trailer VARCHAR(200),
    precio FLOAT NOT NULL,
    pelicula LONGBLOB,
	FOREIGN KEY (id) REFERENCES media(id) ON DELETE CASCADE ON UPDATE CASCADE
    );




#Stock 
#DROP TABLE IF EXISTS stock_articulo;
#CREATE TABLE IF NOT EXISTS stock_articulo(
#	id INT NOT NULL,
#	disponible INT DEFAULT NULL,
#	entrega set('Descatalogado','Próximamente','24 horas','3/4 días','1/2 semanas') DEFAULT 'Descatalogado',
#	FOREIGN KEY (id) REFERENCES musica(id) ON DELETE CASCADE ON UPDATE CASCADE
#);