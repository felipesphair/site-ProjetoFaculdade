<?php

require_once 'conexao.php';

$tipo_pessoa = $_POST['tipo_pessoa'];  
$nome = $_POST['nome']; 
$cep = $_POST['cep']; 
$logradouro = $_POST['logradouro']; 
$numero = $_POST['numero']; 
$cidade = $_POST['cidade']; 
$uf = $_POST['uf']; 
$complemento = $_POST['complemento']; 
$bairro = $_POST['bairro'];
$email = $_POST['email']; 
$senha = $_POST['senha'];  
$cpf = $_POST['cpf']; 
$idade = $_POST['idade']; 
$dataDeNascimento = $_POST['dataDeNascimento']; 
$cnpj = $_POST['cnpj']; 
$razao = $_POST['razao']; 
$fantasia = $_POST['fantasia']; 


$sql = "INSERT INTO Cliente (tipo_pessoa, cep, logradouro, numero, cidade, uf, complemento, bairro, email, senha) 
VALUES ('$tipo_pessoa','$cep', '$logradouro', '$numero', '$cidade', '$uf', '$complemento', '$bairro', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {

$last_id = $conn->insert_id;}

if($tipo_pessoa == 'pessoa_fisica'){
    $sql = "INSERT INTO Pessoa_Fisica (nome, cpf, idade, dataDeNascimento, fkCliente) 
    VALUES ('$nome', '$cpf', '$idade', '$dataDeNascimento', $last_id)";
}

if($tipo_pessoa == 'pessoa_juridica'){
    $sql = "INSERT INTO Pessoa_Juridica (cnpj, razao, fantasia, fkClientepj) 
    VALUES ('$cnpj', '$razao', '$fantasia', $last_id)";
}

$resultado = $conn->multi_query($sql); 

//$resultado = mysqli_query($conn, $sql);	

if($resultado){
    header('Location:index.php');
}else{
    echo 'erro'; 
}
    
?>