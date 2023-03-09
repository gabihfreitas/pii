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

    function insert() {
        global $conn;
        $sth = $conn->prepare("INSERT INTO interessados(primeiro_nom, sobrenome, telefone, email, cep, animal_escolhido, idade, data_nasc)
        VALUES(:nome, :sobrenome, :numero, :email, :cep, :opcao, :selecao, :data)");
        $sth -> bindParam(':nome', $_GET['nome']);
        $sth -> bindParam(':sobrenome', $_GET['sobrenome']);
        $sth -> bindParam(':numero', $_GET['numero']);
        $sth -> bindParam(':email', $_GET['email']);
        $sth -> bindParam(':cep', $_GET['cep']);
        $sth -> bindParam(':opcao', $_GET['opcao']);
        $sth -> bindParam(':selecao', $_GET['selecao']);
        $sth -> bindParam(':data', $_GET['data']);
        $sth->execute();
    }

    function deletar() {
        global $conn;
        $sth = $conn->prepare("DELETE FROM interessados WHERE pk_cod_cli = :id");
        $sth -> bindParam(':id', $_GET['pk_cod_cli']);
        $sth->execute();
        
    }

?>
