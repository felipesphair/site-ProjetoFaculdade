<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
    require_once 'conexao.php';
    require_once 'link.php';
    require_once 'menu.php';
   
    session_start();

?>
</head>
<body>

    <section id="conteudo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 m-3">
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM Cliente WHERE idCliente = $id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                    ?>
                    <h2 class="mt-5 ml-2" style="font-size: 40px;" >Editar Dados: </h2>
                    <form method="POST" action="login_editar_gravar.php" name="login_editar_gravar" id="login_editar_gravar">
                    <div class="form-group">
                            <input class="form-control m-2 col-12" type="email"id="email" name="email" value="<?php echo $row['email']?>">
                            <input class="form-control m-2 col-12" type="password"id="senha" name="senha" value="<?php echo $row['senha']?>">
                            <input class="form-control m-2 col-12" type="text" id="cep" name="cep" value="<?php echo $row['cep']?>">
                            <input class="form-control m-2 col-12" type="text" id="logradouro" name="logradouro" value="<?php echo $row['logradouro']?>">
                            <input class="form-control m-2 col-12" type="text" id="numero" name="numero" value="<?php echo $row['numero']?>">
                            <input class="form-control m-2 col-12" type="text" id="complemento" name="complemento" value="<?php echo $row['complemento']?>">
                            <input class="form-control m-2 col-12" type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']?>">
                            <input class="form-control m-2 col-12" type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']?>">
                            <input class="form-control m-2 col-12" type="text" id="uf" name="uf" value="<?php echo $row['uf']?>">
                            <input type="hidden" name="idCliente" id="idCliente" value="<?php echo $row['idCliente']?>">
                            <button type="submit" class="btn btn-info">Editar</button>
                    </div>
                </form>
<?php
    }
    else{
        echo "erro"; 
    }
?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>