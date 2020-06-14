<?php

$Host ="sql10.freesqldatabase.com";
 $name = "sql10348173";
 $user = "sql10348173";
 $password = "uGSPTJuKp4";
 $enviar =$_GET['enviar'];
 $deletar =$_GET['deletar'];
   $cpf =$_GET['cpf'];
   $nome = $_GET['nome'];
   $email=  $_GET['email'];
   $telefone=   $_GET['telefone'];
   $cep=    $_GET['cep'];
   $cidade=   $_GET['cidade'];
   $bairro=    $_GET['bairro'];
   $logradouro=  $_GET['rua'];
   $numero=   $_GET['numero'];



$conexao =new mysqli($Host, $user,  $password,$name); 
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error . "<br>");
}
//deletar dados
if($deletar){
$sql = "DELETE FROM usuario WHERE cpf ='$cpf'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao)) {
        echo "<script>
            alert('Contato excluído com sucesso!');
            window.location.href = 'paginaPrincipal.php';   
        </script>";
    } 
    else {
        echo  
            "<script>
                alert('Erro ao excluir Contato. Id não encontrado.');
                window.location.href = 'logado.php';
            </script>";
    }

    
}
if($enviar){
   
    $sql =  "UPDATE usuario SET cpf ='$cpf',nome='$nome',email= '$email',telefone='$telefone',cep='$cep',cidade='$cidade',bairro='$bairro',logradouro='$logradouro',numero='$numero'";

    if ($conexao->query($sql) === TRUE) {
        echo "<script> 
                alert('Dados atualizados com sucesso!');
                window.location.href = 'logado.php';
            </script>";
    
} else {
    echo "<script> 
                alert('Erro na atualização do contato. Id não encontrado.');
                window.location.href = 'logado.php';
            </script>" . $conexao->error;
}

}
mysqli_close($conexao);

?>