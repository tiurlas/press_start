<?php
session_start();
include("conecta.php");
function buscaUsuario($conexao, $email, $senha) {
    // $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where email='{$email}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    mysqli_close($conexao);
    return $usuario;
}

function cadastraUsuario($conexao, $nome, $email, $senha) {
    // $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "INSERT INTO usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    mysqli_close($conexao);
    return $usuario;
}  

function anunciaProduto($conexao, $userId, $anuncio,
$status, $marca, $modelo, $categoria, $valor, $descricao,
$cidade, $estado, $foto1, $foto2, $foto3) {
    $query = "INSERT INTO produtos (idUsuario, nome, status, marca, modelo, categoria, precoVenda, descricao, 
    cidade, estado, foto1, foto2, foto3) VALUES ('$userId', '$anuncio', '$status', '$marca', '$modelo', 
    '$categoria', '$valor', '$descricao', '$cidade', '$estado', '$foto1', '$foto2', '$foto3')";
    $resultado = mysqli_query($conexao, $query);
    $result = mysqli_fetch_assoc($resultado);
    mysqli_close($conexao);

    $_SESSION["confirm"]= "Query $query";
    header("Location: index.php");
    return $result;
}  