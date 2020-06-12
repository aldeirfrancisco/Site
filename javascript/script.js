
function acaoLogin(login,cadastB,fotoB,infB){
    if(document.getElementById(login).style.display == 'block'){

        document.getElementById(login).style.display = 'none'; 

        document.getElementById(cadastB).style.display = 'block'; 
        document.getElementById(fotoB).style.display = 'block';
        document.getElementById(infB).style.display = 'block';
       
    }else{ 

        document.getElementById(login).style.display = 'block'; 

        document.getElementById(cadastB).style.display = 'none'; 
        document.getElementById(fotoB).style.display = 'none';
        document.getElementById(infB).style.display = 'none';
    }
}

function acao(cadast,foto,inf,login){
    if(document.getElementById(cadast).style.display == 'block'){
      
        document.getElementById(cadast).style.display = 'none';

        document.getElementById(login).style.display = 'block'; 
        document.getElementById(inf).style.display = 'block'; 
        document.getElementById(foto).style.display = 'block'; 
    }else{ 

        document.getElementById(cadast).style.display = 'block'; 

        document.getElementById(foto).style.display = 'none'; 
        document.getElementById(login).style.display = 'none'; 
        document.getElementById(foto).style.display = 'none'; 
        document.getElementById(inf).style.display = 'none'; 

    }
    }
    function acaoFotos(cadast,foto,inf,login){
        if(document.getElementById(foto).style.display == 'block'){

            document.getElementById(foto).style.display = 'none';

            document.getElementById(login).style.display = 'block';          
            document.getElementById(cadast).style.display = 'block';
            document.getElementById(inf).style.display = 'block';    
        }else{ 
            ocument.getElementById(login).style.display = 'none';        
            document.getElementById(cadast).style.display = 'none'; 
            document.getElementById(inf).style.display = 'none'; 
            document.getElementById(foto).style.display = 'block'; 
         
        }
        }
        /**falta daqui parabaixo */
        function acaoInformacao(cadast,inf, foto){

            if(document.getElementById(cadast).style.display == 'block'){

                document.getElementById(foto).style.display = 'none';  
                document.getElementById(inf).style.display = 'none';
              
            }else{ 
            
                document.getElementById(foto).style.display = 'block'; 
                document.getElementById(inf).style.display = 'block'; 
               
            }
            }

       
          
            