<?php
    require_once 'conexao.php';
    
    if(isset($_POST['idCliente']))
    {
        $idCliente = $_POST['idCliente']; 
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro']; 
        $numero = $_POST['numero']; 
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf']; 
        $complemento = $_POST['complemento']; 
        $bairro = $_POST['bairro'];
        $email = $_POST['email']; 
        $senha = $_POST['senha'];   

        $sql = "UPDATE Cliente SET cep='$cep', logradouro='$logradouro', numero='$numero', cidade='$cidade', uf='$uf',complemento='$complemento',
        bairro='$bairro', email='$email', senha='$senha' WHERE idCLiente = '$idCliente'"; 
        
        $resultado = mysqli_query($conn,$sql);
    }  
    header('Location:login_perfil.php'); 
?>

   
    

    


