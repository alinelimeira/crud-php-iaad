<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_startup"]) && isset($_POST["nome_programador"]) && isset($_POST["genero"]) && isset($_POST["data_nascimento"]) && isset($_POST["email"])) {
        //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
        $id_startup = $_POST["id_startup"];
        $nome_programador = $_POST["nome_programador"];
        $genero = strtoupper($_POST["genero"]);
        $data_nascimento = $_POST["data_nascimento"];
        $email = $_POST["email"];
        $inserirProgramador  = "INSERT INTO programador (id_startup, nome_programador, genero, data_nascimento, email) 
                            VALUES ('$id_startup','$nome_programador', '$genero', '$data_nascimento', '$email')";
    
      $operacao_inserir = mysqli_query($conecta, $inserirProgramador);
      if(!$operacao_inserir) {
          die("Erro no banco");
      }
      echo '<script language="javascript">';
      echo 'alert("Programador inserido com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="cadastrarProgramador.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="id_startup">ID da Startup:</label>
                  <input type="text" class="form-control" id="id_startup" placeholder="Escreva a ID da startup" name="id_startup" >
                </div>
                <div class="mb-3 mt-3">
                  <label for="nomeProgramador">Nome do Programador:</label>
                  <input type="text" class="form-control" id="nomeProgramador" placeholder="Escreva o nome do programador" name="nome_programador" >
                </div>
                <div class="mb-3 mt-3">
                  <label for="genero">Gênero:</label>
                  <input type="text" class="form-control" id="genero" placeholder="Escreva o gênero do programador" name="genero" maxlength = "1">
                </div>
                <div class="mb-3 mt-3">
                  <label for="dataNascimento">Data de Nascimento:</label>
                  <input type="date" class="form-control" id="dataNascimento" placeholder="Escreva a data de nascimento do programador" name="data_nascimento">
                </div>
                <div class="mb-3 mt-3">
                  <label for="email">E-mail:</label>
                  <input type="email" class="form-control" id="email" placeholder="Escreva o e-mail do programador" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
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
