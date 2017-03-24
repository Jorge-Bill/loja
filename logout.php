<?php
require_once("logica-usuario.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso May the force be with you";
header("location: index.php");
die();