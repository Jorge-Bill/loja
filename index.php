<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");
?>

<?php
	mostraAlerta("danger");
?>

    <h1> Bem Vindo! </h1>

<?php 
	if(usuarioEstaLogado()){?>
 		<p class="alert-success"> Você está logado como <?=usuarioLogado()?>. </p>
 		<p><a href="logout.php">Deslogar</a></p>
<?php } else {?>
    <h2> Login </h2>
	<form action="login.php" method="post">
	    <table class="table">
	    <tr>	
	    	<td>E-mail: </td>
	    	<td> <input class="form-control" type="email" name="email" > </td>
	    </tr>
	    <tr>
	    	<td>Senha: </td>
	    	<td> <input class="form-control" type="password" name="senha"> </td>
	    </tr>
	    <tr>
	    	<td> <button class="btn btn-primary">Login</button> </td>
	    </tr>
	    </table>
	</form>
<?php 	}?>


<?php
    include("rodape.php");

?>
