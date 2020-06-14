<?php
   
   
  
   
   $nom = $_GET['nome'];
   $email=  $_GET['email'];
   $cpf=   $_GET['cpf'];
   $telefone=   $_GET['telefone'];
   $cep=    $_GET['cep'];
   $cidade=   $_GET['cidade'];
   $bairro=    $_GET['bairro'];
   $logradouro=  $_GET['rua'];
   $numero=   $_GET['numero'];

    
      $Host ="sql10.freesqldatabase.com";
      $name = "sql10348173";
      $user = "sql10348173";
      $password = "uGSPTJuKp4";
    
   
    
    $conexao =new mysqli($Host, $user,  $password,$name); 
    if ($conexao->connect_error) {
      die("Conexão falhou: " . $conexao->connect_error . "<br>");
  }

     $sql = "INSERT INTO usuario ( cpf,nome, email, telefone, cep, cidade, bairro, logradouro, numero)
       VALUES ( '$cpf','$nom', '$email','$telefone','$cep','$cidade','$bairro','$logradouro','$numero')";
  
   if ($conexao->query($sql) === TRUE) {
          echo "<script>
                  alert('cadastrado com sucesso');
                  window.location.href = 'paginaPrincipal.php';
                </script>";
                
  } else {
          
           echo "<script> 
           alert('Erro o cadastro não foi cadastrado');
         
          </script>" .$conexao->error;
           
        }
        $conexao->close();    
  
                             
 
?>