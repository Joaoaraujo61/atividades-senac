create database ConexaoBanco;
use ConexaoBanco;
create table formulario_cliente(
	id int auto_increment primary key,
    nome char(100) not null,    
    idade int not null,
    email char(100) not null,
    telefone char(15) not null,
    cidade char(50) not null
);