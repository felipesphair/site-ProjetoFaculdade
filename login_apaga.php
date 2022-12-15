<?php

require_once 'conexao.php';


session_start();

$idCliente = $_SESSION['idCliente'];
    
$sql = mysqli_query($conn, "DELETE FROM Cliente WHERE idCliente = '$idCliente'");



//$idCliente=$_POST['idCliente']; 
//$idCliente = $_SESSION['idCliente'];

//$sql = "DELETE FROM Cliente WHERE idCliente = $idCliente AND idCliente = '$idCliente'"; 

//$resultado = mysqli_query($conn, $sql);


if($sql){
    echo"<div class='alert alert-danger'><strong>SUA CONTA FOI APAGADA!</strong></div"; 
    header('Location:login.php');
}else{
    echo 'erro'; 
}

?>