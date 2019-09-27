create database  if not exists Atividade;
use Atividade; 
CREATE TABLE if not exists tarefa
(
Codigo integer not null auto_increment,
Descricao int (11) NOT NUll,
Prazo date,
primary key (Codigo)
);

create user 'realizador'@'localhost' identified by 'senha123';

grant all privileges on Atividade.* TO 'realizador'@'localhost';
