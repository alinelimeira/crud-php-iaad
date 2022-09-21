<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(!empty($_POST["id_programador"])) {
      $id_programador = $_POST["id_programador"];
      $id_startup = $_POST["id_startup"];
      $nome_programador = strtoupper($_POST["nome_programador"]);
      $genero = strtoupper($_POST["genero"]);
      $data_nascimento = $_POST["data_nascimento"];
      $email = $_POST["email"];

      if (!empty($_POST["id_startup"])){
        $atualizarprogramador  = "UPDATE programador SET id_startup='$id_startup' WHERE id_programador = '$id_programador'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarprogramador);

        if(!$operacao_atualizar) {
          die("Erro no banco");
        }
      }
    
      if (!empty($_POST["nome_programador"])){
        $atualizarprogramador  = "UPDATE programador SET nome_programador='$nome_programador' WHERE id_programador = '$id_programador'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarprogramador);

        if(!$operacao_atualizar) {
          die("Erro no banco");
        }
      }

      if (!empty($_POST["genero"])){
        $atualizarprogramador  = "UPDATE programador SET genero ='$genero' WHERE id_programador = '$id_programador'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarprogramador);

        if(!$operacao_atualizar) {
          die("Erro no banco");
        }
      }

      if(!empty($_POST["data_nascimento"])){
        $atualizarprogramador  = "UPDATE programador SET data_nascimento ='$data_nascimento' WHERE id_programador = '$id_programador'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarprogramador);
        if(!$operacao_atualizar) {
            die("Erro no banco");
        }
      }

      if(!empty($_POST["email"])){
        $atualizarprogramador  = "UPDATE programador SET email='$email' WHERE id_programador = '$id_programador'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarprogramador);
        if(!$operacao_atualizar) {
            die("Erro no banco");
        }
      }

      echo '<script language="javascript">';
      echo 'alert("Programador atualizado com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="atualizarProgramador.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="nomeProgramador">ID do programador a ser atualizado:</label>
                  <input type="text" class="form-control" id="id_programador" placeholder="Escreva a ID do programador que será atualizado" name="id_programador" >
                </div>            
                <div class="mb-3 mt-3">
                  <label for="nomeProgramador">Nome do programador:</label>
                  <input type="text" class="form-control" id="nomeProgramador" placeholder="Escreva o nome do programador" name="nome_programador" >
                </div>
                <div>
                  <label for="id_startup">ID da Startup:</label>
                  <input type="text" class="form-control" id="id_startup" placeholder="Escreva o novo ID da startup" name="id_startup" >
                </div>
                <div class="mb-3 mt-3">
                  <label for="genero">Gênero atualizado:</label>
                  <input type="text" class="form-control" id="genero" placeholder="Escreva o novo gênero do programador" name="genero" maxlength = "1">
                </div>
                <div class="mb-3 mt-3">
                  <label for="dataNascimento">Data de Nascimento:</label>
                  <input type="date" class="form-control" id="dataNascimento" placeholder="Escreva a nova data de nascimento do programador" name="data_nascimento">
                </div>
                <div class="mb-3 mt-3">
                  <label for="email">E-mail:</label>
                  <input type="email" class="form-control" id="email" placeholder="Escreva o novo e-mail do programador" name="email">
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