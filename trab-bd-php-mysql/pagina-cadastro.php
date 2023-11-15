<?php 
include("conexao.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Cadastro Pizzaria</title>
</head>
<body>

<div class="login-container"> <!-- Usuário fará o cadastro por este container-->
    <form class="formulario-cadastro" action="cadastro.php" method="POST"> <!--Conteúdo do container-->

        <div class="logo">
            <img class="icon-header" src="images/pizza.png">
        </div>

        <h2 style="font-size:16px;">Cadastre-se para fazer seu pedido!</h2>

        <div class="input-login">
            <input type="name" id="nome" name="nome" placeholder="nome e sobrenome" required>
        </div>

        <div class="input-login">
            <input type="email" id="email" name="email" placeholder="e-mail" required>
        </div>

        <div class="input-login">
            <input type="text" id="usuario" name="usuario" placeholder="usuário" required>
        </div>
        
        <div class="input-login">
            <input type="password" id="senha" name="senha" placeholder="senha" required>
        </div>
        
        <div class="input-login">
            <input type="submit" value="Cadastrar" class="botao-entrar">
        </div>
        
        <div class="input-login cadastrar">
            <p>Já tem uma conta?</p>
            <a class="botao-cadastro" href="index.html"
            ><strong>Faça login</strong></a>
        </div>
    </form>
</div>

</body>
</html>



