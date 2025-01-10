#apaga a base
drop database aula2;

#cria uma base
create database aula2;

#conecta a uma base
use aula2;

#cria uma tabela
create table clientes(
    cod int primary key auto_increment,
    nome varchar(50),
    email varchar(1),
    telefone varchar(20)
);

#inserindo um registro
insert into clientes values(null,'Max','maxc.guedes@gmail.com','2233-4455');

#primary key -> chave primarica, nao pode ser vazio, nao pode ser duplicado

#varchar -> 250 caracteres
#text -> 4mil (+- 4kb)
#longtext -> 4milhoes (+ - 4mb)