<?php

function select_especie() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM `especie`");
	$sth->execute();
	return $sth->fetchAll();
}

function select_interessados() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM interessados, especie WHERE interessados.animal_escolhido = especie.pk_cod_especie;");
	$sth->execute();
	return $sth->fetchAll();
}

function insert (){
	global $conn;
    $sth = $conn->prepare("INSERT INTO `interessados` (`pk_cod_cli`, `animal_escolhido`, `telefone`, `primeiro_nom`, `sobrenome`, `email`, `cep`, `idade`, `data_nasc`) VALUES (:opcao :telefone, :primeiro_nom, :sobrenome, :email, :cep, :idade, :data_nasc);");
    $sth->bindValue(':opcao', $_GET['opcao']);
    $sth->bindValue(':primeiro_nom', $_GET['nome']);
    $sth->bindValue(':sobrenome', $_GET['sobrenome']);
	$sth->bindValue(':telefone', $_GET['numero']);
    $sth->bindValue(':email', $_GET['email']);
    $sth->bindValue(':cep', $_GET['cep']);
    $sth->bindValue(':idade', $_GET['selecao']);
	$sth->bindValue(':data_nasc', $_GET['data']);
    $sth->execute();
    return $sth->fetchAll();

}

function alterar() {
	global $conn;
    $sth = $conn->prepare("UPDATE `interessados` SET `animal_escolhido` = ':', `telefone` = ':numero', `primeiro_nom` = ':nome', `sobrenome` = ':sobrenome', `email` = ':email', `cep` = ':cep', `idade` = ':selecao', `data_nasc` = ':data' WHERE `interessados`.`pk_cod_cli` = 1");
    $sth->bindValue(':idade', $_GET['selecao']);
	$sth->bindValue(':telefone', $_GET['numero']);
    $sth->bindValue(':primeiro_nom', $_GET['nome']);
    $sth->bindValue(':sobrenome', $_GET['sobrenome']);
    $sth->bindValue(':email', $_GET['email']);
    $sth->bindValue(':cep', $_GET['cep']);
	$sth->bindValue(':data_nasc', $_GET['data']);
    $sth->execute();
    return $sth->fetchAll();
}


?>
