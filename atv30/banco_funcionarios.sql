CREATE DATABASE IF NOT EXISTS bancoFuncionarios;

USE bancoFuncionarios;

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    departamento VARCHAR(100) NOT NULL,
    salario DECIMAL(10,2) NOT NULL
);

INSERT INTO funcionarios (nome, cargo, departamento, salario)
VALUES
('Ana Silva', 'Analista de Sistemas', 'TI', 4500.00),
('Carlos Souza', 'Gerente de Vendas', 'Comercial', 6200.00),
('Mariana Costa', 'Assistente Administrativo', 'RH', 2300.00);
