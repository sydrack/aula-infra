<?php 
if(isset($_POST['nome'])){
    require_once 'biblioteca.php';
    
        $nome = $_POST['nome'];        
        $data = $_POST['data'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha1 = $_POST['senha1'];
        $senha2 = $_POST['senha2'];


        if(validaFormPhp($nome,$data,$email,$usuario,$senha1,$senha2)){
            echo '<div id="box-cadastro">';
            echo '<div class="msg-cadastroSucess">';
            echo 'Cadastro realizado com sucesso!';
            echo '</div>';
            echo '</div>';
            
            $_SESSION['autenticado'] = $usuario;          
        }
        
        else{
            echo '<div id="box-cadastro">';
            echo '<div class="msg-cadastroFail">';
            echo 'Seu nome de Usuario ou Email ja esta cadastrado!';
            echo '</div>';
            echo '</div>';
        }
        
       /* if(){
            echo '<div id="box-cadastro">';
            echo '<div class="msg-cadastro">';
            foreach($erros as $erro){
                echo $erro;
            }
            echo '</div>';
            echo '</div>';
        }*/
    
}   
    
  else{  
    
?>
<div class="form">         
    <form method="post" action="cadastrar" name="form" onsubmit="return validaForm()">
                <fieldset>
                    
                <legend>Novo Usuário </legend>
                <label for="nome">Nome Completo
                    <input type="text" name="nome" id="txtnome"  maxlength="200" >
                </label><br>
                <label for="nascimento">Nascimento
                    <input maxlength="10" type="text" name="data" id="data" onkeypress="formataData(this, event)">
                </label><br>    
                <label for="email">Email
                    <input type="text" name="email" id="txtemail"  maxlength="200" >
                </label><br>
                <label for="usuario">Usuário
                    <input type="text" name="usuario" id="txtusuario" >
                </label><br>
                <label for="senha">Senha
                    <input type="password" id="txtsenha" name="senha1" >
                </label><br>
                <label for="senha2">Confirmar Senha
                    <input type="password" id="txtsenha2" name="senha2" >
                </label><br><br><br>
                <label>
                    <input class="btn-cadastrar" type="submit" name="cadastrar" value="Cadastrar"> 
                </label>
                </fieldset>
    
            </form>
</div>
<?php
  }
 