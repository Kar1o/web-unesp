<?php
SESSION_START();
include ("conecta.php");

//verifica se login e senha foram informados 
if (empty($_POST["USR_LOGIN"]) or empty($_POST["USR_SENHA"]))
echo "Login e/ou Senha nao informados";

else {
$USR_LOGIN = $_POST["USR_LOGIN"];
$USR_SENHA = $_POST["USR_SENHA"];

$sql= "select * from tb_login where tb_usr_login = '$USR_LOGIN' and tb_usr_passw = '$USR_SENHA'";
$busca = mysql_query($sql);
$total = mysql_num_rows($busca);
//se retornou pelo menos um registro

if ($total == 1 )
 /*{
//recupera os dados do usuário
$dados= mysql_fetch_array($busca);
echo 'Ola ' . $dados["tb_usr_login"] . ' voce esta logado como ' . $dados["tb_usr_tipo"];
} //usuario invalido
else echo "Usuário inválido";
} */
{
 //recupera os dados do usuário e registra as variáveis de sessão
 $dados= mysql_fetch_array($busca);

//essa variável de sessão $_SESSION[usuario] deverá ser verificada 
//em todos os scripts, garantindo que realmente o usuário está autenticado

$_SESSION["usuario"] = "aceito"; 

$_SESSION["nome_usuario"] = $dados["tb_usr_login"];

$_SESSION["tipo_usuario"] = $dados["tb_usr_tipo"];
 echo "Ola " . $_SESSION["nome_usuario"]. " voce esta logado como " . $_SESSION["tipo_usuario"];
 echo "<meta http-equiv='refresh' content='0; url=../../Html/EscolheTabela.htm'>";
  include("../../Html/EscolheTabela.htm");
 }
 else echo "Usuario Invalido";
 }



?>
