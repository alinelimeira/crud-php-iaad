<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_linguagem"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $id_linguagem = $_POST["id_linguagem"];
      $deletarlinguagem  = "DELETE FROM linguagem_programacao WHERE id_linguagem = '$id_linguagem'";
    
      $operacao_deletar = mysqli_query($conecta,$deletarlinguagem);
      if(!$operacao_deletar) {
          die("Erro no banco");
      }
      echo '<script language="javascript">';
      echo 'alert("Linguagem excluída com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="deletarLinguagem.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="idLinguagem">iD da linguagem a ser deletada:</label>
                  <input type="text" class="form-control" id="idLinguagem" placeholder="Escreva o ID da linguagem para excluir" name="id_linguagem" >
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