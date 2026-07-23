CREATE DATABASE bancoLivros;

USE bancoLivros;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(150) NOT NULL,
    editora VARCHAR(100) NOT NULL,
    ano_publicacao INT NOT NULL
);

INSERT INTO livros (titulo, autor, editora, ano_publicacao)
VALUES
('Dom Casmurro', 'Machado de Assis', 'Editora Ática', 1899),
('A Hora da Estrela', 'Clarice Lispector', 'Rocco', 1977),
('Capitães da Areia', 'Jorge Amado', 'Companhia das Letras', 1937);
