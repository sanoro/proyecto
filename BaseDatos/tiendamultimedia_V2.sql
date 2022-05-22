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
#metodo pago
#DROP TABLE IF EXISTS metodo_pago;
CREATE TABLE IF NOT EXISTS metodo_pago (
	num INT PRIMARY KEY,
    nombre VARCHAR(50),
    detalles VARCHAR(40)
);
DROP TABLE IF EXISTS metodo_pago_user;
CREATE TABLE IF NOT EXISTS metodo_pago_user(
	id_user INT ,
    num INT ,
	FOREIGN KEY(id_user) REFERENCES usuario(id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(num) REFERENCES metodo_pago(num) ON DELETE CASCADE ON UPDATE CASCADE

);


#DROP TABLE IF EXISTS  media;
CREATE TABLE IF NOT EXISTS media (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(500) NOT NULL,
    precio float ,
    img LONGBLOB,
    genero varchar(50),
    fecha_lanzamiento DATE
);

#DROP TABLE IF EXISTS pedido;
CREATE TABLE IF NOT EXISTS pedido(
	id VARCHAR(100) PRIMARY KEY,
    user_id INT NOT NULL,
    fecha DATE NOT NULL,
    num_pago_user int, 
    cantidad int,
	FOREIGN KEY (user_id) REFERENCES usuario(id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (num_pago_user) REFERENCES metodo_pago(num) ON DELETE CASCADE ON UPDATE CASCADE
);
#DROP TABLE IF EXISTS media_pedido;
CREATE TABLE IF NOT EXISTS media_pedido(
	pedido VARCHAR(100),
    articulo INT,
	cantidad int,
    FOREIGN KEY(pedido) REFERENCES pedido(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(articulo) REFERENCES media(id) ON DELETE CASCADE ON UPDATE CASCADE

);

#DROP TABLE IF EXISTS musica;
CREATE TABLE IF NOT EXISTS musica (
	id INT ,
    nombre VARCHAR(100) NOT NULL,
    genero VARCHAR(50)  NOT NULL,
    fecha_lanzamiento DATE NOT NULL,
    autor VARCHAR(50) NOT NULL,
    img LONGBLOB,
    demo LONGBLOB,
    precio FLOAT NOT NULL,
    FOREIGN KEY (id) REFERENCES media(id) ON DELETE CASCADE ON UPDATE CASCADE
);

#DROP TABLE IF EXISTS juegos;
CREATE TABLE IF NOT EXISTS juegos(
  id INT,
  nombre VARCHAR(40) NOT NULL,
  genero VARCHAR(40) NOT NULL,
  fecha_lanzamiento DATE NOT NULL,
  sinopsis varchar(100),
  img LONGBLOB,
  gameplay LONGBLOB,
  precio FLOAT NOT NULL,
  FOREIGN KEY (id) REFERENCES media(id) ON DELETE CASCADE ON UPDATE CASCADE
);


#DROP TABLE IF EXISTS peliculas;
CREATE TABLE IF NOT EXISTS peliculas(
	id INT,
    nombre VARCHAR(100) NOT NULL,
    genero VARCHAR(40) NOT NULL,
    director VARCHAR(40) NOT NULL,
    duracion FLOAT NOT NULL,
    fecha_lanzamiento INT NOT NULL,
    sinopsis varchar(500),
    img LONGBLOB,
    trailer LONGBLOB,
    precio FLOAT NOT NULL,
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