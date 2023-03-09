<?php
    require_once 'banco.php';
    require_once 'tabelas.php';

    $_GET['opcao'] = intval($_GET['opcao']);

    insert();

    header('Location: form.php');

?>