
function acao(cadast,foto,inf){
    if(document.getElementById(cadast).style.display == 'block'){

        document.getElementById(inf).style.display = 'block'; 
        document.getElementById(foto).style.display = 'block'; 
        document.getElementById(cadast).style.display = 'none';
    }else{ 
        document.getElementById(cadast).style.display = 'block'; 
        document.getElementById(foto).style.display = 'none'; 
        document.getElementById(inf).style.display = 'none'; 

    }
    }
    function acaoFotos(cadast,foto,inf){
        if(document.getElementById(cadast).style.display == 'block'){

         
            document.getElementById(foto).style.display = 'none';
            document.getElementById(inf).style.display = 'none'; 
        }else{ 
        
            document.getElementById(inf).style.display = 'block'; 
            document.getElementById(foto).style.display = 'block'; 
         
        }
        }
        function acaoInformacao(cadast,inf, foto){

            if(document.getElementById(cadast).style.display == 'block'){

                document.getElementById(foto).style.display = 'none';  
                document.getElementById(inf).style.display = 'none';
              
            }else{ 
            
                document.getElementById(foto).style.display = 'block'; 
                document.getElementById(inf).style.display = 'block'; 
               
            }
            }
        
        

       
          
            