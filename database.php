<?php

    //servidor
    $nome_servidor = "localhost"; 
    $nome_usuario = "root";  
    $senha = "";   
    $banco ="cadastro";  
   
    //conexao
    $conecta = new mysqli($nome_servidor, $nome_usuario, $senha,$banco); 
        
    
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