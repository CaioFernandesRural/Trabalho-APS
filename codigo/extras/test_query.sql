-- 1. Um script SQL que busca todos os eventos
SELECT * FROM Evento;

-- 2. Um script SQL que busca todos os eventos de um usuário cadastrador de id 2
SELECT * FROM Evento WHERE id_cadastrador = 2;

-- 3. Um script SQL que busca todos os temas, titulo dos artigos desse tema, nome dos autores dos artigos desse tema e arquivo dos artigos de um evento de id 1
SELECT Tema.titulo, Artigo.titulo AS titulo_artigo, Autor.nome AS nome_autor, Artigo.arquivo
FROM Tema
INNER JOIN TemaEvento ON Tema.id = TemaEvento.id_tema
INNER JOIN Evento ON Evento.id = TemaEvento.id_evento
INNER JOIN Artigo ON Artigo.id_tema = Tema.id
INNER JOIN Autor ON Autor.id = Artigo.id_autor
WHERE Evento.id = 1;

-- 4. Um script SQL que busca todos os dados de um artigo
SELECT * FROM Artigo;

-- 5. Um script SQL que insere dados de um evento, junto com os dados dos seus organizadores
INSERT INTO Evento (nome, area_de_estudo, tipo, id_cadastrador)
VALUES ('Novo Evento', 'Ciência da Computação', 'Congresso', 1);
INSERT INTO OrganizadorEvento (id_ano_evento, id_organizador)
VALUES (LAST_INSERT_ID(), 1), (LAST_INSERT_ID(), 2);

-- 6. Um script SQL que insere dados de um artigo, junto com o título do seu tema e os dados dos seus autores
INSERT INTO Tema (titulo)
VALUES ('Inteligência Artificial');
INSERT INTO Artigo (titulo, id_tema)
VALUES ('Aplicações da IA na Saúde', LAST_INSERT_ID());
INSERT INTO Autor (nome, sexo, instituicao, link_lattes, email)
VALUES ('João Silva', 'masc', 'Universidade X', 'lattes.com/joao', 'joao@email.com');

-- 7. Um script SQL que cadastra um usuário, usando md5 na sua senha
INSERT INTO Usuario (nome, email, senha, tipo_usuario, telefone, instituicao, link_lattes, sexo, cpf, admin)
VALUES ('Novo Usuário', 'novo@email.com', MD5('senha123'), 'comum', '99999999', 'Universidade Y', 'lattes.com/novo', 'masc', '12345678901', 0);


