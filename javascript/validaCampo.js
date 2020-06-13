
            function validacao(){
              
                switch(""){
                    case document.form.nome.value: alert("Por favor, preencha o campo  NOME.");
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
                    case document.form.telefone.value: alert("Por favor, preencha o campo TELEFONE.");
                    document.form.telefone.focus();
                    return false;
                    break;
                    case document.form.cep.value:  alert("Por favor, preencha o campo CEP.");
                    document.form.cep.focus();
                    return false;
                    break;
                  
                    case document.form.numero.value:  alert("Por favor, preencha o campo NÚMERO.");
                    document.form.numero.focus();
                    return false;
                    break; 
                    
                }
                  
            }
           