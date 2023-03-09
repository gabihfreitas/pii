<?php


        $usuarioForm = $_POST["usuario"];
        $senhaForm = $_POST["senha"];

        $usuario = "gabriela";
        $senha = "12345";

        if ($usuario == $usuarioForm && $senha == $senhaForm) {
            header("Location: inicio.html");
        } else {
            header ("Location: loginincorreto.html");
        }


?>