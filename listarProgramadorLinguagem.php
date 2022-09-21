<?php
    //abre a conexao
    require_once('conexao.php');
    error_reporting(0); // aqui remover o notice erro da pagina
    date_default_timezone_set('America/Recife');
    include('templatemenu.html');
    if(isset($_POST["id_programador"])) {
      //mysqli_real_escape_string($link_bd,$string) -  com essa função ele ignora os caracteres especiais e converte tudo em string
      $id_programador= $_POST["id_programador"];
     
      $listarprogramadorlinguagem  = "SELECT * FROM programador_linguagem WHERE id_programador LIKE '$id_programador%'";
    
      $resultado_listar = mysqli_query($conecta,$listarprogramadorlinguagem);
      if(!$resultado_listar) {
          die("Erro no banco");
      }
      


  }
?>
        <div class="col py-3">
          <form action="listarProgramadorLinguagem.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="id_programador">Id do Programador:</label>
                  <input type="text" class="form-control" id="idProgramador" placeholder="Escreva o id do programador" name="id_programador" >
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
                    <th>ID PROGRAMADOR</th>
                    <th>ID LINGUAGEM</th>
                </tr>
                <tr>
                    <td><?php echo $linha["id_programador"]?></td>
                    <td><?php echo $linha["id_linguagem"]?></td>                                  
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