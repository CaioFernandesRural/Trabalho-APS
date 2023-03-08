-- Inserindo entradas na tabela Usuario 
INSERT INTO Usuario (nome, email, senha, tipo_usuario, telefone, instituicao, link_lattes, sexo, cpf, admin)
VALUES
("João Silva", "joaosilva@email.com", "q2w3e4r5t6y7u8i", "comum", "11999999999", "Universidade X", "http://lattes.com/joaosilva", "masc", "12345678910", 0),
("Maria Luíza", "marialuiza@email.com", "a2s3d4f5g6h7j8k9", "adm", "11988888888", "Universidade Y", "http://lattes.com/marialuiza", "fem", "109876543210", 0),
("Lucas Oliveira", "lucasoliveira@email.com", "1z2x3c4v5b67n8m9", "comum", "11977777777", "Universidade Z", "http://lattes.com/lucasoliveira", "masc", "321098765410", 0),
("Ana Paula", "anapaula@email.com", "o9i8u7y6t5r4e32w", "comum", "11966666666", "Universidade A", "http://lattes.com/anapaula", "fem", "654321098710", 0),
("Ricardo Fernandes", "ricardofernandes@email.com", "0l9k8j7h6g5f4d3s2a", "cad", "11955555555", "Universidade B", "http://lattes.com/ricardofernandes", "masc", "987654321510", 0),
("Juliana Sousa", "julianasousa@email.com", "m09n8b76v5c432", "comum", "11944444444", "Universidade C", "http://lattes.com/julianasousa", "fem", "321054321690", 0),
("Pedro Henrique", "pedrohenrique@email.com", "12qwasz34erdfcv6", "comum", "11933333333", "Universidade D", "http://lattes.com/pedrohenrique", "masc", "654321098960", 0),
("Isabela Souza", "isabelasouza@email.com", "0p9oilkjmh8uhgby", "cad", "11922222222", "Universidade E", "http://lattes.com/isabelasouza", "fem", "987654321250", 0),
("Carlos Eduardo", "carloseduardo@email.com", "m9n87b6v5c4edrftgy", "comum", "11911111111", "Universidade F", "http://lattes.com/carloseduardo", "masc", "321567891320", 0),
("Sofia Almeida", "sofiaalmeida@email.com", "a2s3d4f5g6h7j898u7", "comum", "11900000000", "Universidade G", "http://lattes.com/sofiaalmeida", "fem", "147.258.369-70", 0);

