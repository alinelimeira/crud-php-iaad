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
      $atualizarstartup  = "UPDATE startup SET cidade_sede='$cidadestartup' WHERE nome_startup = '$nomestartup'";
    
      $operacao_atualizar = mysqli_query($conecta,$atualizarstartup);
      if(!$operacao_atualizar) {
          die("Erro no banco");
      }
      echo '<script language="javascript">';
      echo 'alert("Startup atualizada com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="atualizarStartup.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="nomestartup">Nome exato da Startup a ser atualizada:</label>
                  <input type="nomestartup" class="form-control" id="nomestartup" placeholder="Escreva o nome da startup" name="nomestartup">
                </div>
                <div class="mb-3 mt-3">
                  <label for="cidadestartup">Atualização para a Cidade :</label>
                  <input type="cidadestartup" class="form-control" id="cidadestartup" placeholder="Escreva a nova cidade da startup" name="cidadestartup">
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
          </form>
        </div>
    </div>
    </div>
    <script src="script\bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
    // Fechar conexao
    mysqli_close($conecta);
?>

