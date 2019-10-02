create database  if not exists Atividade;
drop table tarefa;
use Atividade; 
CREATE TABLE if not exists tarefa
(
Codigo integer not null auto_increment,
Descricao varchar (500) NOT NUll,
Prazo date,
Concluida char(1),
primary key (Codigo)
);

create user 'realizador'@'localhost' identified by 'senha123';

grant all privileges on Atividade.* TO 'realizador'@'localhost';