INSERT INTO Evento (nome, area_de_estudo, tipo, id_cadastrador, descricao, link_evento, autorizado)
VALUES ('Congresso de Arquitetura', 'Arquitetura', 'Congresso', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Encontro de Literatura', 'Literatura', 'Encontro', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Seminário de Engenharia', 'Engenharia', 'Seminário', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Mesa-redonda de Artes', 'Artes', 'Mesa-redonda', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Simpósio de História', 'História', 'Simpósio', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Painel de Ciência da Computação', 'Ciência da Computação', 'Painel', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Fórum de Educação', 'Educação', 'Fórum', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Conferência de Ecologia', 'Ecologia', 'Conferência', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Jornada de Medicina', 'Medicina', 'Jornada', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1),
('Curso de Filosofia', 'Filosofia', 'Cursos', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet id nibh quis aliquam. Nunc viverra massa turpis, id aliquet nisl posuere at. In suscipit ornare lacus, vel condimentum nisl lacinia ac. Donec ac lobortis purus.', 'http://pudim.com.br/', 1);

INSERT INTO Organizador (nome, sexo, instituicao, link_lattes, email)
VALUES
('João da Silva', 'masc', 'UFRRJ - Universidade Federal Rural do Rio de Janeiro', 'www.lattes.com/joao', 'joao@email.com'),
('Maria Oliveira', 'fem', 'UFRJ - Universidade Federal do Rio de Janeiro', 'www.lattes.com/maria', 'maria@email.com'),
('Pedro Henrique', 'masc', 'UFRRJ - Universidade Federal Rural do Rio de Janeiro', 'www.lattes.com/pedro', 'pedro@email.com'),
('Ana Luiza', 'fem', 'UFRJ - Universidade Federal do Rio de Janeiro', 'www.lattes.com/ana', 'ana@email.com'),
('Lucas Souza', 'masc', 'USP - Universidade de São Paulo', 'www.lattes.com/lucas', 'lucas@email.com'),
('Larissa Santos', 'fem', 'UFRRJ - Universidade Federal Rural do Rio de Janeiro', 'www.lattes.com/larissa', 'larissa@email.com'),
('Guilherme Silva', 'masc', 'UFRJ - Universidade Federal do Rio de Janeiro', 'www.lattes.com/guilherme', 'guilherme@email.com'),
('Isabela Oliveira', 'fem', 'UFRRJ - Universidade Federal Rural do Rio de Janeiro', 'www.lattes.com/isabela', 'isabela@email.com'),
('Rafael Costa', 'masc', 'UFRRJ - Universidade Federal Rural do Rio de Janeiro', 'www.lattes.com/rafael', 'rafael@email.com'),
('Bruna Souza', 'fem', 'UFRRJ - Universidade Federal Rural do Rio de Janeiro', 'www.lattes.com/bruna', 'bruna@email.com');

INSERT INTO Autor (nome, sexo, instituicao, link_lattes, email) 
VALUES 
("María García", "fem", "UFRRJ - Universidade Federal Rural do Rio de Janeiro", "http://lattes.cnpq.br/12345678", "maria.garcia@gmail.com"),
("John Doe", "masc", "UFRRJ - Universidade Federal Rural do Rio de Janeiro", "http://lattes.cnpq.br/23456789", "john.doe@gmail.com"),
("Jane Smith", "fem", "USP - Universidade de São Paulo", "http://lattes.cnpq.br/34567890", "jane.smith@gmail.com"),
("Max Mustermann", "masc", "UFRJ - Universidade Federal do Rio de Janeiro", "http://lattes.cnpq.br/45678901", "max.mustermann@gmail.com"),
("Sarah Brown", "fem", "UFF - Universidade Federal Fluminense", "http://lattes.cnpq.br/56789012", "sarah.brown@gmail.com"),
("Michael Johnson", "masc", "UFRJ - Universidade Federal do Rio de Janeiro", "http://lattes.cnpq.br/67890123", "michael.johnson@gmail.com"),
("Emily Davis", "fem", "UFRJ - Universidade Federal do Rio de Janeiro", "http://lattes.cnpq.br/78901234", "emily.davis@gmail.com"),
("David Wilson", "masc", "USP - Universidade de São Paulo", "http://lattes.cnpq.br/89012345", "david.wilson@gmail.com"),
("Lauren Green", "fem", "UFRRJ - Universidade Federal Rural do Rio de Janeiro", "http://lattes.cnpq.br/90123456", "lauren.green@gmail.com"),
("Matthew Lee", "masc", "UFRJ - Universidade Federal do Rio de Janeiro", "http://lattes.cnpq.br/01234567", "matthew.lee@gmail.com");

INSERT INTO OrganizadorEvento (id_evento, id_organizador) 
VALUES 
(1, 1),
(1, 2),
(7, 2),
(2, 3),
(3, 1),
(3, 2),
(4, 3),
(10, 4),
(3, 4),
(7, 5),
(6, 5),
(9, 6),
(3, 7),
(4, 7),
(6, 8),
(5, 9),
(5, 10),
(8, 10),
(9, 10),
(6, 3);

INSERT INTO Tema (titulo) 
VALUES 
("Tendências contemporâneas na arquitetura de edifícios inteligentes"),
("Desafios e soluções na construção sustentável de cidades"),
("O papel da literatura na sociedade atual: revisão crítica"),
("As influências culturais e políticas na produção literária contemporânea"),
("Inovações tecnológicas para o desenvolvimento de cidades inteligentes"),
("Desafios e soluções na engenharia de infraestrutura sustentável"),
("Arte e tecnologia: novas possibilidades criativas"),
("O papel da arte na sociedade atual: reflexões críticas"),
("História global e as relações interculturais"),
("Os impactos da Revolução Industrial na história global"),
("Inteligência artificial e seus impactos na sociedade"),
("A evolução da tecnologia de computação em nuvem"),
("Educação para a era digital: desafios e soluções"),
("A importância da formação em habilidades sociais e emocionais na educação"),
("A crise climática e as soluções para a preservação ambiental"),   
("As tecnologias verdes e a sustentabilidade na produção industrial"),   
("Avanços na medicina personalizada e precisa"),   
("Desafios e soluções na atenção à saúde em áreas de vulnerabilidade social"),   
("Ética e tecnologia: novos desafios filosóficos"),   
("A relação entre filosofia e ciência na sociedade atual");   

INSERT INTO TemaEvento (id_tema, id_evento) 
VALUES 
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 5),
(10, 5),
(11, 6),
(12, 6),
(13, 7),
(14, 7),
(15, 8),
(16, 8),
(17, 9),
(18, 9),
(19, 10),
(20, 10);


