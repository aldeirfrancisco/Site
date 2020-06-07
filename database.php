<?php

    //servidor
    $nome_servidor = "localhost"; 
    $nome_usuario = "root";  
    $senha = "";   
    $banco ="cadastro";  
   
    //conexao
    $conecta = new mysqli($nome_servidor, $nome_usuario, $senha,$banco); 
        
    
    /*/cria banco
    $sql = "CREATE DATABASE cadastro";  
   
       if ($conecta->query($sql) === TRUE) { 
             echo "Banco de dados criado com sucesso<br>";     
   }    else{     
            echo "Erro na criação do banco de dados: " . $conecta->error."<br>";    
            }
            //cria tabela
            $sql = "CREATE TABLE cliente (nome VARCHAR(100) NOT NULL,  email VARCHAR(50) NOT NULL,  cpf INT(12) NOT NULL, telefone   VARCHAR(15) NOT NULL,  cidade VARCHAR(50) NOT NULL, cep VARCHAR(15) NOT NULL, logradouro VARCHAR(100) NOT NULL, numero INT (5) NOT NULL )";    
             if ($conecta->query($sql) === TRUE) {  
                       echo "Tabela cliente criada com sucesso<br>";   
                 } else {  
                       echo "Erro na criação da tabela cliente: " . $conecta->error."<br>";   
                        }  
                        */
                        include "getform.php";
                         $pegadados = new SalvaDado();
                         $endereco = $pegadados-> enderecoPorCep();

                        $query= "INSERT INTO  cliente(nome, email,cpf,telefone,cidade,cep,logradouro,numero ) VALUES('$pegadados->nome','$pegadados->email','$pegadados->cpf','$pegadados->telefone','$endereco->bairro','$endereco->cep','$endereco->logradouro','$pegadados->numero' )";
    
                        $executar = mysqli_query($conecta,$query);
                                        if($executar){       
                                          
                                          echo  "<script>
                                                     alert('Cadastrado com sucesso.')
                                                  </script>";
                                         
                                        }else{
                                                  echo  "<script>
                                                  alert('Nao cadastrou...')
                                                  </script>";
                                                  
                                                    }
                                    
                                        
                      
?>