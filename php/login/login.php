<?php include('../conexao.php');
session_start();

    $usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
    $senha =  mysqli_real_escape_string($conexao,$_POST['senha']);  
    
    $sql = "SELECT * from tbl_usuario where usuario = '{$usuario}' and senha = '{$senha}'";
    $result = mysqli_query($conexao,$sql);

    $rows = mysqli_num_rows($result);

    if($rows == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: ../painel.php');
        exit();
    }
    else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../../index.php');
        exit();
    }
    
?>