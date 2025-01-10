drop database aula4;

create database aula4;

use aula4;

create table usuarios(
    idusuario int primary key auto_increment,
    login varchar(50) unique,
    senha varchar(32),
    perfil enum('adm','user')
);

insert into usuarios values(null,'admin',md5('123'),'adm');
insert into usuarios values(null,'usuario',md5('abc'),'user');

select * from usuarios;

