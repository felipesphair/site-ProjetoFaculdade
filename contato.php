<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    require_once 'link.php';
    require_once 'menu.php';
    require_once 'conexao.php';
    ?>

</head>
<body>
    <section id="conteudo">
        <div class="container" style="margin-top: 100px;" >
            <div class="row" style="margin-bottom: 100px;">
                <div class="col-md-6">
                    <div class="col-md-12 m-3">
                            <h2 class="mt-5 ml-2" style="font-size: 40px;" >Fale Conosco</h2>
                            <form method="POST" action="" name="" id="">
                            <div class="form-group">
                                    <input class="form-control m-2 col-12" type="text" id="nome" name="nome" placeholder="Nome: " required>
                                    <input class="form-control m-2 col-12" type="text" id="telefone" name="telefone" placeholder="Telefone: ">
                                    <textarea class="form-control m-2" id="msg" rows="6" placeholder="Mensagem:"></textarea>
                            </div>
                            <button  type="reset" class="btn btn-danger m-2 ">Apagar</button>
                            <button  type="submit" class="btn btn-primary m-2 ">Enviar</button>

                        </form>
                    </div>
                </div>
               
                <div class="col-md-6 mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.593007304916!2d-49.25329838498529!3d-25.45186688377841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4fa6efc3181%3A0x8b0f452491a6f477!2sPUCPR%20-%20Pontif%C3%ADcia%20Universidade%20Cat%C3%B3lica%20do%20Paran%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1668425724559!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php require_once 'rodape.php'?>
</body>
</html>