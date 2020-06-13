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
        <form name="validaheader" class="header" method="$_GET" >
            <div id="check">
            Pessoas
            <input class="in_date" type="text" id="myInput" placeholder="0 pessoas"name="pessoas" >
            check-in
            <input class="in_date" type="numero" id="Input"  name= "entrada"  placeholder="00/00/0000">
          
            check-on
            <input class="in_date" type="numero"   name= "saida"  placeholder="00/00/0000" /> 
            <img id="risc" src="imagens/brasil.jpg" style=" "/>
            <input  type="submit"   name= "enviar" style=" ; margin-left: 143px; margin-top: 20px;  width: 125px; height: 25px;">
            <?php
            include('data.php');
            $botao = isset($_GET['enviar']);
            if($botao !=0){
                $pessoa= $_GET['pessoas'];
                $entrada= $_GET['entrada'];
                $saida= $_GET['saida'];
                
                
                $dia = new Data();
                $valor = (50 * $dia->dias($entrada,$saida));
                echo "<label  style=''> Pessoas: ".$pessoa.   "   /    Dias: ".$dia->dias($entrada,$saida)."  /  R$:  ".$valor."<label>";
            }
            ?>
            </form>
        </div >
        
        <div class="sidenav">
         <input type="checkbox" id="chec"/>
         <label for="chec">
             <img id="risco" src="imagens/riscoimagen.png"/>
            </label>
          
            
            
            
        <nav >
            
            
            <div class="ul">
                <div>
                    <input type="button" id ="loB" class="menuButton"  onclick="acaoLogin('logi','cadastro','inB')" value="Login"/>
                </div>
                
               <form name="navlogin" id="logi" class="h">
                   <input id="logininput" name="email" type="email" name="email"placeholder="    E-mail" />
                   <input name="email" type="password" name="senha"placeholder="    Senha" />
                    <input  class="menuButton"type="submit" name="enviar" />
                </form>        
                
                <!-- o paranetro pega o id fo form para fecha e o id do button para fechar o buton-->
                <input type="button" id="cadastro" class="menuButton" onclick="acao('cadast','inB','loB')" value="Cadastro Usuário"/>
                
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
             <div >
                        <input type="button" id="inB" class="menuButton" onclick="acaoInformacao('cadastro','infor','loB')" value="Informacoes"/>
                        <div  id="infor" class="hidde"   >
                            <h3>Aldeir Francisco da Silva</h3>
                            <p>Faculdade Projeção <br>Curso de Tads</br>Terceiro Semestre </p>
                             <a href="https://www.linkedin.com/">LinkedIn</a>
                             <a href="https://github.com">github</a>
                           
                             <h3>Matheus Rabelo Sousa</h3>
                            <p>Faculdade Projeção <br>Curso de Tads</br>Terceiro Semestre </p>
                             <a href="https://www.linkedin.com/in/matheus-rabelo-2a7b27196/">LinkedIn</a>
                             <a href="https://github.com/theus520">github</a>
                  </div>
                  </div> 
                </nav>                
    
                <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCSO45Jd8GCAAN9KoKQAbWL4G-GWifMr1Y &q=Pousada Dunas do Jalapão" allowfullscreen>
                
            </iframe> 
            
            
        </div>
        <div class="content">
                    <div id="hora">
                   <script language=javascript type="text/javascript">
                   now = new Date
                   document.write ( now.getDate() + " / " + now.getMonth()+" / " + now.getFullYear() )
                   </script>
                   </div>
               
                
    </div>
    <div class="content">

    <div  class="fotos" >
            <img  src="imagens/douro.jpg"/>
     </div>

     <div  class="text" >
            <h3 >Os fervedouros do Jalapão  são algumas de  suas atrações mais populares</h3>
            <p>O mais famosos fervedouros  é também o maior de todos – com 15 metros de diâmetro <br> e 35 metros de 
                profundidade de águas extremamente cristalinas e incrivelmente azuis,é garantia de um passeio relaxante e imperdível.<br> E, 
                assim como em todos os outros fervedouros, <br> é impossível de afundar, mesmo sendo tão profundo!
                O “deserto das águas” lhe convida. E é difícil resistir. <br>
                Encravado no meio do cerrado do Tocantins, mais parece uma miragem, 
                porém não é ilusão.<br> É Jalapão!  <p>
        </div>
            
        <div  class="formig" >
            <img  src="imagens/formig.jpg"/>
     </div>  
         
     <div  >
         <h3 style="margin-left: 550px;">Cachoeira do Formiga</h3>
        <p style="margin-left: 10px;">O intenso verde esmeralda da água da Cachoeira do Formiga
 encanta os turistas que visitam o Jalapão. 
A cachoeira está entre as mais belas da região e, 
com toda certeza, entre as mais visitadas. 
A queda d'água não é muito grande, mas a
 piscina que se forma é maravilhosa!</p>
     </div>       
                    
 </body>
 </html>