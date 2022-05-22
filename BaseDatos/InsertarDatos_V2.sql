USE tiendamultimedia;
 #Insert media
 INSERT INTO media(nombre,precio,fecha_lanzamiento,img,genero,tipo) VALUES
 ("Likes y cicatrizes",14.99,('2021-01-05'),LOAD_FILE('D:/Serpis/Proyecto/img/Melendi.jpg'),"POP","Musica"),
 ("KINGDOM HEARTS III",29.95,('2019-01-25'),LOAD_FILE('D:/Serpis/Proyecto/img/kingdormV2.jpg'),"ARPG","Juegos"),
 ("El corredor del laberinto",19.89,('2014-09-19'),LOAD_FILE('D:/Serpis/Proyecto/img/corredorlaberinto.jpg'),"Ciencia ficción/Suspenso/Acción","Pelicula"),
("Back in Black",16.99,('1980-07-25'),LOAD_FILE('D:/Serpis/Proyecto/img/Acdc.jpg'),"HARD-ROCK","Musica"),
("Hollow Knight",29.95,('2017-02-24'),LOAD_FILE('D:/Serpis/Proyecto/img/hollow.jpg'),"METROIFVANIA","Juegos"),
("Forrest Gump",14.89,('1994-09-23'),LOAD_FILE('D:/Serpis/Proyecto/img/forrest.jpg'),"Comedia/Drama","Pelicula"),
("Mercury- Act 1",16.99,('2021-09-03'),LOAD_FILE('D:/Serpis/Proyecto/img/ImagineDragons.jpg'),"POP-ROCK","Musica"),
("Elden Ring",16.99,('2022-02-25'),LOAD_FILE('D:/Serpis/Proyecto/img/elden.jpg'),"ROL-ACCION","Juegos"),
("Escape Room: Tournament of Champions",16.99,('2021-08-13'),LOAD_FILE('D:/Serpis/Proyecto/img/escape.jpg'),"Terror/Suspenso","Pelicula"),
("a study of the human experience volume one",8.52,('2022-03-18'),LOAD_FILE('D:/Serpis/Proyecto/img/Abcdefu.jpg'),"POP","Musica"),
("Resident Evil Village",39.99,('2021-05-03'),LOAD_FILE('D:/Serpis/Proyecto/img/resident (1).png'),"Acción-aventura/Disparos en primera persona/Videojuego de terror","Juegos"),
("Animales fantásticos: los secretos de Dumbledore",19.99,('2022-04-08'),LOAD_FILE('D:/Serpis/Proyecto/img/animales.jpg'),"Fantastico/Aventuras","Pelicula");
 



#Insert música
#No se ven las imagenes que estan dentro de carpetas esto pasa puesto que en el myini de mysql estaba limitado los paquetes
INSERT INTO musica(id,nombre,genero,fecha_lanzamiento,autor,img,precio,demo,cancion) VALUES 
(1,"Likes y cicatrizes","POP",('2021-01-05'),"Melendi",LOAD_FILE('D:/Serpis/Proyecto/img/Melendi.jpg'),14.99,LOAD_FILE('D:/Serpis/Proyecto/img/likes-y-cicatrices_cortado.mp3'),LOAD_FILE('D:/Serpis/Proyecto/img/Likes y Cicatrices.mp3')),
(7,"Mercury- Act 1", "POP-ROCK",('2021-09-03'),"Imagine Dragons",LOAD_FILE('D:/Serpis/Proyecto/img/ImagineDragons.jpg'),16.99,LOAD_FILE('D:/Serpis/Proyecto/img/my-life_cortado.mp3'),LOAD_FILE('D:/Serpis/Proyecto/img/My Life.mp3')),
(4,"Back in Black","HARD-ROCK",('1980-07-25'),"AC/DC",LOAD_FILE('D:/Serpis/Proyecto/img/Acdc.jpg'),16.99,LOAD_FILE('D:/Serpis/Proyecto/img/acdc_cortado.mp3'),LOAD_FILE('D:/Serpis/Proyecto/img/acdc.mp3')),
(10,"a study of the human experience volume one","POP",('2022-03-18'),"Gayle",LOAD_FILE('D:/Serpis/Proyecto/img/Abcdefu.jpg'),8.52,LOAD_FILE('D:/Serpis/Proyecto/img/luv_cortado.mp3'),LOAD_FILE('D:/Serpis/Proyecto/img/luv.mp3'));



