<?php
require_once 'biblioteca.php';

    if(isset($_POST)){
          
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
        }
        else{
            echo '<div id="box-cadastro">';
            echo '<div class="msg-cadastro">';
            foreach($erros as $erro){
                echo $erro;
            }
            echo '</div>';
            echo '</div>';
        }
            
        
    
    }
    
    ?>