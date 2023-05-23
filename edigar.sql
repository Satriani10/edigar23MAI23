create database edigar;
use edigar;

create table usuario(
idusuario int primary key auto_increment,
nmusuario varchar(50),
dssenha varchar(50)
);
insert into usuario values (default,'felipe unias','456789');
select * from usuario;

select * from usuario where dssenha = 6789 and nmusuario = 'edigar';
 


