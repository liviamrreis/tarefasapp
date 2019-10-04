use Atividade;

select * from tarefa;
insert tarefa values(null, 'Lavar banheiro', '2019-08-21', 's'); 
insert tarefa values(null, 'Estudar Geografia', '2019-09-09', 'n'); 

update tarefa set Concluida = "s" where Codigo = 2;
