<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
<?php
		include("cabecalho.php");
	?>

<?php

if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc) 
    VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc')");

header('Location: login.php');
}

?>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputuser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputuser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputuser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputuser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <br>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>    
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
            
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    <footer>
        <center>
        <h5><b>© 2023 Supermercado da Cidade - Todos os direitos reservados | Desenvolvido por <span class="nome">Matheus Carvalho, Gabriel Gomes e Samuel Ribeiro</span></b></h5>
        </center>    
    </footer>
</body>
</html>