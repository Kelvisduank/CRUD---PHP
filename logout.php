<?php
   //Cria a sessão para verificar se tem dados anteriores
   session_start();

   //Finaliza a sessão e todas suas informações
   session_destroy();

   //Retorna para a página do formulário
   header("location:index.php");

?>