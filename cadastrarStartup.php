<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Startup</title>
  </head>
  <body>
    <?php
        //abre a conexao
        require_once('conexao.php');
        error_reporting(0); // aqui remover o notice erro da pagina
        date_default_timezone_set('America/Recife');
        include('templatemenu.html');
        if(isset($_POST["nomestartup"]) && isset($_POST["cidadestartup"])) {
          //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
          $nomestartup = $_POST["nomestartup"];
          $cidadestartup = $_POST["cidadestartup"];
          $inserirstartup  = "INSERT INTO startup (nome_startup,cidade_sede) VALUES ('$nomestartup','$cidadestartup')";
        
          $operacao_inserir = mysqli_query($conecta,$inserirstartup);
          if(!$operacao_inserir) {
              die("Erro no banco");
          }
          echo '<script language="javascript">';
          echo 'alert("Startup inserida com sucesso!");';
          echo 'window.location.href="cadastrarStartup.php";</script>';
      }
    ?>
    <div class="col py-3">
      <form action="cadastrarStartup.php" method="POST">
        <div class="mb-3 mt-3">
          <label for="nomestartup">Nome Startup:</label>
          <input type="nomestartup" class="form-control" id="nomestartup" placeholder="Escreva o nome da startup" name="nomestartup" >
        </div>
        <div class="mb-3 mt-3">
          <label for="cidadestartup">Cidade Startup:</label>
          <input type="text" class="form-control" id="cidadestartup" placeholder="Escreva a cidade da startup" name="cidadestartup">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
    <script src="script\bootstrap.bundle.min.js"></script>
    <?php
      // Fechar conexao
      mysqli_close($conecta);
    ?>
  </body>
</html>


