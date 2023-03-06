<?php

require_once 'banco.php';
require_once 'tabelas.php';

?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormulárioAdoção</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            background-color: lightpink;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form {
            width: 100%;
            max-width: 450px;
            display: flex;
            flex-direction: column;
            padding: 100px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 7px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            display: flex;
            justify-content: center;
            text-align: center;
            font-size: 20px;
        }

        .botao {
            width: 250px;
            height: 30px;
            background-color: lightgreen;
        }
    </style>

</head>

<body>
    <div class="form">
        <form name="formulario" method="_GET" action="insert.php">
            <label for="primeironome">Primeiro nome:</label> <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu primeiro nome" required>
            <p>

                <label for="sobrenome">Sobrenome:</label> <br>
                <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required>
            <p>

                <label for="numero">Contato:</label> <br>
                <input type="tel" id="numero" name="numero" placeholder="(xx)xxxx-xxxx" required>
            <p>

                <label for="email">Email:</label> <br>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            <p>

                <label for="cep">Cep:</label> <br>
                <input type="text" id="cep" name="cep" placeholder="Digite seu cep" required>
            <p>

                <label for="opcao">Selecione o animal que deseja adotar:</label>
            <p>
                <select name="opcao" id="opcao">
                    <?php
                    $animais = select_especie();
                    foreach ($animais as $animal) {
                        echo '<option value="' . $animal['pk_cod_especie'] . '">' . $animal['raca_animal'] . '</option>';
                    }
                    ?>
                </select>
            <p>

                <label for="selecao">Selecione sua idade:</label> <br>
                <input type="radio" id="18-25" name="selecao" value="18-25">
                <label for="18-23"> 18-23 </label> <br>
                <input type="radio" id="26-32" name="selecao" value="26-32">
                <label for="26-32"> 26-32 </label> <br>
                <input type="radio" id="33-59" name="selecao" value="33-58">
                <label for="33-59"> 33-59</label> <br>
                <input type="radio" id="+60" name="selecao" value="+60">
                <label for="+60"> +60 </label>
            <p>
            <form action="/action_page.php">

                <label for="data">Data de nascimento:</label>
                <p>
                    <input type="date" id="data" name="data">
                <p>

                    <input class="botao" type="submit" name="Enviar" value="Enviar">

            </form>
    </div>


</body>

</html>