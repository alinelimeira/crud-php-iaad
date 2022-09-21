<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_programador"]) && isset($_POST["id_linguagem"])) {
      $id_programador = $_POST["id_programador"];
      $id_linguagem = $_POST["id_linguagem"];
      $id_programadornovo = $_POST["id_programadornovo"];
      $id_linguagemnovo = $_POST["id_linguagemnovo"];

      if (!empty($id_programadornovo)){
        $atualizarprogramadorlinguagem  = "UPDATE programador_linguagem SET id_programador='$id_programadornovo' WHERE id_programador = '$id_programador' && id_linguagem = '$id_linguagem'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarprogramadorlinguagem);

        if(!$operacao_atualizar) {
          die("Erro no banco");
        }
      }
      if (!empty($id_linguagem)){
        $atualizarprogramadorlinguagem  = "UPDATE programador_linguagem SET id_linguagem='$id_linguagemnovo' WHERE id_programador = '$id_programador' && id_linguagem = '$id_linguagem'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarprogramadorlinguagem);

        if(!$operacao_atualizar) {
          die("Erro no banco");
        }
      }



      echo '<script language="javascript">';
      echo 'alert("Programador linguagem atualizado com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="atualizarProgramadorLinguagem.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="idProgramador">ID do programador a ser atualizado:</label>
                  <input type="text" class="form-control" id="id_programador" placeholder="Escreva a ID programador do programador linguagem" name="id_programador" >
                </div>            
                <div class="mb-3 mt-3">
                  <label for="idLinguagem">ID da linguagem:</label>
                  <input type="text" class="form-control" id="nomeProgramador" placeholder="Escreva o ID linguagem do programador linguagem" name="id_linguagem" >
                </div>
                <div>
                  <label for="idProgramadornovo">ID programador novo:</label>
                  <input type="text" class="form-control" id="id_programadornovo" placeholder="Escreva o novo ID programador" name="id_programadornovo" >
                </div>
                <div class="mb-3 mt-3">
                  <label for="idLinguagemnovo">ID linguagem novo:</label>
                  <input type="text" class="form-control" id="id_linguagemnovo" placeholder="Escreva o novo ID linguagem" name="id_linguagemnovo" >
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
