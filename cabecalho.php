<?php require_once("mostra-alerta.php"); ?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php  
    mostraAlerta("sucess");
    mostraAlerta("danger");
 ?>

<html lang="pt-br">
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/estilos.css" rel="stylesheet" type="text/css">

<head>
    <title> Loja </title>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="produto-formulario.php">Adicionar Produto</a></li>
                    <li><a href="produto-lista.php">Listar Produtos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="principal">
