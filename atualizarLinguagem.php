<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_linguagem"]) && isset($_POST["nome_linguagem"]) && isset($_POST["ano_lancamento"])) {
      $id_linguagem = $_POST["id_linguagem"];
      $nome_linguagem = $_POST["nome_linguagem"];
      $ano_lancamento = $_POST["ano_lancamento"];

      if (!empty($nome_linguagem)){
        $atualizarlinguagem  = "UPDATE linguagem_programacao SET nome_linguagem ='$nome_linguagem' WHERE id_linguagem = '$id_linguagem'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarlinguagem);

        if(!$operacao_atualizar) {
          die("Erro no banco");
        }
      }
    
      if (!empty($ano_lancamento)){
        $atualizarlinguagem  = "UPDATE linguagem_programacao SET ano_lancamento='$ano_lancamento' WHERE id_linguagem = '$id_linguagem'";
        $operacao_atualizar = mysqli_query($conecta,$atualizarlinguagem);


        if(!$operacao_atualizar) {
          die("Erro no banco");
        }
      }

      echo '<script language="javascript">';
      echo 'alert("Linguagem atualizada com sucesso!");';
      echo 'window.location.href="index.php";</script>';
  }
?>
        <div class="col py-3">
          <form action="atualizarLinguagem.php" method="POST">          
                <div class="mb-3 mt-3">
                  <label for="id_linguagem">ID da Linguagem:</label>
                  <input type="text" class="form-control" id="id_linguagem" placeholder="Escreva o ID da linguagem que será atualizada" name="id_linguagem" >
                </div>
                <div>
                  <label for="nome_linguagem">Nome da Linguagem:</label>
                  <input type="text" class="form-control" id="nome_linguagem" placeholder="Escreva o nome atualizado da linguagem" name="nome_linguagem" >
                </div>
                <div class="mb-3 mt-3">
                  <label for="ano_lancamento">Ano de Lançamento:</label>
                  <input type="text" class="form-control" id="ano_lancamento" placeholder="Escreva o ano de lançamento atualizado da linguagem" name="ano_lancamento">
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