<?php

//Cria sessão
session_start();

//Verifica se tem usuário logado
if(!isset($_SESSION["login"])){
 //Redirecionado para a tela de login(index.php)
 header("location:acessonegado.php");
}
?>
    
    
    
    <?php
    $title="Meu site";
    include("header.php");
    ?>
    <body>
        <div class="container">
            <?php include("nav.php"); ?>
            <div class="row">

    <!---ÍNICIO DO CÓDIGO DA TELA DE CADASTRO--->

    <h1 class="text-center">Cadastro de Carros</h1>
    <div class="col-4 offset-4">

    <form action="inserir.php" method="post">

    <label class="form-label" for="Codigo_Filme">Código do veiculo:</label>
    <input name="Codigo_carro" class="form-control" id="clienteId">

    <label class="Nome_Filme" for="nome">Nome</label>
    <input name="Nome_carro" class="form-control" id="nome">

    <label class="form-label" for="Genero_Filme">Marca:</label>
    <input name="Genero_carro" class="form-control" id="endereco">

    <label class="form-label" for="Ano_Filme">Ano</label>
    <input name="Ano_carro" class="form-control" id="cidade">



    <input type="submit" class="form-control btn btn-outline-success mt-3" value="Cadastrar">

</form>
</div>

<!---FIM DO CÓDIGO DA TELA DE CADASTRO--->

</div>
</div>
</body>