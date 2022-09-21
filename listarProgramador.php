<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["nome_programador"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $nome_programador= $_POST["nome_programador"];
     
      $listarprogramador  = "SELECT * FROM programador WHERE nome_programador LIKE '$nome_programador%'";
    
      $resultado_listar = mysqli_query($conecta,$listarprogramador);
      if(!$resultado_listar) {
          die("Erro no banco");
      }

  }
?>
        <div class="col py-3">
          <form action="listarProgramador.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="nomeProgramador">Nome do Programador:</label>
                  <input type="text" class="form-control" id="nomeProgramador" placeholder="Escreva o nome do programador" name="nome_programador" >
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
                    <th>ID Programador</th>
                    <th>ID Startup</th>
                    <th>Nome do Programador</th>
                    <th>Gênero</th>
                    <th>Data de Nascimento</th>
                    <th>E-mail</th>
                </tr>
                <tr>
                    <td><?php echo $linha["id_programador"]?></td>
                    <td><?php echo $linha["id_startup"]?></td>
                    <td><?php echo $linha["nome_programador"]?></td>
                    <td><?php echo $linha["genero"]?></td>
                    <td><?php echo $linha["data_nascimento"]?></td>
                    <td><?php echo $linha["email"]?></td>                                        
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

