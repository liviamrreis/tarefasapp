<?php
/* funcoes */

function criarConexao()
{
	$banco = "Atividade";
	$usuario = "realizador";
	$senha = "senha123";
	$conexao = new PDO("mysql:host=localhost;dbname=${banco}",
		$usuario, $senha,array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
	return $conexao;
}

function buscarAtividades()
{
	$conexao = criarConexao();
	$sql = "SELECT * FROM tarefa";
	$comando = $conexao->query($sql);
	return $comando->fetchAll();
}

function criarAtividade($descricao, $prazo)
{
	$conexao = criarConexao();
	$sql = "INSERT INTO tarefa values (null, ? , ?)";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$descricao, $prazo
		]
	);
}



function concluirAtividade($Codigo)
{
	$conexao = criarConexao();
	$sql = " UPDATE tarefa SET Concluida= 's' WHERE Codigo= ? ";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$Codigo
		]
	);
}


function deletarAtividade($Codigo)
{
	$conexao = criarConexao();
	$sql = "DELETE from tarefa WHERE Codigo=?";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$Codigo
		]
	);
}

?>