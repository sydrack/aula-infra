function validaForm(){
    var nomeCerto = checaNome();
    var estaBom = true;
                
    if(nomeCerto == false){
	estaBom = false;
    }
                
    if(checaDataNull() == false){
            estaBom = false;     
    }
    
    if(checaEmail() == false){
            estaBom = false;  
    }
    
    if(validaSenha() == false){
        estaBom = false;
    }
    
    if(validaUser() == false){
        estaBom = false;
    }
                
                
        return estaBom;      
}
                
            function checaNome(){
                var name = document.forms["form"]["nome"].value;
                if(name.length < 3){
                    var erro = document.forms["form"]["nome"].setAttribute("style","border: 2px solid red;");
                    var erro = document.forms["form"]["nome"].setAttribute("placeholder","Campo Incorreto!");
                    
                    return false;
                }
                return true;
            }
                
            
            function checaDataNull(){
                var data = document.forms["form"]["data"].value;
                
                if(data == ""){
                    var erro = document.forms["form"]["data"].setAttribute("style","border: 2px solid red;");
                    var erro = document.forms["form"]["data"].setAttribute("placeholder","Campo Incorreto!");
                    
                    return false;
                }
                    return true;
            }
            
            function checaEmail(){
                var email = document.forms["form"]["email"].value;
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(re.test(email) == false){
                    var erro = document.forms["form"]["email"].setAttribute("style","border: 2px solid red;");
                    var erro = document.forms["form"]["email"].setAttribute("placeholder","Campo Incorreto!");
                }
                return re.test(email);
            }
            

            function formataData(campo, e){
                var kC = (document.all) ? event.keyCode : e.keyCode;
                var data = campo.value;
                
                
                    if( kC!=8 && kC!=46 )
                    {
                        if( data.length==2 )
                        {
                            campo.value = data += '/';
                        }
                        else if( data.length==5 )
                        {
                            campo.value = data += '/';
                        }
                        else
                            campo.value = data;
                    }
                }
                
            function validaSenha(){
                var senha1 = document.forms["form"]["senha1"].value;
                var senha2 = document.forms["form"]["senha2"].value;
                
                if(senha1.length > 6 && senha2.length > 6){
                    if(senha1 === senha2){
                        return true;
                    }
                    else{
                        var erro = document.forms["form"]["senha1"].setAttribute("style","border: 2px solid red;");
                        var erro = document.forms["form"]["senha1"].setAttribute("placeholder","As senhas não são iguais!");
                        var erro = document.forms["form"]["senha2"].setAttribute("style","border: 2px solid red;");
                        var erro = document.forms["form"]["senha2"].setAttribute("placeholder","As senhas não são iguais!");
                        var senha1 = document.forms["form"]["senha1"].value =("");
                        var senha2 = document.forms["form"]["senha2"].value =("");
                        return false;
                    }
                }
                else{
                    var erro = document.forms["form"]["senha1"].setAttribute("style","border: 2px solid red;");
                    var erro = document.forms["form"]["senha1"].setAttribute("placeholder","Senhas devem ter 6 ou mais caracteres");
                    var erro = document.forms["form"]["senha2"].setAttribute("style","border: 2px solid red;");
                    var erro = document.forms["form"]["senha2"].setAttribute("placeholder","Senhas devem ter 6 ou mais caracteres");
                    var senha1 = document.forms["form"]["senha1"].value =("");
                    var senha2 = document.forms["form"]["senha2"].value =("");
                    return false;
                }
            }
            
            function validaUser(){
                var usuario = document.forms["form"]["usuario"].value;
               
                if(usuario.length < 4){
                    var erro = document.forms["form"]["usuario"].setAttribute("style","border: 2px solid red;");
                    var erro = document.forms["form"]["usuario"].setAttribute("placeholder","Usuário deve ter 4 ou mais caracteres");
                    var usuario = document.forms["form"]["usuario"].value =("");
                    return false;
                }
                else{
                    return true;
                }
            }


