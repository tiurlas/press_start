<?php
require_once("logica-usuario.php");
logout();
    $_SESSION["confirm"]= "Usuario deslogado com sucesso";
header("Location: index.php");
die();