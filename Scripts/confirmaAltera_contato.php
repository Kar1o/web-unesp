<?php
include_once('conectar.php');

$valor_cod= $_POST['cod'];
$valor_nome= $_POST['name'];
$valor_empresa= $_POST['empresa'];
$valor_email= $_POST['email'];
$valor_DDD1= $_POST['DDD1'];
$valor_telefone= $_POST['telefone'];
$valor_DDD2= $_POST['DDD2'];
$valor_celular= $_POST['celular'];
$valor_mensagem= $_POST['mensagem'];

$sql_update =" update contato set nome='$valor_nome',empresa='$valor_empresa',email='$valor_email',DDDtel='$valor_DDD1',telefone='$valor_telefone',DDDcel='$valor_DDD2',celular='$valor_celular',msg='$valor_mensagem' WHERE cod='$valor_cod'";

//echo $sql_update;
 mysql_query($sql_update) or die ("erro no sql insert");
//echo "dados alterados na tabela contato <br>";
include("ExibeContato.php");
?>
