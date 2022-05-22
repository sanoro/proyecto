USE tiendamultimedia;
 #Insert media
 INSERT INTO media(nombre,precio,fecha_lanzamiento,img,genero) VALUES
 ("Likes y cicatrizes",14.99,('2021-01-05'),LOAD_FILE('D:/Serpis/Proyecto/img/Melendi.jpg'),"POP"),
 ("KINGDOM HEARTS III",29.95,('2019-01-25'),LOAD_FILE('D:/Serpis/Proyecto/img/kingdorm.jpg'),"ARPG"),
 ("El corredor del laberinto",19.89,('2014-09-19'),LOAD_FILE('D:/Serpis/Proyecto/img/corredorlaberinto.jpg'),"Ciencia ficción/Suspenso/Acción"),
("Back in Black",16.99,('1980-07-25'),LOAD_FILE('D:/Serpis/Proyecto/img/Acdc.jpg'),"HARD-ROCK");
 



#Insert música
#No se ven las imagenes que estan dentro de carpetas esto pasa puesto que en el myini de mysql estaba limitado los paquetes
INSERT INTO musica(id,nombre,genero,fecha_lanzamiento,autor,img,precio) VALUES 
(1,"Likes y cicatrizes", "POP",('2021-01-05'),"Melendi",LOAD_FILE('D:/Serpis/Proyecto/img/Melendi.jpg'),14.99),
(2,"Mercury- Act 1", "POP-ROCK",('2021-09-03'),"Imagine Dragons",LOAD_FILE('D:/Serpis/Proyecto/img/ImagineDragons.jpg'),16.99),
(3,"Back in Black","HARD-ROCK",('1980-07-25'),"AC/DC",LOAD_FILE('D:/Serpis/Proyecto/img/Acdc.jpg'),16.99),
(4,"a study of the human experience volume one","POP",('2022-03-18'),"Gayle",LOAD_FILE('D:/Serpis/Proyecto/img/Abcdefu.jpg'),8.52);



#Insert juegos
INSERT INTO juegos(id,nombre,genero,fecha_lanzamiento,sinopsis,img,precio,gameplay)	VALUES
(1,"KINGDOM HEARTS III","ARPG",('2019-01-25'),NULL,LOAD_FILE('D:/Serpis/Proyecto/img/kingdorm.jpg'),29.95,LOAD_FILE('D:/Serpis/Proyecto/img/kingdom.mp4')),
(2,"Hollow Knight","METROIFVANIA",('2017-02-24'),NULL,LOAD_FILE('D:/Serpis/Proyecto/img/hollow.jpg'),29.95,LOAD_FILE('D:/Serpis/Proyecto/img/Hollow.mp4')),
(3,"Elden Ring","ROL-ACCION",('2022-02-25'),NULL,LOAD_FILE('D:/Serpis/Proyecto/img/elden.jpg'),59.99,LOAD_FILE('D:/Serpis/Proyecto/img/elden.mp4')),
(4,"Resident Evil Village","Acción-aventura/Disparos en primera persona/Videojuego de terror",('2021-05-03'),NULL,LOAD_FILE('D:/Serpis/Proyecto/img/resident.png'),39.99,LOAD_FILE('D:/Serpis/Proyecto/img/resident.mp4'));

#Insert peliculas
INSERT INTO peliculas(id,nombre,genero,director,duracion,fecha_lanzamiento,sinopsis,img,trailer,precio) VALUES
(1,"El corredor del laberinto","Ciencia ficción/Suspenso/Acción","Wes Ball",113,('2014'),'Sigue la historia de Thomas, un adolescente cuya memoria fue borrada y que ha sido encerrado junto a otros chicos de su edad en un laberinto plagado de monstruos y misterios.',LOAD_FILE('D:/Serpis/Proyecto/img/corredorlaberinto.jpg'),LOAD_FILE('D:/Serpis/Proyecto/img/Laberinto.mp4'),19.89),
(2,"Forrest Gump","Comedia/Drama","Robert Zemeckis",142,('1994'),'es un chico que sufre un cierto retraso mental. A pesar de todo, gracias a su tenacidad y a su buen corazón será protagonista de acontecimientos cruciales de su país. Jenny, su gran amor desde la infancia, será la persona más importante de su vida.',LOAD_FILE('D:/Serpis/Proyecto/img/forrest.jpg'),LOAD_FILE('D:/Serpis/Proyecto/img/Forrest.mp4'),14.89),
(3,"Escape Room: Tournament of Champions","Terror/Suspenso","Adam Robitel",88,('2021-07-16'),'seis personas se encuentran encerradas de manera inesperada en una nueva serie de escape rooms, revelando paulatinamente aquello que tienen en común para sobrevivir… y descubriendo que todos ya habían jugado el juego con anterioridad',LOAD_FILE('D:/Serpis/Proyecto/img/escape.jpg'),LOAD_FILE('D:/Serpis/Proyecto/img/escape.mp4'),16.99),
(4,"Animales fantásticos: los secretos de Dumbledore", "Fantastico/Aventuras","David Yates",142,('2022'),'El profesor Albus Dumbledore (Jude Law) sabe que el poderoso mago oscuro Gellert Grindelwald (Mads Mikkelsen) está haciendo planes para apoderarse del mundo mágico. Incapaz de detenerlo él solo, confía en el Magizoólogo Newt Scamander para dirigir un intrépido equipo de magos, brujas y un valiente panadero Muggle en una misión peligrosa, donde se encuentran con antiguos y nuevos animales y se enfrentan a una legión cada vez más numerosa de seguidores de Grindelwald. Hay mucho en juego así que nos preguntamos hasta cuándo podrá permanecer Dumbledore al margen.',LOAD_FILE('D:/Serpis/Proyecto/img/animales.jpg'),LOAD_FILE('D:/Serpis/Proyecto/img/animales.mp4'),19.99);
