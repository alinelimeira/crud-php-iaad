<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_startup"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $id_startup = $_POST["id_startup"];
      
      if(!empty($id_startup)){
        $listarstartup  = "SELECT * FROM startup WHERE id_startup = '$id_startup'";
      }else{
        $listarstartup  = "SELECT * FROM startup";
      }

      $resultado_listar = mysqli_query($conecta,$listarstartup);
      if(!$resultado_listar) {
          die("Erro no banco");
      }

  }
?>
        <div class="col py-3">
          <form action="listarStartup.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="id_startup">ID da Startup a ser pesquisada:</label>
                  <input type="text" class="form-control" id="nomestartup" placeholder="Escreva o ID da startup" name="id_startup">
                </div>
                <button type="submit" class="btn btn-primary">PESQUISAR</button>
          </form>
          <br> <br> <br>
          <?php
           if(mysqli_num_rows($resultado_listar) > 0){ 
            while($linha = mysqli_fetch_assoc($resultado_listar)){
          ?>
              <table style="width: 50%;">
                <tr>
                  <th>ID</th>
                  <th>NOME</th>
                  <th>CIDADE</th>
                </tr>
                <tr>
                  <td width=15%><?php echo $linha["id_startup"]?></td>
                  <td width=30%><?php echo $linha["nome_startup"]?></td>
                  <td width=30%><?php echo $linha["cidade_sede"]?></td>
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

