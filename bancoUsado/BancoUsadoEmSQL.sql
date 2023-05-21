CREATE DATABASE agenda;
USE agenda;

CREATE TABLE contatos(
id int not null  primary key auto_increment,
nome varchar(100),
email varchar(100),
numero varchar(100)
);