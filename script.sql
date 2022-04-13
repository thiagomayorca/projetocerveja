#ENTRADA PELO SHELL     
mysql -u root

#criar base
create database atividadecerveja1;

# chamar a base 
use atividadecerveja1;

#criar tabela
create table usuarios(
    idproduto int auto_increment primary key,
    nome varchar(20),
    login varchar(30) unique,
    senha varchar(20),
    perfil enum ('adm','user')
    
); 
ALTER TABLE `usuarios` ADD `cep` VARCHAR(20) NOT NULL AFTER `perfil`, ADD `rua` VARCHAR(50) NOT NULL AFTER `cep`, ADD `bairro` VARCHAR(20) NOT NULL AFTER `rua`, ADD `cidade` VARCHAR(20) NOT NULL AFTER `bairro`, ADD `estado` VARCHAR(20) NOT NULL AFTER `cidade`, ADD `ibge` VARCHAR(20) NOT NULL AFTER `estado`;
desc usuarios;

create table cervejas(
    idcerveja int auto_increment primary key,
    nomec varchar(20),
    tipo varchar(20),
    pais varchar(20),
    nota int,
    coment varchar(50)
); 

insert into cervejas values(null,'cerveja','skoll','brasil','5','muito ruim'); 
desc cervejas;

select * from cervejas;