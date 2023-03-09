<?php
    require_once 'banco.php';
    require_once 'tabelas.php';

    $_GET['pk_cod_cli'] = intval($_GET['pk_cod_cli']);

    deletar();

    header('Location: form.php');
?>