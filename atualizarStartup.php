<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Startup</title>
  </head>
  <body>
    <?php
      //abre a conexao
      require_once('conexao.php');
      error_reporting(0); // aqui remover o notice erro da pagina
      date_default_timezone_set('America/Recife');
      include('templatemenu.html');
      if(isset($_POST["nomestartup"]) && isset($_POST["cidadestartup"]) && isset($_POST["id_startup"])) {
        //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
        $id_startup = $_POST["id_startup"];
        $nomestartup = $_POST["nomestartup"];
        $cidadestartup = $_POST["cidadestartup"];
        $atualizarstartup  = "UPDATE startup SET cidade_sede='$cidadestartup' WHERE nome_startup = '$nomestartup'";
      
        if(!empty($nomestartup)){
          $atualizarstartup  = "UPDATE startup SET nome_startup='$nomestartup' WHERE id_startup = '$id_startup'";
          $operacao_atualizar = mysqli_query($conecta,$atualizarstartup);
          if(!$operacao_atualizar) {
              die("Erro no banco");
          }
        }

        if(!empty($cidadestartup)){
          $atualizarstartup  = "UPDATE startup SET cidade_sede='$cidadestartup' WHERE id_startup = '$id_startup'";
          $operacao_atualizar = mysqli_query($conecta,$atualizarstartup);
          if(!$operacao_atualizar) {
              die("Erro no banco");
          }
        }
        
        echo '<script language="javascript">';
        echo 'alert("Startup atualizada com sucesso!");';
        echo 'window.location.href="atualizarStartup.php";</script>';
      }
    ?>
    <div class="col py-3">
      <form action="atualizarStartup.php" method="POST">
        <div class="mb-3 mt-3">
          <label for="idstartup">ID da Startup:</label>
          <input type="text" class="form-control" id="idstartup" placeholder="Escreva o ID da startup que será atualizada" name="id_startup">
        </div>
        <div class="mb-3 mt-3">
          <label for="nomestartup">Nome da Startup:</label>
          <input type="text" class="form-control" id="nomestartup" placeholder="Escreva o novo nome da startup" name="nomestartup">
        </div>
        <div class="mb-3 mt-3">
          <label for="cidadestartup">Atualização para a Cidade :</label>
          <input type="text" class="form-control" id="cidadestartup" placeholder="Escreva a nova cidade da startup" name="cidadestartup">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
    </div>
    <script src="script\bootstrap.bundle.min.js"></script>
    <?php
      // Fechar conexao
      mysqli_close($conecta);
    ?>
  </body>
</html>


