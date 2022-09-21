<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["nomelinguagem"]) && isset($_POST["nomelinguagem"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $nomelinguagem = $_POST["nomelinguagem"];
      $anolancamento = $_POST["anolancamento"];
      $inserirlinguagem  = "INSERT INTO linguagem_programacao (nome_linguagem,ano_lancamento) VALUES ('$nomelinguagem','$anolancamento')";
    
      $operacao_inserir = mysqli_query($conecta,$inserirlinguagem);
      if(!$operacao_inserir) {
          die("Erro no banco, verifique os campos");
      }
      echo '<script language="javascript">';
      echo 'alert("Linguagem inserida com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="cadastrarLinguagem.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="nomelinguagem">Nome da linguagem:</label>
                  <input type="nomelinguagem" class="form-control" id="nomelinguagem" placeholder="Escreva o nome da linguagem" name="nomelinguagem">
                </div>
                <div class="mb-3 mt-3">
                  <label for="anolancamento">Ano lançamento:</label>
                  <input type="anolancamento" class="form-control" id="anolancamento" placeholder="Escreva ano de lancamento" name="anolancamento">
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