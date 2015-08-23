<script language="javascript" type="text/javascript" src="aceita_excluir.js"></script>
<?php
SESSION_START();
 if(empty($_SESSION["usuario"])){
  echo '<meta http-equiv="refresh" content="0; url=../Html/Home.php">';
 }
 else {
//instrucao para selecionar todos os elemenetos da tabela
//select *from contato
include_once("conectar.php");

$sql_select = "select * from contato order by cod desc";
$retorno = mysql_query($sql_select) or die ("erro no sql select");

echo "<table border=1>";
echo "<tr><td>codigo</td><td>Nome</td><td>Empresa</td><td>Email</td><td colspan='2'>Telefone</td><td colspan='2'>Celular</td><td>Mensagem</td></tr>";
while ($dados = mysql_fetch_array($retorno))
{
$codigo_selecionado =  $dados ['cod'] ;
echo ' <td>codigo: ' . $dados ['cod'] . '</td>';//campos da tabela tb_dados
echo ' <td>nome: ' . $dados['nome'] . '</td>';
echo ' <td>Empresa: ' . $dados['empresa'] . '</td>';
echo ' <td>email: ' . $dados['email'] . '</td>';
echo ' <td>DDD1: ' . $dados['DDDtel'] . '</td>';
echo ' <td>Telefone: ' . $dados['telefone'] . '</td>';
echo ' <td>DDD2: ' . $dados['DDDcel'] . '</td>';
echo ' <td>Celular: ' . $dados['celular'] . '</td>';
echo ' <td>Mensagem: ' . $dados['msg'] . '</td> ';
if($_SESSION['tipo_usuario'] == 0)
{
echo "<td> <a href='excluirContato.php?codigo=$codigo_selecionado'>Excluir</a>";
echo "<td> <a href='alteraContato.php?codigo=$codigo_selecionado'>Alterar</a>";
}
echo ' <tr>';
}

echo '<a href="Login/logoff.php"><input type="button" value="logoff"></a>';

}
?>
<a href="../Html/EscolheTabela.htm">Voltar</a>
 
