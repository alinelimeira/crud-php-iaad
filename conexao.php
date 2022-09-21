<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "startup";
$conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
mysqli_set_charset( $conecta, 'utf8');
//Passo 2 - Testar conexao
    if ( mysqli_connect_errno() )
    { 
        die("Conexao Falhou: " . mysqli_connect_errno());
    }
?>
