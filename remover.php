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
    //Continua o código abaixo

    //Verifica se a variável "bt_excluir" foi inicializada, se o botão foi apertado
    if(isset($_POST["bt_excluir"])){

        //Valor recebido do campo "codigo_excluir" do formulário
        $Codigo_carro=$_POST["codigo_excluir"];

        //Selecionar o banco de dados
        $mysqlConnection->select_db($db);

        //Cria instrução SQL
        $sql="DELETE FROM Filme WHERE Codigo_carro ='$Codigo_carro'";

        //Executa a instrução SQL
        $resultado=$mysqlConnection->query($sql);

        //Atualiza a página, exibindo os registros atualizados
        header("location:listar.php");

    }
    ?>
    <div class="row" id="row_03">
        <div class="col-4 offset-4 p-3" id="row_04">

            <form action="" method="post">

            <div class="row g-3 align-center" id="row_5">
                <div class="col-auto">
                    <label class="form-control" for="codigo_excluir">Código:</label>
                </div>
                <div class="col-auto">
                    <input name="codigo_excluir" class="form-control" id="codigo_excluir">
                </div>
                <!--Botão Excluir-->
                <div class="col-auto">
                    <input name="bt_excluir" type="submit" class="form-control btn btn-danger" value="Excluir">
                </div>
            </div>  <!--Fechamento da div row_05-->
            
            </form>

        </div><!--Fechamento da div row_04-->
    </div><!--Fechamento da div row_03-->