INSERT INTO Artigo (titulo, subtitulo, data_de_publicacao, idioma, resumo, num_paginas, num_downloads, doi, arquivo, id_tema, id_evento)
VALUES
("Edifícios Inteligentes: A evolução da arquitetura", "As novas tendências e soluções tecnológicas na construção", "2022-01-01 10:00:00", "Português", "Este artigo irá explorar as tendências contemporâneas na arquitetura de edifícios inteligentes, incluindo as últimas soluções tecnológicas e tendências de design.", 10, 18, "10.1234/abcd", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 1, 1),
("Construção Sustentável de Cidades: Desafios e Soluções", "A importância de soluções ecológicas para o futuro das cidades", "2022-02-01 11:00:00", "Português", "Este artigo irá examinar os desafios e as soluções na construção sustentável de cidades, incluindo as tendências atuais na arquitetura e engenharia verde.", 20, 18, "10.1234/efgh", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 2, 1),
("A Literatura e seu Papel na Sociedade Atual", "Uma revisão crítica da literatura contemporânea", "2022-03-01 12:00:00", "Português", "Este artigo irá revisar criticamente o papel da literatura na sociedade atual, abordando as influências culturais e políticas na produção literária contemporânea.", 30, 16, "10.1234/ijkl", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 3, 2),
("O Futuro das Cidades Inteligentes: Inovações Tecnológicas", "Subtítulo 4", "2022-04-01 13:00:00", "Português", "Resumo do Artigo 4", 40, 18, "10.1234/mnop", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 4, 2),
("Avanços na medicina personalizada e precisa", "Como a tecnologia está revolucionando o tratamento de doenças", "2022-05-01 14:00:00", "Português", "Este artigo discutirá como a tecnologia está mudando o modo como os médicos tratam doenças. ", 50, 23, "10.1234/qrst", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 5, 3),
("Desafios e soluções na atenção à saúde em áreas de vulnerabilidade social", "Como garantir acesso à saúde de qualidade para todos", "2022-06-01 15:00:00", "Português", "Este artigo explorará as desigualdades no acesso à saúde em áreas de vulnerabilidade social e discutirá soluções para este problema.", 60, 18, "10.1234/uvwx", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 6, 3),
("Ética e tecnologia: novos desafios filosóficos", "Reflexões sobre a relação entre tecnologia e valores humanos", "2022-07-01 16:00:00", "Português", "Este artigo examinará os desafios éticos decorrentes da evolução da tecnologia.", 70, 18, "10.1234/yzab", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 7, 4),
("Desigualdade em Saúde: o Papel das Políticas Públicas em Áreas Vulneráveis", "Análise crítica dos fatores que afetam a qualidade da atenção à saúde em comunidades desfavorecidas.", "2022-08-01 17:00:00", "Português", "Este artigo irá examinar as barreiras que impedem o acesso à atenção à saúde de qualidade em áreas vulneráveis.", 80, 14, "10.1234/cdef", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 8, 4),
("Computação em Nuvem: Aproveitando as Oportunidades e Vencendo os Desafios", "Uma revisão dos benefícios e desafios da computação em nuvem, incluindo segurança, escalabilidade e flexibilidade.", "2022-08-01 17:00:00", "Português", "Este artigo irá explorar as vantagens da computação em nuvem.", 80, 9, "10.1234/cdef", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 8, 4),
("Blockchain: Tecnologia de Confiança para o Futuro", "Uma revisão dos princípios e aplicações da tecnologia blockchain, incluindo segurança, transparência e descentralização.", "2022-08-01 17:00:00", "Português", "Este artigo irá examinar os princípios e aplicações da tecnologia blockchain.", 80, 18, "10.1234/cdef", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 8, 4),
("Software Livre: Uma Visão Geral", "Como o software livre está mudando o mundo da tecnologia", "2022-08-01 17:00:00", "Português", "Este artigo apresenta uma visão geral do software livre, explicando o que é, como funciona e como está mudando o mundo da tecnologia.", 80, 16, "10.1234/cdef", 'C:\xampp\htdocs\Trabalho-APS\codigo\extras\artigo-lorem-ipsum.pdf', 13, 4);

INSERT INTO AutorArtigo (id_autor, id_artigo)
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

INSERT INTO PalavrasChave (id_artigo, palavra)
VALUES
(1, 'sustentabilidade'),
(2, 'sustentabilidade'),
(3, 'educação'),
(4, 'software'),
(5, 'software'),
(9, 'software'),
(11, 'software'),
(10, 'software'),
(4, 'programação'),
(9, 'programação'),
(10, 'programação'),
(11, 'programação'),
(1, 'engenharia'),
(2, 'engenharia'),
(4, 'engenharia'),
(7, 'filosofia'),
(3, 'artes'),
(6, 'política'),
(6, 'sociedade'),
(7, 'sociedade'),
(8, 'sociedade'),
(10, 'blockchain'),
(4, 'inteligência artificial'),
(9, 'inteligência artificial'),
(3, 'literatura'),
(1, 'urbanização'),
(4, 'urbanização'),
(2, 'urbanização'),
(8, 'urbanização'),
(5, 'saúde'),
(6, 'saúde'),
(8, 'saúde'),
(5, 'medicina'),
(9, 'computação em nuvem'),
(9, 'sofwatre livre'),
(11, 'sofwatre livre'),
(6, 'desigualdade'),
(8, 'desigualdade'),
(7, 'ética'),
(3, 'ciência'),
(4, 'ciência'),
(5, 'ciência'),
(1, 'futuro'),
(2, 'futuro'),
(3, 'futuro'),
(4, 'futuro'),
(5, 'futuro'),
(7, 'futuro'),
(10, 'futuro'),
(1, 'construção civil'),
(2, 'construção civil'),
(4, 'construção civil'),
(3, 'imaginação');