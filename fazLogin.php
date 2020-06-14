<?php
 session_start();

 $email=  $_GET['email'];
 $cpf=   $_GET['cpf'];

 $Host ="sql10.freesqldatabase.com";
 $name = "sql10348173";
 $user = "sql10348173";
 $password = "uGSPTJuKp4";



$conexao =new mysqli($Host, $user,  $password,$name); 
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error . "<br>");
}

$sql = "SELECT * FROM usuario WHERE  cpf='$cpf'  AND email='$email'" ;
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION['cpf'] = $cpf;
    $_SESSION['email'] = $email;

    echo "<script>
            window.location.href = 'logado.php';
        </script>";
}
else{
    session_unset();//remove todas as variáveis de sessão
    session_destroy();//destroi a sessão
    echo "<script> 
            alert('E-mail ou CPF incorreto');
            window.location.href = 'paginaPrincipal.php';
        </script>";
  }