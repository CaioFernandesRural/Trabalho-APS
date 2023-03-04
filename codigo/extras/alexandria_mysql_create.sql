CREATE DATABASE Alexandria;
USE Alexandria;
CREATE USER 'user_alexandria'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON Alexandria . * TO 'user_alexandria'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE `Usuario` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`senha` varchar(255) NOT NULL,
	`tipo_usuario` enum('comum', 'cad', 'adm') NOT NULL,
	`telefone` varchar(255) NOT NULL,
	`instituicao` varchar(255) NOT NULL,
	`link_lattes` varchar(255) NOT NULL,
	`sexo` enum('masc', 'fem', 'outro') NOT NULL,
	`cpf` varchar(255) NOT NULL UNIQUE,
	`admin` bool NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Evento` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
    `tipo`  enum(
		'Congresso', 'Encontro', 'Seminário', 'Mesa-redonda',
        'Simpósio', 'Painel', 'Fórum', 'Conferência', 'Jornada',
        'Cursos', 'Colóquio', 'Semana', 'Workshop'),
	`area_de_estudo` varchar(255) NOT NULL,
	`tipo`: enum('Congresso', 'Encontro', 'Seminário', 'Mesa-redonda', 'Simpósio', 'Painel',
	'Fórum', 'Conferência', 'Jornada', 'Cursos', 'Colóquio', 'Semana', 'Workshop'),
	`id_cadastrador` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `AnoEvento` (
	`id` int NOT NULL AUTO_INCREMENT,
	`ano` int NOT NULL,
	`descricao` varchar(255) NOT NULL,
	`link_evento` varchar(255) NOT NULL,
	`autorizado` bool NOT NULL,
	`id_evento` bigint NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Organizador` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`sexo` enum('masc', 'fem', 'outro') NOT NULL,
	`instituicao` varchar(255) NOT NULL,
	`link_lattes` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Autor` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`sexo` enum('masc', 'fem', 'outro') NOT NULL,
	`instituicao` varchar(255) NOT NULL,
	`link_lattes` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `OrganizadorEvento` (
	`id_ano_evento` int NOT NULL,
	`id_organizador` int NOT NULL,
	PRIMARY KEY (`id_ano_evento`,`id_organizador`)
);

CREATE TABLE `Tema` (
	`id` int NOT NULL AUTO_INCREMENT,
	`titulo` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TemaEvento` (
	`id_tema` int NOT NULL,
	`id_evento` int NOT NULL,
	PRIMARY KEY (`id_tema`,`id_evento`)
);

CREATE TABLE `Artigo` (
	`id` int NOT NULL AUTO_INCREMENT,
	`titulo` varchar(255) NOT NULL,
	`subtitulo` varchar(255) NOT NULL,
	`data_de_publicacao` DATETIME NOT NULL,
	`idioma` varchar(255) NOT NULL,
	`resumo` varchar(255) NOT NULL,
	`num_paginas` int NOT NULL,
	`num_downloads` int NOT NULL,
	`doi` varchar(255) NOT NULL,
	`arquivo` blob NOT NULL,
	`id_tema` int NOT NULL,
	`id_evento` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `AutorArtigo` (
	`id_autor` int NOT NULL,
	`id_artigo` int NOT NULL,
	PRIMARY KEY (`id_autor`,`id_artigo`)
);

CREATE TABLE `PalavrasChave` (
	`id_artigo` int NOT NULL,
	`palavra` varchar(255) NOT NULL
);

ALTER TABLE `Evento` ADD CONSTRAINT `Evento_fk0` FOREIGN KEY (`id_cadastrador`) REFERENCES `Usuario`(`id`);

ALTER TABLE `AnoEvento` ADD CONSTRAINT `AnoEvento_fk0` FOREIGN KEY (`id_evento`) REFERENCES `Evento`(`id`);

ALTER TABLE `OrganizadorEvento` ADD CONSTRAINT `OrganizadorEvento_fk0` FOREIGN KEY (`id_ano_evento`) REFERENCES `AnoEvento`(`id`);

ALTER TABLE `OrganizadorEvento` ADD CONSTRAINT `OrganizadorEvento_fk1` FOREIGN KEY (`id_organizador`) REFERENCES `Organizador`(`id`);

ALTER TABLE `TemaEvento` ADD CONSTRAINT `TemaEvento_fk0` FOREIGN KEY (`id_tema`) REFERENCES `Tema`(`id`);

ALTER TABLE `TemaEvento` ADD CONSTRAINT `TemaEvento_fk1` FOREIGN KEY (`id_evento`) REFERENCES `AnoEvento`(`id`);

ALTER TABLE `Artigo` ADD CONSTRAINT `Artigo_fk0` FOREIGN KEY (`id_tema`) REFERENCES `TemaEvento`(`id_tema`);

ALTER TABLE `Artigo` ADD CONSTRAINT `Artigo_fk1` FOREIGN KEY (`id_evento`) REFERENCES `TemaEvento`(`id_evento`);

ALTER TABLE `AutorArtigo` ADD CONSTRAINT `AutorArtigo_fk0` FOREIGN KEY (`id_autor`) REFERENCES `Autor`(`id`);

ALTER TABLE `AutorArtigo` ADD CONSTRAINT `AutorArtigo_fk1` FOREIGN KEY (`id_artigo`) REFERENCES `Artigo`(`id`);

ALTER TABLE `PalavrasChave` ADD CONSTRAINT `PalavrasChave_fk0` FOREIGN KEY (`id_artigo`) REFERENCES `Artigo`(`id`);












