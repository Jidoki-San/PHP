create database bd_login;

use bd_login;

create table usuario(
	id_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    primary key (id_usuario)
);

select * from usuario;

insert into usuario(nome, sobrenome, login, senha)