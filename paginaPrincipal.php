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
</div>
        </form>

        <div class="sidenav">
            <input type="checkbox" id="chec"/>
         <label for="chec">
             <img src="imagens/riscoimagen.png"/>
         </label>
        <nav >
            <div id="ul">
                <input type="button" class="menuButton" onclick="acao('cadast','foto','inf')" value="Cadastro Usuário"/>
                <div>
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
                
                 <input style=" display: ;" class="menuButton"type="submit" name="enviar" />
                </form>
       <div id="foto"  class="hidde">
        <input type="button" class="menuButton" onclick=" acaoFotos('inf','foto','cadast')" value="Fotos"/>
       </div>
            <div id="inf" >
                <input type="button" class="menuButton" onclick="acaoInformacao('inf','foto','cadast')" value="Informacoes"/>
                <div>
         </div>
      </div> 
    </nav>
           
        </div>
        <div class="content">
            <h2 style="text-align: center;margin-top: 200px;">CSS Template</h2>
            
            <p id="pagina"></p>
            <script>
                document.getElementById("pagina").innerHTML = outraFuncao();
            </script>
          </div>
          
        
     </body>
</html>