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
        <?php
        include("nav.php");
        ?>
        <div class="row">
            <h1 class="text-center">
                Seja bem vindo, <?php echo $_SESSION["login"];?>!
            </h1>
            <p class="text-center">
                Obrigado por visitar meu site.
            </p>
            <p class="text-center">
                Fique a vontade para navegar.
            </p>
        </div>
    </div>
</body>