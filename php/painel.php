<?php 
    include("login/verifica_login.php"); 
    include("conexao.php");

    $pesquisa = "SELECT * from tbl_usuario where usuario = '{$_SESSION['usuario']}'";
    $query = mysqli_query($conexao,$pesquisa);
    $dados = mysqli_fetch_assoc($query);
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Login</title>
</head>
<body id="body-painel">
    <div class="container">
        <div class="box-painel">
            <h2>Seja bem vindo, <?php echo $dados['nome'] ?></h2>
            <a href="login/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
        </div>
    </div>
</body>
</html>