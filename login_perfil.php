<?php 
    require_once 'conexao.php';

    session_start();
    
    $_SESSION['idCliente'];
    $_SESSION['email']; 
    $_SESSION['nivel'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php require_once 'link.php';?>
    <?php require_once 'menu.php';?>
    <body>
        <!--Inicio Outros-->
        <section id="conteudo">
            <div class="container mt-5">
                <div  class="row">
                <h2 class="mt-5">Dados: </h2>    
                <table class="table table-hover table-bordered">
                    <thead class="table-info">
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Nivel</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php
                            echo "
                                <tr> 
                                    <td>".$_SESSION['idCliente']."</td>
                                    <td>".$_SESSION['email']."</td>
                                    <td>".$_SESSION['nivel']."</td>
                                    <td><a href='login_editar.php?id=".$_SESSION['idCliente']."' class='btn btn-warning btn-sm'>EDITAR</a></td>                      
                                </tr>
                                ";        
                    ?>
                    </tbody>
                        <tfoot class="table-info">
                            <tr>
                            <th>ID</th>
                                <th>Email</th>
                                <th>Nivel</th>
                                <th>Ação</th>
                            </tr>
                        </tfoot>
                 </table>
                </div>
            </div>
        </section>
<br>
