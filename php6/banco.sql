drop database aula6;

create database aula6;

use aula6;

create table cargo(
    idcargo int primary key auto_increment,
    nomecargo varchar(40),
    salario double(10,2)
);

insert into cargo values(null,'Programador',1800.85);
insert into cargo values(null,'Web Designer',1450.90);
insert into cargo values(null,'Suporte',1100.46);
insert into cargo values(null,'Analista',2330.00);

select * from cargo;

create table funcionario(
    idfuncionario int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    cpf varchar(14) unique,
    dtnasc date,
    idcargo int,
    foreign key (idcargo) references cargo(idcargo)
);