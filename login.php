<?php 
require_once("banco_usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
//var_dump($usuario);
if ($usuario == null) {
	//echo "Usuario ou senha incorretos";
	$_SESSION["danger"] = "usuario ou senha invalido you should not pass";
	header("location: index.php");

}

else{
	//echo "Login efetuado com sucesso";
	logaUsuario ( $usuario["email"]);
	$_SESSION["success"] = "usuario logado com sucesso Run forrest Run";
	header("location: index.php");

	

}

die();