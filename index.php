<?php
session_start();

	$pagina = isset($_REQUEST['pagina']) && !empty($_REQUEST['pagina'])? $_REQUEST['pagina']: 'home';
	

	$paginas = array(
		'home' => array(
			'titulo' => "Cinema News",
			'arquivo' => "home.php"
		),
		'series' => array(
			'titulo' => "Series",
			'arquivo' => "series.php"
		),	
		'cadastrar' => array(
			'titulo' => "Cadastrar",
			'arquivo' => "cadastrar.php"
		),		
		'login' => array(
			'titulo' => "Login",
			'arquivo' => "entrar.php"
		),		
		'404' => array(
			'titulo' => "O que queres?",
			'arquivo' => "notfound.php"
		),
                'prison-break' => array(
			'titulo' => "Prison Break",
			'arquivo' => "prison_break.php"
		),
                'serie=1' => array(
			'titulo' => "Prison Break - 1º Temporada",
			'arquivo' => "prison_break.php"
		),
                'serie=1 temp=1' => array(
			'titulo' => "Prison Break - 1º Temporada",
			'arquivo' => "temporadas/prison_break_temp1.html"
		),
                'noticia' => array(
			'titulo' => "Veja quem quase interpretou...",
			'arquivo' => "noticia.php"
		),
	);
	
	$selecionada = isset($paginas[$pagina])?$paginas[$pagina]:$paginas['404'];
	
?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $selecionada['titulo'];?></title>
        <meta charset="UTF-8">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/validaform.js"></script>
        <link rel="icon" type="image/png" href="images/icone.png" />
    </head>
    <body>
        <?php include_once 'teamplate/header.php'; ?>
        <div id="corpo">
        <?php 
        include_once($selecionada['arquivo']); 
        ?>
        </div>   
        <?php include_once 'teamplate/footer.php'; ?>
    </body>
</html>
