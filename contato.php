<?php require_once ("cabecalho.php");  ?>

<form action="envia-contato.php" method="post">
	<table class="table">
	<h1 class="text-center">Contato</h1>
		<tr>
			<td>Nome</td>
			<td><input type="text" name="nome" class="form-control"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email" class="form-control"></td>
		</tr>
		<tr>
			<td>Mensagem</td>
			<td><textarea name="mensagem" class="form-control"> </textarea></td>
		</tr>
		<tr>
			<td><button class="btn btn-primmary">Enviar</button></td>
		</tr>
	</table>
</form>

<?php require_once ("rodape.php");  ?>