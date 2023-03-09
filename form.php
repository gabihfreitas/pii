<?php

require_once('banco.php');
require_once('tabelas.php');

?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>revisão de dados</title>

    <style>
        body {
            background-color: lightgreen;
            text-align: center;
            margin-top: 270px;
            font-family: Arial, Helvetica, sans-serif;
        }

        button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 7px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <h1>Verifique se seus dados estão corretos:</h1>


    

    <?php

    $interessados = select_interessados();

    foreach ($interessados as $interessado) {
        print '<form action="deletar.php" method="get">';
        print "Nome: " . $interessado['primeiro_nom'] . "<p/> Sobrenome: " . $interessado['sobrenome'] . "
            <p/> Contato: " . $interessado['telefone'] . "<p/> Email: " . $interessado['email']. "<p/> Cep: " . $interessado['cep'] . "<p/> 
            Animal desejado: " . $interessado['raca_animal'] . "<p/> Idade: " . $interessado['idade'] . "<p/> Data de nascimento: " . $interessado['data_nasc'] . "<p/>";
        print '<input type="hidden" name="pk_cod_cli" value="' . $interessado['pk_cod_cli'] . '">';
        print '<input type="submit" value="deletar">';
        print '</form>';
        print '<p> ------------------------------------ </p>';
    }


    ?>


    <a href=""><button class="botao">Continuar</button></a>
    <a href="formularioadocao.php"><button class="botao">Corrigir todos os dados</button></a>
    <p>


</body>

</html>