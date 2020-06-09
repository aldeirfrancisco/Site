
function acao(obj,foto){
    if(document.getElementById(obj).style.display == 'block'){
        document.getElementById(foto).style.display = 'block'; 
        document.getElementById(obj).style.display = 'none';
    }else{ 
        document.getElementById(obj).style.display = 'block'; 
        document.getElementById(foto).style.display = 'none'; 

    }
    }
    function acaoFotos(obj,foto){
        if(document.getElementById(obj).style.display == 'block'){
            document.getElementById(foto).style.display = 'none';
        }else{ 
            document.getElementById(foto).style.display = 'block'; 
            document.getElementById(obj).style.display = 'none'; 
        }
        }
        function acaoInformacao(obj,foto){
            if(document.getElementById(obj).style.display == 'block'){
                document.getElementById(foto).style.display = 'none';
            }else{ 
                document.getElementById(foto).style.display = 'block'; 
                document.getElementById(obj).style.display = 'none'; 
            }
            }
        
        

       
          
            