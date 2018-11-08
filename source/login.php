<?php 
session_start();
include("conecta.php");
require_once("logica-usuario.php"); 
require_once("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null) {
    $_SESSION["error"]= 'Usuário ou senha inválida';
    $idUsuario = null;
    header("Location: index.php");
} else {
    $_SESSION['idUsuario'] = $usuario["id"];
    $teste = $usuario["id"];
    
    $_SESSION["confirm"]= "Usuario logado com sucesso";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();
?>