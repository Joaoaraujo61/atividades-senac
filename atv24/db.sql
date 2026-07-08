create database ConexaoBanco;
use ConexaoBanco;
create table produtos(
	id int auto_increment primary key,
    nome char(100) not null,    
    quantidade int not null,
    preco decimal(10, 2) not null
);

insert into produtos (nome, quantidade, preco) values
('Produto A', 10, 19.99),
('Produto B', 5, 29.99),
('Produto C', 20, 9.99);