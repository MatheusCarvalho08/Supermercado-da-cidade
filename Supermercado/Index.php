<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
		include("cabecalho.php");
	?>
    <div class="main">
        <div class="slides">
            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">
            <input type="radio" name="slide" id="slide4">

            <div class="slide s1">
            <img src="img/sl1.jpeg" alt="informação">
            </div>

            <div class="slide">
            <img src="img/sl3.jpeg" alt="missão">   
            </div>

            <div class="slide">
            <img src="img/sl2.jpeg" alt="visão">   
            </div>

            <div class="slide">
            <img src="img/sl4.jpeg" alt="valores">    
            </div>
        </div>

        <div class="navigation">
            <label class="bar" for="slide1"></label>
            <label class="bar" for="slide2"></label>
            <label class="bar" for="slide3"></label>
            <label class="bar" for="slide4"></label>
        </div>
    </div>
    <div class="principal">
            <div><img src="img/seta.png" alt="seta" width="80px"/></div>
                <h1>
                    Aqui você 
                    <span class="cor">encontra </span>
                </h1>
            <div class="seta"><img src="img/seta2.png" alt="seta" width="80px"/></div>
    </div>
    <div class="imagens">
            <div class="pao"><img src="img/pao.jpeg" alt="pao" width="250px"/></div>
            <div class="carne"><img src="img/carne.jpeg" alt="carne" width="250px"/></div>
            <div class="salada"><img src="img/salada.jpeg" alt="salada" width="250px"/></div>
            <div class="bebida"><img src="img/bebida.jpeg" alt="bebida" width="250px"/></div>
    </div>
    <div class="sub">
        <div class="padaria"><h2><b>PADARIA</b></h2></div>
        <div class="ac"><h2><b>AÇOUGUE</b></h2></div>
        <div class="ho"><h2><b>HORTFRUTI</b></h2></div>
        <div class="ad"><h2><b>ADEGA</b></h2></div>
    </div>
    <?php
		include("rodape.php");
	?>
</body>
</html>