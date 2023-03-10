<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    require_once 'link.php';
    require_once 'menu.php';

    ?>

</head>
<body>
    <section id="conteudo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 m-3">
                            <h2 class="mt-5 ml-2" style="font-size: 40px;" >Cadastre-se</h2>
                            <form method="POST" action="login-cadastro_grava.php" name="login-cadastro_grava" id="login-cadastro_grava">
                            <div class="form-group">
                                <select class="form-control  m-2 col-12" id="tipo_pessoa" name="tipo_pessoa" onchange="exibir_ocultar(this)">
                                    <option id="selecione" value="selecione" name="selecione">Selecione</option>
                                    <option id="pessoa_fisica" value="pessoa_fisica" name="pessoa_fisica">Pessoa Fisica</option>
                                    <option id="pessoa_juridica" value="pessoa_juridica" name="pessoa_juridica">Pessoa Juridica</option>
                                </select>
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="nome" name="nome" placeholder="Nome: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="razao" name="razao" placeholder="Razão Social: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="fantasia" name="fantasia" placeholder="Nome Fantasia: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="email"id="email" name="email" placeholder="E-mail:  " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="password"id="senha" name="senha" placeholder="Senha:  " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="cpf" name="cpf" placeholder="CPF: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="dataDeNascimento" name="dataDeNascimento" placeholder="Data de Nascimento: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="cnpj" name="cnpj" placeholder="CNPJ: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="cep" name="cep" placeholder="CEP: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="logradouro" name="logradouro" placeholder="Logradouro: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="numero" name="numero" placeholder="Número: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="complemento" name="complemento" placeholder="Complemento: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="bairro" name="bairro" placeholder="Bairro: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="cidade" name="cidade" placeholder="Cidade: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="uf" name="uf" placeholder="Estado: " >
                                    <input style="display: none;" class="form-control m-2 col-12" type="text" id="telefone" name="telefone" placeholder="Telefone: ">
                                    <a href="index.php" class="btn btn-secondary ml-2">Voltar</a>	
                                    <button  type="submit" class="btn btn-primary ">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 100px;">
                    <div class="col-md-12 m-3">
                    <img id="img" src="imagens/iphone3.png"  width="100%" height="70%">                           
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php require_once 'rodape.php'?>
<script>
    function exibir_ocultar(val) {
    if(val.value == 'pessoa_fisica') {
        document.getElementById('nome').style.display = 'block';
        document.getElementById('email').style.display = 'block';
        document.getElementById('senha').style.display = 'block';
        document.getElementById('cpf').style.display = 'block';
        document.getElementById('dataDeNascimento').style.display = 'block';
        document.getElementById('cnpj').style.display = 'none';
        document.getElementById('razao').style.display = 'none';
        document.getElementById('fantasia').style.display = 'none';
        document.getElementById('cep').style.display = 'block';
        document.getElementById('logradouro').style.display = 'block';
        document.getElementById('numero').style.display = 'block';
        document.getElementById('cidade').style.display = 'block';
        document.getElementById('complemento').style.display = 'block';
        document.getElementById('bairro').style.display = 'block';
        document.getElementById('uf').style.display = 'block';
        document.getElementById('telefone').style.display = 'block';


    } else if(val.value == 'pessoa_juridica') {
        document.getElementById('nome').style.display = 'none';
        document.getElementById('email').style.display = 'block';
        document.getElementById('senha').style.display = 'block';
        document.getElementById('cpf').style.display = 'none';
        document.getElementById('dataDeNascimento').style.display = 'none';
        document.getElementById('cnpj').style.display = 'block';
        document.getElementById('razao').style.display = 'block';
        document.getElementById('fantasia').style.display = 'block';
        document.getElementById('cep').style.display = 'block';
        document.getElementById('logradouro').style.display = 'block';
        document.getElementById('numero').style.display = 'block';
        document.getElementById('cidade').style.display = 'block';
        document.getElementById('complemento').style.display = 'block';
        document.getElementById('bairro').style.display = 'block';
        document.getElementById('uf').style.display = 'block';
        document.getElementById('telefone').style.display = 'block';

    }else if(val.value == 'selecione') {
        document.getElementById('nome').style.display = 'none';
        document.getElementById('email').style.display = 'none';
        document.getElementById('senha').style.display = 'none';
        document.getElementById('cpf').style.display = 'none';
        document.getElementById('dataDeNascimento').style.display = 'none';
        document.getElementById('cnpj').style.display = 'none';
        document.getElementById('razao').style.display = 'none';
        document.getElementById('fantasia').style.display = 'none';
        document.getElementById('cep').style.display = 'none';
        document.getElementById('logradouro').style.display = 'none';
        document.getElementById('numero').style.display = 'none';
        document.getElementById('cidade').style.display = 'none';
        document.getElementById('complemento').style.display = 'none';
        document.getElementById('bairro').style.display = 'none';
        document.getElementById('uf').style.display = 'none';
        document.getElementById('telefone').style.display = 'none';
    }
    }

</script>



</body>
</html>