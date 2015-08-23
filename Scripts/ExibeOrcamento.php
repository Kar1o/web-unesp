<?php
//instrucao para selecionar todos os elemenetos da tabela
//select *from orcamento

SESSION_START();
 if(empty($_SESSION["usuario"])){
  echo '<meta http-equiv="refresh" content="0; url=../Html/Home.php">';
 }
 else {
include_once("conectar.php");

$sql_select = "select * from orcamento order by cod desc";
$retorno = mysql_query($sql_select) or die ("erro no sql select");

echo "<table border=1>";
echo "<tr><td>codigo</td><td>Nome</td><td>Fone</td><td>Email</td><td colspan='2'>Telefone</td><td colspan='2'>Celular</td><td>Motivo</td><td>Veiculo</td><td colspan='2'>Data Retirada</td><td colspan='2'>Data Retorno</td></tr>";
while ($dados = mysql_fetch_array($retorno))
{
$codigo_selecionado =  $dados ['cod'] ;
echo ' <td>codigo: ' . $dados ['cod'] . '</td>';//campos da tabela tb_dados
echo ' <td>nome: ' . $dados['nome'] . '</td>';
echo ' <td>Empresa: ' . $dados['empresa'] . '</td>';
echo ' <td>email: ' . $dados['email'] . '</td>';
echo ' <td>DDD1: ' . $dados['DDDTel'] . '</td>';
echo ' <td>Telefone: ' . $dados['telefone'] . '</td>';
echo ' <td>DDD2: ' . $dados['DDDcel'] . '</td>';
echo ' <td>Celular: ' . $dados['celular'] . '</td>';
echo ' <td>Motivo: ' . $dados['motivo'] . '</td>';
echo ' <td>Veiculo: ' . $dados['veiculo'] . '</td>';
echo ' <td>Data Saida: ' . $dados['datas'] . '</td>';
echo ' <td>Hora Saida: ' . $dados['horas'] . '</td>';
echo ' <td>Data Volta: ' . $dados['datar'] . '</td>';
echo ' <td>Hora Volta: ' . $dados['horar'] . '</td>';
if($_SESSION["tipo_usuario"]==0)
{

echo "<td> <a href='ExcluirOrcamento.php?codigo=$codigo_selecionado'>Excluir</a>";
echo "<td> <a href='alteraOrcamento.php?codigo=$codigo_selecionado'>Alterar</a>";

}
echo ' <tr>';
}

echo '<a href="Login/logoff.php"><input type="button" value="logoff"></a>';
 }
?>
<a href="../Html/EscolheTabela.htm">Voltar</a>
