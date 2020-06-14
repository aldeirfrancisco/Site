<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <link rel="stylesheet" type="text/css" href="css/estilomenu.css" />
    </head>
    <body>
    
        <div class="layout">
                 <div  class="divlay">
                     <img class="imagLog" src="imagens/cadeado.png">
                 </div>
                 <div  class="divlay">
                     <a id="a" href="paginaPrincipal.php">  <img class="imagLo" src="imagens/casa.png"> </a>
                 </div >
                <div  class="divl">
                     <p id="p">Bem vindo</p>
                </div >
        </div>
        <div class="content">

            <div id="hora">
           <script language=javascript type="text/javascript">
           now = new Date
           document.write ( now.getDate() + " / " + now.getMonth()+" / " + now.getFullYear() )
           </script>
           </div>
        
       </div>
      
       <div id="divdados">
           <form id="formid" action="deletar.php" method="$_GET"><br>
      
                    <input class="logado"  type="text" name="cpf" required="true"  placeholder="000.000.000-00" >
                    <br>
                    <input class="logado"  type="text" name="nome" placeholder="        Nome" >
                    <br>
                    <input class="logado"   type="email" name="email" placeholder="       E-mail">
                    <br>
                    <input class="logado"  type="text" name="telefone" placeholder="       Telefone">
                    <br>
                    <input class="logado"  type="text" name="cep" placeholder="       Cep">
                    <br>
                    <input class="logado"  type="text" name="cidade" placeholder="      Cidade">
                    <br>
                    <input class="logado"   type="text" name="bairro" placeholder="      Bairro">
                    <br>
                    <input class="logado"   type="text" name="rua" placeholder="      Rua">
                    <br>
                    <input class="logado"  type="number" name="numero" placeholder="     Número">
                    <br>
                    <input style="width: 26%;   margin-left: 0px;" type="submit" name="enviar">
                    <input style="width: 26%;   margin-left: 0px;" type="submit" name="deletar" value="Deletar">
            </form>
        </div>

    </body>
</html>