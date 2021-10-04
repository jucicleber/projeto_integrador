<?php
$usuario = "admin";
$senha = "senha";

if($_POST){   
    echo ($_POST["login"] == $usuario and $_POST["senha"] == $senha) ? header("location: dashboard.html") : "Usuário e/ou senha incorretos";

} 
else {
    header("location: login.html");
}
    

