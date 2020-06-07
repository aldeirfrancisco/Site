<?php
//$butao = isset($_POST["enviar"]);
//if($butao !=0){


   class SalvaDado {

   public $nome = "aldeir";
   public $email="dider@gmail";
   public $cpf ="999999999";
   public $telefone="12334455";
    public $cep ="73080100";
 //  public $logradouro="q 1 conj a ";
   public  $numero = 10;



  public function enderecoPorCep(){
    //*removendo caracter não numerico
    $cep = preg_replace("/[^0-9]/"," ", $this->cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
}

}

   

    //verifica as variavel
/*if(empty($nome) && empty($email)){
  if(empty($senha)&& empty($id)){


  }
}*/