create database ConexaoBanco;
use ConexaoBanco;
create table alunos(
	id int auto_increment primary key,
    nome char(100) not null,    
    idade int not null,
    curso char(100) not null,  
    cidade char(100) not null,  
    entrega date not null,  
);

INSERT INTO produtos (nome, idade, curso, cidade, entrega) VALUES
('Ana Silva', 22, 'Engenharia de Software', 'São Paulo', '2026-12-15'),
('Bruno Costa', 25, 'Análise de Sistemas', 'Rio de Janeiro', '2026-11-20'),
('Carla Souza', 20, 'Ciência da Computação', 'Belo Horizonte', '2027-01-10'),
('Diego Almeida', 27, 'Redes de Computadores', 'Curitiba', '2026-10-05'),
('Elisa Ferreira', 23, 'Segurança da Informação', 'Brasília', '2026-12-30');