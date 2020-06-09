<?php
$botao = isset($_GET['enviar']);
if($botao !=0){

$nome= $_GET['nome'];
$email= $_GET['email'];
$cpf=$_GET['cpf'];
$telefone=$_GET['telefone'];
$cep= $_GET['cep'];
$bairro=$_GET['bairro'];
$lograduoro=$_GET['lograduoro'];
$numero=$_GET['numero'];
echo $nome;
echo $email;
echo $cpf;

}