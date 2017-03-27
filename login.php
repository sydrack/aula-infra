<?php
    if($_POST['logar']);            
    $usuario = ($_POST['txtusuario']);        
    $senha = ($_POST['txtsenha']);
    $rlogin = "Admin";
    $rsenha = "Admin123";
    
    if(($usuario === $rlogin) && ($senha === $rsenha)){            
        echo 
            '<fieldset>
                <legend>Login</legend>
                <h4 id="processa">Logado com Sucesso!</h4>
            </fieldset>'; 
    }
    else{
        echo '<fieldset>
                <legend>Login</legend>
                <h4 id="processa">Login ou Senha Incorreto!</h4>
            </fieldset>';
    }
    
    ?>