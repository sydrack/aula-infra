<?php
define("DATABASE", "host=sydrack.projetointegrador.org port=5432 dbname=sydrack_db user=sydrack password=977173");

    function validaFormPhp($nome,$data,$email,$usuario,$senha1,$senha2){

        if(!isset($nome[2])){
            $erros[] = 'Seu nome deve conter 3 ou mais caracteres.';
        }

        if((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))){
            $erros[] = 'Envie um email válido.';
        }

        if(!isset($usuario[3])){
            $erros[] = 'Usuario deve conter 4 ou mais caracteres.';
        }

        if(!isset($senha1[5])){
            $erros[] = 'Senha deve conter 6 ou mais caracteres.';
            if(($senha1 != isset($senha2))){
                $erros[] = 'As senhas devem ser identicas.';
            }
        }

        if(isset($erros)){
            return $erros;
        }
        
        if(count(isset($erros) != 0)){
            if(salvaUsuario($usuario,$senha1,$nome,$email,$data)){
                return true;
            }
            else{
                return false;
            }
        }
    }
    
    function salvaUsuario($login,$senha,$nome,$email,$data){
        $db = pg_connect (DATABASE);
        $consulta = pg_query($db, "SELECT * FROM usuario");
        $liberado = true;
        
        while ($row = pg_fetch_assoc($consulta)) {
            if($row['login'] == "$login" || $row['email'] == "$email"){
                $liberado = false;
                return false;
            }
        }
        
        if(isset($liberado)){
            $result = pg_query($db, "INSERT INTO usuario (login,senha,nome,email,data_nascimento) VALUES ('$login','$senha','$nome','$email','$data')");
            return true;
        }    
    }
    
    function validaLogin($login, $senha){
        $db = pg_connect (DATABASE);
        $consulta = pg_query($db, "SELECT * FROM usuario");
        $liberado = false;
        
        while ($row = pg_fetch_assoc($consulta)) {
            if($row['login'] == "$login" && $row['senha'] == "$senha"){
                $liberado = true;
                return true;
            }
        }
        
        if(!$liberado){
            return $liberado;
        }
    }