<?php
if(isset($_SESSION['autenticado'])){
    
?>
<html>
        <header id="topo" class="escond">
        <div class="container">
            <h1 id="logo">
                <a href="http://sydrack.projetointegrador.org"></a>
            </h1>
            <form action="home" method="POST">
            <input type="hidden" name="logout" value="logout">
            <nav id="header">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="series">Séries</a></li>
                    <li><a href="">Filmes</a></li>
                    <li class="autenticado">Olá, <?php echo $_SESSION['autenticado']; ?></li>
                    <li>
                        <button type="submit" class="btn-logout" value="logout">Sair</button>
                        
                    </li>
                    </form>
                </ul>
            </nav>
         
                <form action="" method="get" id="busca">
                    <input type="text" class="bg-busca" name="busca" placeholder="Faça sua busca por todo o site">
                    <input type="submit" class="btn-busca" value>
                </form>
           
        </div>
        </header>
</html>
<?php
}
else{
?>
<html>
        <header id="topo" class="escond">
        <div class="container">
            <h1 id="logo">
                <a href="http://sydrack.projetointegrador.org"></a>
            </h1>
            
            <nav id="header">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="series">Séries</a></li>
                    <li><a href="">Filmes</a></li>
                    <li><a href="cadastrar">Cadastro</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
            </nav>
         
                <form action="" method="get" id="busca">
                    <input type="text" class="bg-busca" name="busca" placeholder="Faça sua busca por todo o site">
                    <input type="submit" class="btn-busca" value>
                </form>
           
        </div>
        </header>
</html>
<?php
}
?>
