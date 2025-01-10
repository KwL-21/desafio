drop database aula7;
create database aula7;
use aula7;
create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(40),
    email varchar(40),
    dtnasc date,
    cpf varchar(14) unique
);
create table endereco(
    idendereco int primary key auto_increment,
    endereco varchar(250),
    cep varchar(9),
    estado char(2),
    cidade varchar(40),
    id_cliente int,
    foreign key (id_cliente) references cliente(idcliente)
    on delete cascade
);