#Insert juegos
INSERT INTO juegos(id,nombre,genero,fecha_lanzamiento,sinopsis,img,precio,gameplay)	VALUES
(2,"KINGDOM HEARTS III","ARPG",('2019-01-25'),'Ambientado en una serie de mundos de Disney y Pixar, KINGDOM HEARTS narra el viaje de Sora, un joven que descubre inesperadamente que posee un poder espectacular. Con la ayuda de Donald y Goofy, Sora lucha para evitar que una fuerza maligna conocida como los sincorazón invada todo el universo',LOAD_FILE('D:/Serpis/Proyecto/img/kingdormV2.jpg'),29.95,'https://www.youtube.com/embed/FKai4CjoxjM'),
(5,"Hollow Knight","METROIFVANIA",('2017-02-24'),'Inicialmente, el protagonista (o Caballero) llega a la ciudad de Dirtmouth (Bocasucia en español), una pequeña ciudad situada sobre las ruinas de Hallownest, con la intención de aventurarse para descubrir lo que le espera allí. A medida que avanza por el reino olvidado, se encuentra con los restos reanimados de los antiguos residentes de Hallownest y otras criaturas, siendo transformados lentamente por una misteriosa fuerza.',LOAD_FILE('D:/Serpis/Proyecto/img/hollow.jpg'),29.95,'https://www.youtube.com/embed/UAO2urG23S4'),
(8,"Elden Ring","ROL-ACCION",('2022-02-25'),'La historia de Elden Ring es la del Sinluz, un exiliado que regresa a un marchito y enorme reino conocido como las Tierras Intermedias. Su propósito: reclamar el poder del Círculo de Elden. Una gesta que lo enfrentará a criaturas de pesadilla y un cruel destino.',LOAD_FILE('D:/Serpis/Proyecto/img/elden.jpg'),59.99,'https://www.youtube.com/embed/CptaXqVY6-E'),
(11,"Resident Evil Village","Acción-aventura/Disparos en primera persona/Videojuego de terror",('2021-05-03'),'La historia se desarrolla en una región montañosa aislada alrededor de un pueblo y un castillo medieval en Europa del Este. Ethan y Mia Winters siguieron juntos después de los eventos de Resident Evil 7: Biohazard e intentaron seguir con sus vidas tres años después del incidente en Dulvey. Durante los eventos del juego, la hija de los Winters, Rosemary, es secuestrada por unos individuos, lo que obliga a Ethan a viajar al pueblo, un lugar donde ocurren extraños sucesos por la región con la aparición de extrañas criaturas y el control del castillo por la familia Dimitrescu quienes tienen extrañas habilidades, viéndose también las caras con un viejo amigo del incidente de Dulvey, Chris Redfield.',LOAD_FILE('D:/Serpis/Proyecto/img/resident (1).png'),39.99,'https://www.youtube.com/embed/ztj8fv6Ttp8');

#Insert peliculas
INSERT INTO peliculas(id,nombre,genero,director,duracion,fecha_lanzamiento,sinopsis,img,trailer,precio,pelicula) VALUES
(3,"El corredor del laberinto","Ciencia ficción/Suspenso/Acción","Wes Ball",113,('2014'),'Sigue la historia de Thomas, un adolescente cuya memoria fue borrada y que ha sido encerrado junto a otros chicos de su edad en un laberinto plagado de monstruos y misterios.',LOAD_FILE('D:/Serpis/Proyecto/img/corredorlaberinto.jpg'),'https://www.youtube.com/embed/RxNV8uAacjU',19.89,LOAD_FILE('D:/Serpis/Proyecto/img/pelicula.mp4')),
(6,"Forrest Gump","Comedia/Drama","Robert Zemeckis",142,('1994'),'Es un chico que sufre un cierto retraso mental. A pesar de todo, gracias a su tenacidad y a su buen corazón será protagonista de acontecimientos cruciales de su país. Jenny, su gran amor desde la infancia, será la persona más importante de su vida.',LOAD_FILE('D:/Serpis/Proyecto/img/forrest.jpg'),'https://www.youtube.com/embed/Cyh1LpxnaxI',14.89,LOAD_FILE('D:/Serpis/Proyecto/img/pelicula.mp4')),
(9,"Escape Room: Tournament of Champions","Terror/Suspenso","Adam Robitel",88,('2021'),'Seis personas se encuentran encerradas de manera inesperada en una nueva serie de escape rooms, revelando paulatinamente aquello que tienen en común para sobrevivir… y descubriendo que todos ya habían jugado el juego con anterioridad',LOAD_FILE('D:/Serpis/Proyecto/img/escape.jpg'),'https://www.youtube.com/embed/PbC2P8thJDg',16.99,LOAD_FILE('D:/Serpis/Proyecto/img/pelicula.mp4')),
(12,"Animales fantásticos: los secretos de Dumbledore", "Fantastico/Aventuras","David Yates",142,('2022'),'El profesor Albus Dumbledore sabe que el poderoso mago oscuro Gellert Grindelwald (Mads Mikkelsen) está haciendo planes para apoderarse del mundo mágico. Incapaz de detenerlo él solo, confía en el Magizoólogo Newt Scamander para dirigir un intrépido equipo de magos, brujas y un valiente panadero Muggle en una misión peligrosa, donde se encuentran con antiguos y nuevos animales y se enfrentan a una legión cada vez más numerosa de seguidores de Grindelwald. Hay mucho en juego así que nos preguntamos hasta cuándo podrá permanecer Dumbledore al margen.',LOAD_FILE('D:/Serpis/Proyecto/img/animales.jpg'),'https://www.youtube.com/embed/oImEeiCiYTk',19.99,LOAD_FILE('D:/Serpis/Proyecto/img/pelicula.mp4'));
