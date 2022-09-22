<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_linguagem"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $id_linguagem = $_POST["id_linguagem"];
    
      if(!empty($id_linguagem)){
        $listarlinguagem  = "SELECT * FROM linguagem_programacao WHERE id_linguagem = '$id_linguagem'";

      }else{
        $listarlinguagem  = "SELECT * FROM linguagem_programacao";
      }

      $resultado_listar = mysqli_query($conecta,$listarlinguagem);
      if(!$resultado_listar) {
          die("Erro no banco");
      }

  }
?>
        <div class="col py-3">
          <form action="listarLinguagem.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="id_linguagem">ID da Linguagem a ser pesquisada:</label>
                  <input type="text" class="form-control" id="id_linguagem" placeholder="Escreva o ID da linguagem" name="id_linguagem">
                </div>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
          </form>
          <br> <br> <br>
          <?php
           if(mysqli_num_rows($resultado_listar) > 0){ 
            while($linha = mysqli_fetch_assoc($resultado_listar)){
          ?>
              <table style="width: 50%;">
                <tr>
                  <th>ID</th>
                  <th>NOME DA LINGUAGUEM</th>
                  <th>ANO DE LANÇAMENTO</th>
                </tr>
                <tr>
                  <td><?php echo $linha["id_linguagem"]?></td>
                  <td><?php echo $linha["nome_linguagem"]?></td>
                  <td><?php echo $linha["ano_lancamento"]?></td>
                </tr>
              </table>
          <?php
            }
          }
          ?>
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

