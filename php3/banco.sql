drop database aula3;
create database aula3;
use aula3;

create table alunos(
    mat int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    dtnasc date
);

#date --> yyyy-mm-dd

