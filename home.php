<?php
if(isset($_POST['logout']) == "logout"){
        echo 'oi';
    session_destroy();
        
}
?>
<div id="box-noticia" class="animacao">
                <table>
                    <tbody>
                        <tr>
                            <th class="titulo" colspan="2"> Últimas Notícias</font></th>
                        </tr>
                        <tr>
                            <td><a href="noticia"><img src="../is/noticia.jpg" alt="UT"></a></td>                            
                        </tr>                       
                    </tbody>
                </table>
            </div>
            <div id="box-cartaz">
                <table id="em-cartaz">
                    <tbody>
                        <tr>
                            <th class="titulo" colspan="2"> Em Cartaz </th>
                        </tr>
                        <tr>
                            <td><img src="../is/angry-birds1.jpg"</td>                           
                            <td><img src="../is/x-men.jpg"</td>
                        </tr>
                    </tbody>
                </table>
            </div>
 
