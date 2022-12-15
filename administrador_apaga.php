<?php   
 include 'conexao.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM Cliente WHERE idCliente = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:administrador.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 

