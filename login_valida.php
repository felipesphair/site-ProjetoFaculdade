<?php

session_start();

require_once 'conexao.php';

//O campo usuário e senha preenchido entra no if para validar
if((isset($_POST['email'])) && (isset($_POST['senha']))){
    $email = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    //$senha = md5($senha); 
        
    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $result_usuario = "SELECT * FROM Cliente WHERE email = '$email' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
 
    //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    if($resultado_usuario->num_rows > 0){
        $_SESSION['idCliente'] = $resultado['idCliente'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['nivel'] = $resultado['nivel'];

        if($_SESSION['nivel'] == "cliente"){
            header("Location: login_perfil.php");
        }elseif($_SESSION['nivel'] == "adm"){
            header("Location: administrador.php");
        }
    //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    //redireciona o usuario para a página de login
    }else{    
        //Váriavel global recebendo a mensagem de erro
        // echo "Usuário ou senha Inválido";
        // header("location: login.php");

        ?>
<script>
    alert('Erro'); 
    location.href='login.php';
</script>
        <?php	

    }
//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
}else{
    echo  "Usuário ou senha inválido";
    header("location: login.php");
}
?>