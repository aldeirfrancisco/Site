<?php

 class Data{


//metodo a quantidade de dias para hospedar
public function dias($data, $data1){
$data =explode('/',$data);
$data1 =explode('/',$data1);

$df= strtotime("$data[2]-$data[1]-$data[0]");
$d2= strtotime("$data1[2]-$data1[1]-$data1[0]");
 
$datafinal = ($df-$d2)/86400;
if($datafinal < 0 ){
$datafina = $datafinal*-1;
return $datafina;
}else{
  return $datafinal;
}
   

}

 }

 