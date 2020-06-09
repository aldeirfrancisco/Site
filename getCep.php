<?php
//$butao = isset($_POST["enviar"]);
//if($butao !=0){


   class SalvaDado {

   
    public $cep ="73080100";



  public function enderecoPorCep($cep){
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