<!DOCTYPE html>
<html>
    <head>
        	
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <link rel="stylesheet" type="text/css" href="css/estilomenu.css" />
        <script type="text/javascript" src="javascript/script.js"></script>
        <script type="text/javascript" src="javascript/validaCampo.js"></script>
        <script type="text/javascript" src="javascript/viaCep.js"></script>
    </head>
    <body>
        <form name="validaheader" class="header" method="$_POST" action="caluloDiaria.php">
            <div id="check">
            Pessoas
            <input class="in_date" type="text" id="myInput" placeholder="0 pessoas" oninput="myFunction()">
            check-in
            <input class="in_date" type="date" id="Input" placeholder="0 pessoas" oninput="myFunction()">
          
            check-on
            <input class="in_date" type="date">
            <p id="dem"></p>
            <p id="demo"></p>
            <script>
            function myFunction() {
                var x = document.getElementById("myInput").value;
                     document.getElementById("dem").innerHTML ="NA"+ x ;
}
function myFunction() {
                var a = document.getElementById("Input").value;
                 document.getElementById("demo").innerHTML =   a ;
}
</script>
</div >
        </form>

 <div class="sidenav">
         <input type="checkbox" id="chec"/>
         <label for="chec">
             <img id="risco" src="imagens/riscoimagen.png"/>
         </label>
          
         

          
        <nav >
        
            
            <div class="ul">
               <div>
                    <input type="button" id ="loB" class="menuButton"  onclick="acaoLogin('logi','cadastro','butfoto','inB')" value="Login"/>
              </div>
   
               <form name="navlogin" id="logi" class="h">
                    <input id="logininput" name="email" type="email" name="email"placeholder="    E-mail" />
                    <input name="email" type="password" name="senha"placeholder="    Senha" />
                    <input  class="menuButton"type="submit" name="enviar" />
                </form>        
    
<!-- o paranetro pega o id fo form para fecha e o id do button para fechar o buton-->
                <input type="button" id="cadastro" class="menuButton" onclick="acao('cadast','foto','infor','loB')" value="Cadastro Usuário"/>
         
      <form name="form" id="cadast" class="hidden" onSubmit="return validacao();" action="dados.php" method="$_GET">
        
                 <input  name="nome"  type="text" placeholder="               Nome" />
        
                 <input name="email" type="email" name="email"placeholder="               E-mail" />
            
                 <input name="cpf"  type="text" name="cpf" placeholder="               CPF"/>
            
                 <input name="telefone"  type="text" name="telefone" placeholder="               Telefone" />
            
                 <input name="cep"  type="text" name="telefone" placeholder="               CEP" id= "cep" onblur="pesquisacep(this.value);"/>
                
                 <input name="cidade"  type="text" name="bairro" placeholder="               Cidade"id="cidade" />
                
                 <input name="bairro"  type="text" name="bairro" placeholder="               Bairro"id="bairro" />
            
                 <input name="lograduoro"  type="text" name="logradouro"  placeholder="               Logradouro" id="rua"/>
            
                 <input name="numero"  type="number" name="numero" placeholder="               Número" />

             <input class="menuButton"type="submit" name="enviar" />
        </form>
        <div id="foto"  class="hidde">
            <input type="button" id ="butfoto" class="menuButton" onclick=" acaoFotos('inB','foto','cadast','login')" value="Fotos"/>
          
        </div> 
                    <div id="infor" class="hidde" >
                        <input type="button" id="inB" class="menuButton" onclick="acaoInformacao('inf','foto','cadast','logi')" value="Informacoes"/>
                    </div>
     </nav>                
    
        <iframe
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCSO45Jd8GCAAN9KoKQAbWL4G-GWifMr1Y &q=Pousada Dunas do Jalapão" allowfullscreen>
        
        </iframe> 
       

</div>
    <div class="content">
      

    </div>
    <div class="content">
        
        <div  class="fotos" >
            <img  src="imagens/jalapa.jpg"/>
        </div>

        <div  class="fotos" >
            <img  src="imagens/jalapa.jpg"/>
        </div>

        <div  class="fotos" >
            <img  src="imagens/jalapa.jpg"/>
        </div>
        
    </div>

</body>
</html>