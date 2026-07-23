use conexaoBanco;
create table alunos(
	id int auto_increment primary key,
    nome VARCHAR(150) NOT NULL,
    idade int not null,
    curso char(100) not null,  
    cidade char(100) not null  
);

INSERT INTO alunos (nome, idade, curso, cidade)
VALUES
('João Pedro Silva', 20, 'Análise e Desenvolvimento de Sistemas', 'Brasília-DF'),
('Maria Oliveira Santos', 25, 'Fisioterapia', 'Brasília-DF'),
('Carlos Henrique Souza', 19, 'Educação Física', 'Brasília-DF');