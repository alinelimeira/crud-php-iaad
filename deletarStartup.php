<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Startup</title>
  </head>
  <body>

    <?php
      //abre a conexao
      require_once('conexao.php');
      error_reporting(0); // aqui remover o notice erro da pagina
      date_default_timezone_set('America/Recife');
      include('templatemenu.html');
      if(isset($_POST["id_startup"])) {
        //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
        $id_startup = $_POST["id_startup"];
        $deletarstartup  = "DELETE FROM startup WHERE id_startup = '$id_startup'";
      
        $operacao_deletar = mysqli_query($conecta,$deletarstartup);
        if(!$operacao_deletar) {
            die("Erro no banco");
        }
        echo '<script language="javascript">';
        echo 'alert("Startup excluída com sucesso!");';
        echo 'window.location.href="deletarStartup.php";</script>';
      }
    ?>

    <div class="col py-3">
      <form action="deletarStartup.php" method="POST">
        <div class="mb-3 mt-3">
          <label for="idstartup">ID da Startup:</label>
          <input type="text" class="form-control" id="idstartup" placeholder="Escreva o ID da startup que será excluída" name="id_startup">
        </div>
          <button type="submit" class="btn btn-primary">Excluir</button>
      </form>
    </div>
    <script src="script\bootstrap.bundle.min.js"></script>
    <?php
      // Fechar conexao
      mysqli_close($conecta);
    ?>
  </body>
</html>

