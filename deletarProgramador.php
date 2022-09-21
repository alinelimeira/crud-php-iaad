<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_programador"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $id_programador = $_POST["id_programador"];
      $deletarprogramador  = "DELETE FROM programador WHERE id_programador = '$id_programador'";
    
      $operacao_deletar = mysqli_query($conecta,$deletarprogramador);
      if(!$operacao_deletar) {
          die("Erro no banco");
      }
      echo '<script language="javascript">';
      echo 'alert("Programador excluído com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="deletarProgramador.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="idProgramador">iD do Programador a ser deletado:</label>
                  <input type="text" class="form-control" id="idProgramador" placeholder="Escreva o ID do programador para excluir" name="id_programador" >
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

