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
$valor_motivo= $_POST['motivo'];
$valor_veiculo= $_POST['veiculo'];
$valor_datas= $_POST['datas'];
$valor_horas= $_POST['horas'];
$valor_datar= $_POST['datar'];
$valor_horar= $_POST['horar'];

$sql_update =" update orcamento set nome='$valor_nome',empresa='$valor_empresa',email='$valor_email',DDDtel='$valor_DDD1',telefone='$valor_telefone',DDDcel='$valor_DDD2',celular='$valor_celular',motivo='$valor_motivo',veiculo='$valor_veiculo',datas='$valor_datas',horas='$valor_horas',datar='$valor_datar',horar='$valor_horar' WHERE cod='$valor_cod'";

//echo $sql_update;
 mysql_query($sql_update) or die ("erro no sql insert");
//echo "dados alterados na tabela orcamento <br>";
include("ExibeOrcamento.php");
?>
