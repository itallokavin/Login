<?php 

    $hostname = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_raioclin';

    $conexao = new mysqli($hostname,$user,$pass,$db);

    if(!$conexao){
        echo 'Deu erro.';
    }
    else{
        
    }





?>