
USE conexaoBanco;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    entrega DATE NOT NULL
);

INSERT INTO produtos (nome, categoria, quantidade, preco, entrega)
VALUES
('Notebook Dell Inspiron 15', 'Informática', 10, 3899.90, '2026-07-25'),
('Mouse Gamer Logitech G203', 'Periféricos', 50, 149.90, '2026-07-28'),
('Monitor LG 24"', 'Monitores', 15, 899.00, '2026-08-01');