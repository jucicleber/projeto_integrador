<?php
$usuario = "admin";
$senha = "senha";

if($_POST){   
    echo ($_POST["login"] == $usuario and $_POST["senha"] == $senha) ? header("location: dashboard.php") : header("location: usuario_incorreto.php");

} 
else {
    header("location: login.html");
}
    

