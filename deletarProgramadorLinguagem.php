<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_programador"]) && isset($_POST["id_linguagem"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $id_programador = $_POST["id_programador"];
      $id_linguagem = $_POST["id_linguagem"];
      $deletarprogramadorlinguagem  = "DELETE FROM programador_linguagem WHERE id_programador = '$id_programador' and id_linguagem = '$id_linguagem'";
    
      $operacao_deletar = mysqli_query($conecta,$deletarprogramadorlinguagem);

      if(!empty($id_programador) && !empty($id_linguagem)){
        $operacao_deletar = mysqli_query($conecta,$deletarprogramadorlinguagem);
        if(!$operacao_deletar) {
            die("Erro no banco");
        }
        echo '<script language="javascript">';
        echo 'alert("Programador linguagem excluído com sucesso!");';
        echo 'window.location.href="index.php";</script>';
      }else{
        echo '<script language="javascript">';
        echo 'alert("Erro na operação!");';
        echo 'window.location.href="index.php";</script>';
    }
  }
?>
        <div class="col py-3">
          <form action="deletarProgramadorLinguagem.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="idProgramador">id programador a ser deletado:</label>
                  <input type="text" class="form-control" id="idProgramador" placeholder="Escreva o ID do programador para excluir" name="id_programador" >
                  <label for="idLinguagem">id linguagem a ser deletado:</label>
                  <input type="text" class="form-control" id="idProgramador" placeholder="Escreva o ID da linguagem para excluir" name="id_linguagem" >
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