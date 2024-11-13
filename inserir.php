
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
    }else{
        echo("Conectado ao banco de dados com sucesso!");
    }

    //Exibe informações sobre a extensão PHP
    //echo("<pre>");
    //print_r($mysqlConnection);
    //echo("</pre>");
    
    //Selecionar o banco de dados
    $mysqlConnection->select_db($db);

    //Valores postados no formulário de cadastro
    $Codigo_carro=$_POST["Codigo_carro"];
    $Nome_carro=$_POST["Nome_carro"];
    $Genero_carro=$_POST["Genero_carro"];
    $Ano_carro=$_POST["Ano_carro"];
   


    //Criar instrução SQL
    $sql = "INSERT INTO Veiculos(Codigo_carro, Nome_carro, Genero_carro, Ano_carro)
    VALUES ('$Codigo_carro','$Nome_carro','$Genero_carro', $Ano_carro)";

    //inserir a informação
    $mysqlConnection->query($sql);

    //Atualizar página, exibindo o formulário em branco
    header("location:cadastro.php");
    ?>