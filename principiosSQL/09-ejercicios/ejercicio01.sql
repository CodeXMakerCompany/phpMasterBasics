
/* 
1. Diseñar y crear la base de datos de una red social.
 */

CREATE DATABASE IF NOT EXISTS redSocial;
USE redSocial;

CREATE TABLE profile(
id       int(10) auto_increment not null,
nombre   varchar(100) not null,
apellidos    varchar(50),
correo   varchar(25) not null,
contraseña  varchar(20) not null,
alias  varchar(20) not null,
foto  varchar(20) not null,
CONSTRAINT pk_profile PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE post(
id       int(10) auto_increment not null,
titulo   varchar(100) not null,
titular   varchar(100),
descripcion   varchar(100) not null,
foto   varchar(100) not null,
link   varchar(100) not null,
CONSTRAINT pk_post PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE categoria(
id       int(10) auto_increment not null,
nombre   varchar(100) not null,
CONSTRAINT pk_categoria PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE mail_boxes(
id       int(10) auto_increment not null,
id_profile   int(100) not null,
mensaje   varchar(100),
data_recibida   varchar(100) not null,
direccion_email   varchar(100) not null,
asunto   varchar(100) not null,
detalles   varchar(100) not null,
CONSTRAINT pk_mail_boxes PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE mensajes_enviados(
id       int(10) auto_increment not null,
id_profile   int(100) not null,
data_enviada   varchar(100),
to_email_address   varchar(100) not null,
asunto   varchar(100) not null,
mensaje   varchar(100) not null,
detalles   varchar(100) not null,
CONSTRAINT pk_mensajes_enviados PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE notificaciones(
id       int(10) auto_increment not null,
id_profile   int(100) not null,
data_recibida   varchar(100) not null,
asunto   varchar(100) not null,
mensaje   varchar(100) not null,
detalles   varchar(100) not null,
CONSTRAINT pk_notificaciones PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE comentario(
id       int(10) auto_increment not null,
id_profile   int(100) not null,
comentario   varchar(100) not null,
hora  timestamp(100) not null,
ip   int(100) not null,
CONSTRAINT pk_comentario PRIMARY KEY(id)
)ENGINE=InnoDB;


#RELLENAR LA BASE DE DATOS CON INFORMACIÓN - INSERTS#

#USUARIOS
INSERT INTO profile VALUES(NULL, 'samuel', 'vazquez ruiz', 'codexmaker12@gmail.com', '12345', 'codexmaker', 'foto/');

#post
INSERT INTO post VALUES(NULL, 1, 1, "miSegundoPost", "titular de mi segundo post", "lorem ipsum", "foto/", "link:xxx-x.com", "2019-05-23 13:02:55");
#categoria
INSERT INTO categoria VALUES(NULL, "tecnologia");

#mail_boxes
INSERT INTO mail_boxes VALUES(NULL, 1, 'Este es un mensaje de prueba', 'lorem ipsum', 'stardie10@hotmail.com', "test", "sinDetalles");

#mensajes_enviados
INSERT INTO mensajes_enviados VALUES(NULL, 1, 'Este es un mensaje de prueba', 'lorem ipsum', 'stardie10@hotmail.com', "test", "sinDetalles");

#notificaciones
INSERT INTO notificaciones VALUES(NULL, 1, "se actualizo la bd", "Base de datos", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat accusamus, beatae perferendis, molestiae facilis odit fugit voluptatem voluptatibus ipsum sunt molestias quibusdam modi a, tempora voluptatum eos doloremque ad dolorem.", "sin detalles");

#comentario
INSERT INTO comentario VALUES(NULL, 1, "este es mi primer comentario", TIMESTAMP(), "192.168.102");

