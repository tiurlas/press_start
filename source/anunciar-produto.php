<?php
session_start(); 
require_once("banco-produtos.php");
require_once("logica-usuario.php");
include("conecta.php");

$idUsuario = (int) $_SESSION["idUsuario"];
$anuncio = $_POST["anuncio"];
$categoria = (int) $_POST["categoria"];
$status = (int) $_POST["status"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$valor = (float) $_POST["valor"];
$descricao = $_POST["descricao"];

$foto1 = $_FILES["foto1"]["name"];
$tamanho1 = $_FILES["foto1"]["size"];
$tipoArquivo1 = $_FILES["foto1"]["type"];
$nomeTemporario1 = $_FILES["foto1"]["tmp_name"];

$foto2 = $_FILES["foto2"]["name"];
$tamanho2 = $_FILES["foto2"]["size"];
$tipoArquivo2 = $_FILES["foto2"]["type"];
$nomeTemporario2 = $_FILES["foto2"]["tmp_name"];

$foto3 = $_FILES["foto3"]["name"];
$tamanho3 = $_FILES["foto3"]["size"];
$tipoArquivo3 = $_FILES["foto3"]["type"];
$nomeTemporario3 = $_FILES["foto3"]["tmp_name"];

if($categoria <= 0){
	$_SESSION["error"]= "A categoria deve ser informada";	
	header("Location: vender.php");
	die();    
} 

if($anuncio == null){
	$_SESSION["error"]= "O nome do anúncio deve ser informado";	
	header("Location: vender.php");
	die();    
} 

if(($foto1<>"") and ($tamanho1>0))
{
		$destino = "fotos/$foto1";
		// die("Destino");

		if(move_uploaded_file ($nomeTemporario1, $destino))
			$_SESSION["confirm"]= "Sucesso no recebimento de <b>$foto1</b><br>";
		else
			die("Erro no recebimento do arquivo:" . $_FILES["foto1"]["error"]);
} else {
	$foto1 = null;
}

if(($foto2<>"") and ($tamanho2>0))
{
		$destino = "fotos/$foto2";
		// die("Destino");

		if(move_uploaded_file ($nomeTemporario2, $destino))
			$_SESSION["confirm"]= "Sucesso no recebimento de <b>$foto2</b><br>";
		else
			die("Erro no recebimento do arquivo:" . $_FILES["foto2"]["error"]);
} else {
	$foto2 = null;
}

if(($foto3<>"") and ($tamanho3>0))
{
		$destino = "fotos/$foto3";
		// die("Destino");

		if(move_uploaded_file ($nomeTemporario3, $destino))
		$_SESSION["confirm"]= "Sucesso no recebimento de <b>$foto3</b><br>";
		else
			die("Erro no recebimento do arquivo:" . $_FILES["foto3"]["error"]);
} else {
	$foto3 = null;
}

$resultado = anunciaProduto($conexao, $idUsuario, $anuncio,
$status, $marca, $modelo, $categoria, $valor, $descricao,
$cidade, $estado, $foto1, $foto2, $foto3);


/*
$query = "INSERT INTO produtos (idUsuario, nome, status, marca, modelo, categoria, precoVenda, descricao, 
    cidade, estado, foto1, foto2, foto3) VALUES ('$idUsuario', '$anuncio', '$status', '$marca', '$modelo', 
    '$categoria', '$valor', '$descricao', '$cidade', '$estado', '$foto1', '$foto2', '$foto3')";

if (mysqli_query($conexao, $query)) {	
	$_SESSION["confirm"]= "Produto anunciado com sucesso $idUsuario";
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);

header("Location: index.php");
*/
die();

?>