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
      $inserirprogramadorlinguagem  = "INSERT INTO programador_linguagem (id_programador,id_linguagem) VALUES ('$id_programador','$id_linguagem')";
    
      $operacao_inserir = mysqli_query($conecta,$inserirprogramadorlinguagem);
      if(!$operacao_inserir) {
          die("Erro no banco, verifique os campos");
      }
      echo '<script language="javascript">';
      echo 'alert("Programador linguagem inserido com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="cadastrarProgramadorLinguagem.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="id_programador">Id Programador:</label>
                  <input type="id_programador" class="form-control" id="id_programador" placeholder="Escreva o id do programador" name="id_programador">
                </div>
                <div class="mb-3 mt-3">
                  <label for="id_linguagem">Id Linguagem:</label>
                  <input type="id_linguagem" class="form-control" id="id_linguagem" placeholder="Escreva o id da linguagem" name="id_linguagem">
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