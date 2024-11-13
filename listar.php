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
    //parâmetros para conexão no banco de dados;
    $host="10.10.131.46";
    $username="teco";
    $password="sicug5";
    $db ="db11";

    //cria objeto para conexão no banco de dados
    $mysqlConnection=@new mysqli($host,$username,$password);

    //Verifica se está conectando ao banco de dados
    if (mysqli_connect_errno()){
        printf("Falha na conexão:%s\n", mysqli_connect_errno());
        exit();
    }

    //Selecionar o banco de dados
    $mysqlConnection->select_db($db);

    //Criar instrução SQL
    $sql="SELECT * FROM Veiculos";

    //Recuperar (Extrair) os dados
    $resultado=$mysqlConnection->query($sql);
    ?>
    <?php
        $title="Meu site";
        include("header.php");
    ?>
    <body>
        <div class="container" id="container_01">
            <?php include("nav.php"); ?>
            <?php include("remover.php");?>
            <div class="row" id="row_01">

    <div class="offset-3 col-6" id="row_02">
        <table class="table table-striped border text-center">
            <thead class="table table-primary">
                <tr>
                    <th>Codigo_carro</th> <th>Nome_carro</th> <th>Genero_carro</th>
                    <th>Ano_carro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($resultado as $registro) { //Imprimir todos os campos
                    printf(" <tr>
                    <td>%s</td>   <td>%s</td>
                    <td>%s</td>   <td>%s</td>
                    
                  </tr>",
                      $registro["Codigo_carro"], $registro["Nome_carro"],
                      $registro["Genero_carro"], $registro["Ano_carro"],
                      
                    );   
                }
                ?>
            </tbody>
        </table><!-- Fechamento da tabela -->
    </div><!-- Fechamento da div row_02 -->
            </div><!-- Fechamento da div row_01 -->
        </div><!-- Fechamento da div container row_01 -->
</body>
