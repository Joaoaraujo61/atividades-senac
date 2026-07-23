create database livraria;
use livraria;
create table livros(
	id int auto_increment primary key,
    titulo VARCHAR(150) NOT NULL,
    autor char(100) not null,    
    editora char(100) not null,
    ano_publicacao int not null,
    quantidade int not null
);

INSERT INTO livros (titulo, autor, editora, ano_publicacao, quantidade)
VALUES
('Dom Casmurro', 'Machado de Assis', 'Editora Globo', 1899, 15),
('Harry Potter e a Pedra Filosofal', 'J. K. Rowling', 'Rocco', 1997, 20),
('1984', 'George Orwell', 'Companhia das Letras', 1949, 12);