CREATE DATABASE Alexandria;
USE Alexandria;

CREATE TABLE Usuario(
	id_usuario int auto_increment PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(100) NOT NULL,
    tipo_usuario ENUM('comum', 'adm', 'cad') NOT NULL,
    telefone VARCHAR(50) NOT NULL,
    instituicao VARCHAR(100) NOT NULL,
    link_lattes VARCHAR(100) NOT NULL,
    sexo ENUM('H', 'M') NOT NULL,
    cpf	VARCHAR(20) NOT NULL,
    admin BOOL NOT NULL
);

CREATE TABLE Evento(
	id_evento int auto_increment PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    ano int(4) NOT NULL,
    anos_anteriores VARCHAR(5000), /*vi que não tem como colocar arraylist, só um grande texto*/
    descricao VARCHAR(500) NOT NULL,
    area_de_estudo VARCHAR(100) NOT NULL,
    link_evento VARCHAR (100) NOT NULL,
    autorizado bool NOT NULL,
    id_usuario int,
    
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE CadastradorEvento(
	id_usuario int,
    id_evento int,
    anfitriao bool NOT NULL,
    
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_evento) REFERENCES Evento(id_evento)
);

CREATE TABLE Convite(
	token int auto_increment PRIMARY KEY,
    hora DATETIME NOT NULL,
    aceito bool NOT NULL,
    id_destinatario int,
    id_remetente int,
    id_evento int,
    
    FOREIGN KEY (id_destinatario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_remetente) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_evento) REFERENCES Evento(id_evento)
);

CREATE TABLE Artigo(
	id_artigo int auto_increment PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    subtitulo VARCHAR(100) NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    palavras_chave VARCHAR(5000),
    data_de_publicacao DATETIME NOT NULL,
    arquivo MEDIUMBLOB NOT NULL,
    autores VARCHAR(5000) NOT NULL,
    idioma VARCHAR(100) NOT NULL,
    resumo VARCHAR(1000) NOT NULL,
    num_paginas int NOT NULL,
    num_downloads int NOT NULL,
    edicao int NOT NULL,
    doi VARCHAR(100) NOT NULL,
    id_evento int,
    
    FOREIGN KEY (id_evento) REFERENCES Evento(id_evento)
);

CREATE TABLE Tema(
	id_tema int auto_increment PRIMARY KEY,
    descricao VARCHAR(500) NOT NULL
);

CREATE TABLE TemaEvento(
	id_evento int,
    id_tema int,
    
    FOREIGN KEY (id_evento) REFERENCES Evento(id_evento),
    FOREIGN KEY (id_tema) REFERENCES Tema(id_tema)
);

CREATE TABLE Autor(
	id_autor int auto_increment PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sexo ENUM('H', 'M') NOT NULL,
    instituicao VARCHAR(100) NOT NULL,
    link_lattes VARCHAR(100),
    email VARCHAR(100) NOT NULL
);

CREATE TABLE AutorArtigo(
	id_autor int,
    id_artigo int,
    
    FOREIGN KEY (id_autor) REFERENCES Autor(id_autor),
    FOREIGN KEY (id_artigo) REFERENCES Artigo(id_artigo)
);

CREATE TABLE Organizador(
	id_organizador int auto_increment PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sexo ENUM('H', 'M') NOT NULL,
    instituicao VARCHAR(100) NOT NULL,
    link_lattes VARCHAR(100),
    email VARCHAR(100) NOT NULL
);

CREATE TABLE OrganizadorEvento(
	id_organizador int,
    id_evento int,
    
    FOREIGN KEY (id_evento) REFERENCES Evento(id_evento),
    FOREIGN KEY (id_organizador) REFERENCES Organizador(id_organizador)
);