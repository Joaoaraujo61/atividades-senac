create database ConexaoBanco;
use ConexaoBanco;
create table calculo(
	id int auto_increment primary key,
    numero1 int not null,
    numero2 int not null,
    numero3 int not null,
    resultado int not null
);
select * from calculo;