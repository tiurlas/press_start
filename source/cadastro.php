<?php
session_start();
include("conecta.php");
require_once("banco-usuario.php");
require_once("logica-usuario.php");


cadastraUsuario($conexao, $_POST["nome"], $_POST["email"], $_POST["senha"]);
$_SESSION["confirm"]= "Usuário cadastrado com sucesso";
header("Location: registro.php");

die();
?>