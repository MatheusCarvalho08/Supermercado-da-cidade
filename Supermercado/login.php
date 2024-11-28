<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
<?php
		include("cabecalho.php");
	?>

<div class="tela-login">
	<h1>Login</h1>
<form action="central.php" method="POST">
	<br>
		<input type="text" name="email" placeholder="Email">
	<br><br>
		<input type="password" name="senha" placeholder="Senha">
	<br><br>
		<input class="inputsubmit" type="submit" name="submit" value="Entrar">
</form>
	<br><br><br><br>
	<div class="cadastro">
		<B><a href="cadastro.php">Realize seu cadastro</a></B>
	</div>
</div>
<footer>
        <center>
        <h5><b>© 2023 Supermercado da Cidade - Todos os direitos reservados | Desenvolvido por <span class="nome">Matheus Carvalho, Gabriel Gomes e Samuel Ribeiro</span></b></h5>
        </center>    
    </footer>
</body>
</html>