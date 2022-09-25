<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <!--<link href="style\bootstrap.min.css" rel="stylesheet"> -->
    <style>
        h2{
            display: block;
            width: 78%;
            text-align: center;
            padding: 1%;
            margin: 1.4% auto 0 auto;
        }
      .submenu{
        list-style-type: none;
        display: block;
        float: left;
        width: 20%;
        height: 25%;
        padding: 4%;
        box-shadow: 2px 2px 7.4px gray;
        border-radius: 20%;
        margin: 5px 10px 10px 10px;
        background-color: #212529;
      }
      .submenu li{
       display: none;
       padding: 3%;
      }
      .submenu li a{
        text-decoration: none;
        color: blue;
        font: normal 16px arial;
      }
      .submenu:hover li{
        display:block;
        padding-top: 2%;
      }
      .submenu:hover .titulo{
        color: red;
        position: static;
        margin-top: 1%;
        margin-bottom: 4%;
      }
      .submenu:hover .titulo span{
        font-size: 16px;
      }
      .submenu li:hover a{
        color: #ffffff;
      }
      #aux1, #aux2{
        list-style-type: none;
        border: 0px;
        width: 12%;
        margin:0;
        background-color: white;
        box-shadow: none;
      }
      body{
        background: url("style/sRFEa8lbeC7zbcIZZR.gif") no-repeat;
        background-size: 100%;
      }
      #tela{
        height: 750px;
        margin: 0;
      }
      #menu-home{
        width: 80%;
        height: 100%;
        padding: 1% 0 0 0 ;
        margin: 0 auto 0 auto;
        display: block;
        background: #ffffff;
        border-radius: 5%;
      }
      .titulo span{
        margin: 0 auto 0 auto;
        display: block;
        text-align: center;
        width: 100%;
        height: 20px;
        font: bold 20px arial;
        color: #ffffff;
      }
      .titulo{
        text-decoration: none;
        position: relative;
        top: 40%;
        cursor: pointer;
        width: 100%;
        display: block;
      }
      #texto-sel{
        width: 100%;
        display: block;
        clear: both;
        margin: 10px 0 10px 0;
      }
      #texto-sel p{
        display: block;
        font: bold 18px arial;
        text-align: center;
        margin: auto;
      }
    </style>
  </head>
  <?php #include('templatemenu.html')?>    

    <div id="tela"> 
        <ul id="menu-home">
        <h2>CRUD STARTUP</h2>
            <li class="submenu" id="aux1"></li>  
            <li class="submenu" id="startup">
                <a  class="titulo">
                    <span>Startup</span> </a>
                <ul>
                    <li>
                        <a href="cadastrarStartup.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastrar startup</span></a>
                    </li>
                    <li>
                        <a href="listarStartup.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Listar startups</span></a>
                    </li>
                    <li>
                        <a href="atualizarStartup.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Atualizar startups</span></a>
                    </li>
                    <li>
                        <a href="deletarStartup.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Deletar startups</span></a>
                    </li>
                </ul>
            </li>
            <li class="submenu" id="programador">
                <a class="titulo">
                <span>Programador</span></a>
                <ul>
                    <li>
                        <a href="cadastrarProgramador.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastrar Programador</span></a>
                    </li>
                    <li>
                        <a href="listarProgramador.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Listar Programadores</span></a>
                    </li>
                    <li>
                        <a href="atualizarProgramador.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Atualizar Programador</span></a>
                    </li>
                    <li>
                        <a href="deletarProgramador.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Deletar Programador</span></a>
                    </li>
                </ul>
            </li>
            <div style="clear:both;"></div>

            <div id="texto-sel"><p>Escolha quais operações deseja realizar:</p></div>
            <li class="submenu" id="aux2"></li>  
            <li class="submenu" id="linguagem">
                <a class="titulo">
                <span>Linguagem</span></a>
                <ul>
                    <li>
                        <a href="cadastrarLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastrar Linguagem</span></a>
                    </li>
                    <li>
                        <a href="listarLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Listar Linguagem</span></a>
                    </li>
                    <li>
                        <a href="atualizarLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Atualizar Linguagem</span></a>
                    </li>
                    <li>
                        <a href="deletarLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Deletar Linguagem</span></a>
                    </li>
                </ul>
            </li>
            <li class="submenu" id="programador-linguagem">
                <a class="titulo">
                <span>Programador Linguagem</span></a>
                <ul>
                    <li>
                        <a href="cadastrarProgramadorLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastrar Programador Linguagem</span></a>
                    </li>
                    <li>
                        <a href="listarProgramadorLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Listar Programador Linguagem</span></a>
                    </li>
                    <li>
                        <a href="atualizarProgramadorLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Atualizar Programador Linguagem</span></a>
                    </li>
                    <li>
                        <a href="deletarProgramadorLinguagem.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Deletar Programador Linguagem</span></a>
                    </li>
                </ul>
            </li>   
            <div style="clear:both;"></div>               
        </ul>
    </div>
    <script src="script\bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
    // Fechar conexao
    mysqli_close($conecta);
?>

