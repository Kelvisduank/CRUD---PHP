<?php
header("Content-Type: text/html; charset=UTF-8");
echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Negado</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            text-align: center;
        }
        .container {
            padding: 20px;
            border: 2px solid #f5c6cb;
            background-color: #f8d7da;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        img {
            width: 100px;
            height: auto;
            margin-bottom: 15px;
        }
        h1 {
            font-size: 24px;
            margin: 10px 0;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="NEGADO.jpg" alt="Acesso Negado">
        <h1>Acesso Negado</h1>
        <p>Você não tem permissão para acessar esta página.</p>
           <form action="index.php" method="get">
        <button type="submit">Voltar para o Início</button>
    </form>
        
        
    </div>
</body>
</html>';
?>