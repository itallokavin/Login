<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <img src="data:image/png;base64,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">
        </div>
        <div class="title">
            <span>Login</span>
        </div>
        <form action="php/login/login.php" method="POST">
            <div class="input_form">
                <input class="input_user" name="usuario" type="text" placeholder="Usuário" autocomplete="off">
            </div>

            <div class="input_form">
                <input class="input_pass" name="senha" type="password" placeholder="Senha">
                
            </div>

            <?php 
                if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="error-campo">
                <p class = "error">Dados inválidos.</p>
            </div>
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
           
            <div class="input_form">
                <input class="input_submit" type="submit" value="Entrar">
            </div>
        </form>

        <div class="footer">
            <span id="footerCopy">&copy Itallo Kavin</span>  
        </div>
    </div>
    
    
</body>
</html>