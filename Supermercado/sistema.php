<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="sistema.css">
    <script async src="loja.js"></script>
</head>
<body>
<header>
        <div class="line">
                <div class="logocell"><img src="img/cell.png" width="28px"/></div>
                <div class="cell">(12) 3652-1047</div>
                <div class="logoemail"><img src="img/email.png" width="30px"/></div>
                <div class="email">contato@supermercadodacidade.com.br</div>
        </div>
        <div class="container">
            <div class="logo"><img src="img/fundo1.png"/></div>
            <div class="menu">
                <nav>
                    <a href="index.php">Home</a>
                    <a href="login.php">Login</a>
                    <a href="promocao.php">Promoções</a>
                    <a href="contato.php">Nossas lojas/Contato</a>
                    <a class="sair" href="sair.php">Sair</a>
                </nav>
            </div>
        </div>
</header>
    <h1 class="titulo-produto"><center><b>Produtos imperdíveis do Supermercado da Cidade:</b></center></h1>
    <br><br>
    <center><hr class="linha"></center>
    <br><br><br>
    <center>
    <div class="conteiner">
        <div class="produto">
        <strong class="produto-titulo">Farinha de trigo</strong>
        <br>
        <img class="produto-imagem" src="img/farinha.jpeg" alt="Farinha de trigo" width="300px">
            <div class="produto-preco-conteiner">
                <span class="produtoo-preco">R$6,99</span>
                <button class="produto-botao" type="button">Adicionar ao carrinho</button>
            </div>
       </div>
       <div class="produto">
        <strong class="produto-titulo">Bisteca</strong>
        <br>
        <img class="produto-imagem" src="img/bisteca.jpeg" alt="Bisteca" width="300px">
            <div class="produto-preco-conteiner">
                <span class="produtoo-preco">R$30,00</span>
                <button class="produto-botao" type="button">Adicionar ao carrinho</button>
            </div>
       </div>
       <br><br>
        <div class="produto">
        <strong class="produto-titulo">Gengibre</strong>
        <br>
        <img class="produto-imagem" src="img/gen.jpeg" alt="Gengibre" width="300px">
            <div class="produto-preco-conteiner">
                <span class="produtoo-preco">R$10,00</span>
                <button class="produto-botao" type="button">Adicionar ao carrinho</button>
            </div>
       </div>
       <div class="produto">
        <strong class="produto-titulo">Refrigerante Pepsi 2L</strong>
        <br>
        <img class="produto-imagem" src="img/refri.jpeg" alt="Refrigerante" width="300px">
            <div class="produto-preco-conteiner">
                <span class="produtoo-preco">R$8,50</span>
                <button class="produto-botao" type="button">Adicionar ao carrinho</button> 
            </div>
       </div>
    </div>
</center>
<br><br>
    <div>
        <h1 class="titulo-produto"><b><center>Carrinho</center></b></h1>
        <br><br><br>
            <div>
            <center><table class="tabela">
        <thead class="inicio">
            <tr>
                <td colspan="2">Item</td>
                <td>Preço</td>
                <td colspan="2">Quantidade</td>
            </tr>
        </thead>
        <tbody class="meio">
               <!-- <tr class="cart-product">
                <td><img src="img/gen.jpeg" alt="Gengibre" width="100px"></td>
                <td class="product-indentification">
                    <strong class="produto-texto-carrinho">Gengibre</strong>
                </td>
                    <td>
                        <span class="produto-quantidade">R$10,00</span>
                    </td>
                <td>
                        <input class="botao-quantidade" type="number" value="1" min="0">
                        <button class="botao-tabela" type="button">Remover</button>
                </td>
            </tr>
            <tr class="cart-product">
                <td><img src="img/farinha.jpeg" alt="Farinha" width="100px"></td>
                <td>
                <strong class="produto-texto-carrinho">Farinha de trigo</strong>
                </td>
                <td><span class="produto-quantidade">R$6,99</span></td>
                <td>
                        <input class="botao-quantidade" type="number" value="2" min="0">
                        <button class="botao-tabela" type="button">Remover</button>
                </td>
            </tr> -->
        </tbody>   
        <tfoot class="final">
            <tr>
                <td colspan="3" class="cart-total-conteiner"> 
                    <strong>Total:</strong>
                    <span>R$0,00</span>
                </td>
            </tr>
        </tfoot> 
            </table></center>
        </div>
    </div>
    <br><br>
    <center><button class="botao-compra" type="button">Finalizar compra</button></center>

<br><br><br>
<footer>
        <center>
        <h5><b>© 2023 Supermercado da Cidade - Todos os direitos reservados | Desenvolvido por <span class="nome">Matheus Carvalho, Gabriel Gomes e Samuel Ribeiro</span></b></h5>
        </center>    
    </footer>
</body>
</html>