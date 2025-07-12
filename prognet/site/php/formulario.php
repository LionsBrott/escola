<!DOCTYPE html>
<html lang="en">
<!-- Define que o documento é um arquivo HTML5 e o idioma é inglês -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="icon" href="../imgs/biyoo.ico" type="image/ico">
    <link rel="stylesheet" href="../css/style1.css">

</head>

<body>
    <!-- Menu fixo -->
    <nav class="menu">
        <div class="logo"><img src="imgs/logo.png" alt="LOGO"></div>
        <ul>
            <li><a href="../index.html">HOME</a></li>
            <li><a href="../html/historico.html">HISTORIA</a></li>
            <li><a href="../html/noticias.html">NOTICIAS</a></li>
            <li><a href="../html/galeria.html">GALERIA</a></li>
            <li><a href="../html/tabelas.html">TABELAS</a></li>
            <li><a href="../html/formulario.html">FORMULARIO</a></li>
        </ul>
    </nav>
    <div class="container">

        <!-- Banner superior -->
        <div class="banner">
            <p class="pbanner">전지적 독자 시점<br></p>
        </div>

        <div class="conteudo">

        <?php
        //localhost/EUGENIA/
        echo "<p>CADASTRO REALIZADO COM SUCESSO!</p>";

        $NOME = $_POST['nome'];
        $SENHA = $_POST['senha'];
        $DATA = $_POST['data'];
        $TRNS = $_POST['transporte'];
        $LING = $_POST['linguagens'];

        echo "<p>Nome: $NOME</p>";
        echo "<p>Senha: $SENHA</p>";
        echo "<p>Data: $DATA</p>";
        echo "<p>Transporte: $TRNS</p>";
        echo "<p>Linguagem: </p>"; 
        foreach ($LING as $linguagem) {
            echo "<p>$linguagem</p>";
        }

        ?>

            <div class="form">
                <p>FORMULARIO</p>
                <!-- Formulario simple que enviará una petición GET -->
              

            </div>

        </div>
        <div class="rodape">
            <p class="pcenter">threewaysurvive@hotmail.com</p>
        </div>
    </div>
    </div>


</body>

</html>

