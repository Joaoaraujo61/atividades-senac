use conexaoBanco;
create table funcionarios(
	id int auto_increment primary key,
    nome VARCHAR(150) NOT NULL,
    departamento char(100) not null,  
    salario int not null,
    data_admissao date not null
);

INSERT INTO funcionarios (nome, departamento, salario, data_admissao)
VALUES
('João Pedro Silva', 'Tecnologia', 4500, '2023-02-15'),
('Maria Oliveira Santos', 'Recursos Humanos', 3800, '2022-08-10'),
('Carlos Henrique Souza', 'Financeiro', 5200, '2021-11-03');