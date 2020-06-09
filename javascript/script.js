
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
        
        

        function outraFuncao(){
            var x;
           return x= document.getElementById("in_pessoas").value;
        }

            document.getElementById("pagina").innerHTML = outraFuncao();

            function validacao(){
                switch(""){
                    case document.form.nome.value: alert("Por favor, preencha o campo NOME.");
                    document.form.nome.focus();
                    return false;
                    break;
                   case document.form.email.value:  alert("Por favor, preencha o campo EMAIL.");
                    document.form.email.focus();
                    return false;
                    break;
                    case document.form.cpf.value:  alert("Por favor, preencha o campo CPF.");
                    document.form.cpf.focus();
                    return false;
                    break;
                    case document.form.telefone.value:  alert("Por favor, preencha o campo TELEFONE.");
                    document.form.telefone.focus();
                    return false;
                    break;
                    case document.form.cep.value:  alert("Por favor, preencha o campo CEP.");
                    document.form.cep.focus();
                    return false;
                    break;
                    case document.form.bairro.value:  alert("Por favor, preencha o campo BAIRRO.");
                    document.form.bairro.focus();
                    return false;
                    break; 
                    case document.form.logradouro.value:  alert("Por favor, preencha o campo LOGRADOURO.");
                    document.form.logradouro.focus();
                    return false;
                    break;
                    case document.form.numero.value:  alert("Por favor, preencha o campo NÚMERO.");
                    document.form.numero.focus();
                    return false;
                    break;
                }
            }
