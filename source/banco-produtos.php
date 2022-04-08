<?php
session_start();
include("conecta.php");

$itens = array();
$item = null;

function buscaProduto($conexao, $email, $senha) {
}

function listaCompras($conexao, $nome, $email, $senha) {
}  

function listaVenda($conexao, $nome, $email, $senha) {
}  

function listaTodos($conexao) {
    $query = "SELECT * FROM produtos";
    $registros = mysqli_query($conexao, $query);
    $linhas = mysqli_num_rows ($registros);
    //echo "N�mero de registros encontrados: $linhas <br>";
    global $itens;
    if (mysqli_num_rows($registros) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($registros)) {         
        //echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["lastname"]. "<br>";           
        }
    } else {
        echo "0 results";
    }


    $row = mysqli_fetch_object($registros);
         $itens = array($row);
    //echo  var_dump($itens);
}

function anunciaProduto($conexao, $userId, $anuncio, $status, $marca, $modelo, $categoria,
$valor, $descricao, $cidade, $estado, $foto1, $foto2, $foto3) {
    
    $query = "INSERT INTO produtos (idUsuario, nome, status, marca, modelo, categoria, precoVenda,
                descricao, cidade, estado, foto1, foto2, foto3) 
            VALUES ('$userId', '$anuncio', '$status', '$marca', '$modelo', '$categoria', '$valor',
                '$descricao', '$cidade', '$estado', '$foto1', '$foto2', '$foto3')";
    
    if (mysqli_query($conexao, $query)) {	
        $_SESSION["confirm"]= "Produto anunciado com sucesso $idUsuario";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexao);
    }

    mysqli_close($conexao);
    header("Location: index.php");
    return $result;
}  
?>