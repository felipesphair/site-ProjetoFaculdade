<!DOCTYPE html>
<html lang="pt-br">
    <?php require_once 'link.php';?>
    <?php require_once 'menu.php';?>
    <?php require_once 'conexao.php';?>
    
    <body>
        <!--Inicio Outros-->
        <section id="conteudo">
            <div class="container mt-5">
                <div  class="row">
                <h2 class="mt-5">Parceiros: </h2>    
                <table class="table table-hover table-bordered">
                    <thead class="table-info">
                            <tr>
                                <th>ID</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM Cliente ORDER BY idCliente DESC"; 
                        $resultado = $conn->query($sql); 

                        if($resultado->num_rows > 0){
                            while($registro = $resultado->fetch_assoc()){
                        ?>
                            <tr> 
                                <td><?php echo $registro["idCliente"]?></td>
                                <td><?php echo $registro["bairro"]?></td>
                                <td><?php echo $registro["cidade"]?></td>
                                <td><?php echo $registro["uf"]?></td>
                            </tr>

                        <?php
                            }
                        }
                        ?>
                        </tbody>
                        <tfoot class="table-info">
                            <tr>
                                <th>ID</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                            </tr>
                        </tfoot>
                 </table>
                </div>
            </div>
        </section>
        <!--Fim Outros-->

<!---- JavaScript ----->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>