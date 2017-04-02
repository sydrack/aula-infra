<?php
if(isset($_POST['usuario'])){
require_once 'biblioteca.php';
    
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    if(validaLogin($login, $senha)){
        $_SESSION['autenticado'] = $login;
        
        echo '<div id="box-cadastro">';
        echo '<div class="msg-cadastroSucess">';
        echo 'Login realizado com sucesso!';
        echo '</div>';
        echo '</div>';
        
        
    }
}
else{
?>
<div class="form">
    <form method="post" action="login.php" name="login" id="cadastro" onsubmit="return validaLogin()">
                <fieldset>
                
                <legend>Login </legend>
                <div class="inputs-login">
                <label for="usuario">Usuário:
                <input type="text" name="usuario" id="usuario"/>
                </label><br>
                <label for="senha">Senha:
                <input type="password" id="senha" name="senha"/><br />
                </label><br>
                <label>
                    <input class="btn-cadastrar" type="submit" name="logar" value="Logar" />
                </label>
                </div>
                </fieldset>
                
                
            </form>
          </div>
<?php
}
