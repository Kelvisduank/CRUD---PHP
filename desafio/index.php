<?php

     //Cria a sessão
     session_start();

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
    }else{
        echo("Conectado ao banco de dados com sucesso!");
    }

    //Exibe informações sobre a extensão PHP
    //echo("<pre>");
    //print_r($mysqlConnection);
    //echo("</pre>");
    
    //Selecionar o banco de dados
    $mysqlConnection->select_db($db);

    //Mensagem para o usuario

    $message="";

    //Continua o codigo abaixo

    //if- Verifica se o login esta preenchido
    if(isset($_POST["btn_login"])and $_POST["login"]!=""){

        //Receba os valores dos campos do formulario
        $login=$_POST["login"];
        $senha=md5($_POST["senha"]); //Gera o formato(hash)md5 da senha

        //A sessão armazena o login recebido via formulário
        $_SESSION["login"]=$_POST["login"];

        //Selecionar um registro na tabela usuarios com login e senha
        $query="SELECT * FROM Usuarios WHERE login='$login' AND senha='$senha'";

        //Resultado do select(Objeto)
        $select_result=$mysqlConnection->query($query);

        //Verifica se foi encontrado registro
        if($select_result->num_rows==0){
            //Mensagem de usário e senha inválidos
            $message = '<div class="alert alert-danger" role="alert">
                        Usuário ou senha incorretos!
                        </div>';
        }else{
            //Redireciona para a página(home.php)
            header("location:home.php");
        }//Verifica se foi encontrado registro
    }//if-Verifica se o login foi preenchido
?>

<?php
  $title="Meu site";
  include("header.php");
?>

<!---ÍNICIO DO CÓDIGO DA TELA DE LOGIN--->
<body>
    <div class="container" id="container_01">
        <div class="row" id="row_01">

        <h1 class="text-center">Login</h1>

        <div class="col-4 offset-4" id="row_02">
            <?=$message?>
            <form action="" method="post" class="borde borde-primary rounded p-3">

            <label class="form-label" for="senha">Usuário:</label>
            <input name="login" class="form-control" id="login">

            <label class="form-label" for="login">Senha:</label>
            <input name="senha" type="password" class="form-control" id="senha">

            <input name="btn_login" type="submit" class="form-control btn btn-primary mt-3" value="Login">

</form>

</div><!--Fechamento da div row_02-->

</div><!--Fechamento da div row_01-->
</div><!--Fechamento da div container_01-->
</body>

<!---FIM DO CÓDIGO DA TELA DE LOGIN--->
