<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["nomestartup"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $nomestartup = $_POST["nomestartup"];
      $cidadestartup = $_POST["cidadestartup"];
      $deletarstartup  = "DELETE FROM startup WHERE nome_startup = '$nomestartup'";
    
      $operacao_deletar = mysqli_query($conecta,$deletarstartup);
      if(!$operacao_deletar) {
          die("Erro no banco");
      }
      echo '<script language="javascript">';
      echo 'alert("Startup excluída com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="deletarStartup.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="nomestartup">Nome da Startup a ser deletada:</label>
                  <input type="nomestartup" class="form-control" id="nomestartup" placeholder="Escreva o nome da startup para excluir" name="nomestartup">
                </div>

                <button type="submit" class="btn btn-primary">Excluir</button>
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

