
function acaoLogin(login,cadastB,infB){
    if(document.getElementById(login).style.display == 'block'){

        document.getElementById(login).style.display = 'none'; 

        document.getElementById(cadastB).style.display = 'block'; 
      
        document.getElementById(infB).style.display = 'block';
       
    }else{ 

        document.getElementById(login).style.display = 'block'; 

        document.getElementById(cadastB).style.display = 'none'; 
       
        document.getElementById(infB).style.display = 'none';
    }
}

function acao(cadast,inf,login){
    if(document.getElementById(cadast).style.display == 'block'){
      
        document.getElementById(cadast).style.display = 'none';

        document.getElementById(login).style.display = 'block'; 
        document.getElementById(inf).style.display = 'block'; 
       
    }else{ 

        document.getElementById(cadast).style.display = 'block'; 
        document.getElementById(login).style.display = 'none'; 
       
        document.getElementById(inf).style.display = 'none'; 

    }
    }
   
       
        /**falta daqui parabaixo */
        function acaoInformacao(cadast,inf,login){

            if(document.getElementById(inf).style.display == 'block'){
                
                document.getElementById(cadast).style.display = 'block'; 
                document.getElementById(inf).style.display = 'none';
                document.getElementById(login).style.display = 'block'; 
            }else{ 
                document.getElementById(inf).style.display = 'block'; 
                document.getElementById(cadast).style.display = 'none';
                document.getElementById(login).style.display = 'none'; 
            }
            }

            
          
            