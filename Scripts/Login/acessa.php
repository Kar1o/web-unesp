 <?php
session_start();
 //acessando a variavel de sessão
 if (!empty($_SESSION["usuario"]))
 {//usuário logado, incluir o script..
 echo ' <html>

<head>
 <title>Exemplo de Cadastro</title>
</head>
...//apresenta todo o formulario
 '; //fim do echo
 }
 else
 {
 //o usuário não realizou a autenticação
 echo "Efetue login para acessar essa área...";
 }
   ?>
