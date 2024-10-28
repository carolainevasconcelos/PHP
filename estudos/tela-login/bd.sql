create database estudosPHP;
use estudosPHP;

create table usuarios(
	nome varchar(255) not null,
    email varchar(255) not null,
    sexo varchar(15) not null,
    data_nasc date
);

select * from usuarios;