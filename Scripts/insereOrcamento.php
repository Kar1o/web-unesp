<?php
include_once('conectar.php');
include_once('../class/class_orc.php');
$novo = new Orcamento();

$novo->setTudo($_POST['Nome'],$_POST['Empresa'],$_POST['Email'],$_POST['DDD1'],$_POST['Telefone'],$_POST['DDD2'],$_POST['Celular'],$_POST['motivo'],$_POST['Veiculo'],$_POST['date1'],$_POST['hora'],$_POST['date2'],$_POST['horar']);
		
$novo->enviar();
/*
  $nome, $empresa, $DDDTel, $Telefone, $DDDcel, $celular, $motivo, $email, $veiculo, $datas, $horas, $datar, $horar)
  //manipular a tabela tb_dados
  //insert into tb_dados(cod,nome,fone) values ('','',''); 
  
$valor_nome= $_POST['Nome'];
$valor_empresa= $_POST['Empresa'];
$valor_email= $_POST['Email'];
$valor_DDDTel= $_POST['DDD1'];
$valor_telefone= $_POST['Telefone'];
$valor_DDDCel= $_POST['DDD2'];
$valor_celular= $_POST['Celular'];
$valor_motivo= $_POST['motivo'];
$valor_veiculo= $_POST['Veiculo'];
$valor_data1= $_POST['date1'];
$valor_horario1= $_POST['hora'];
$valor_data2= $_POST['date2'];
$valor_horario2= $_POST['horar'];



//INSERT INTO `contato`(`cod`, `nome`, `empresa`, `email`, `DDDtel`, `telefone`, `DDDcel`, `celular`, `msg`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
$sql_insert = "insert into orcamento(cod,nome,empresa,email,DDDtel,telefone,DDDcel,celular,motivo,veiculo,datas,horas,datar,horar) values ('','$valor_nome','$valor_empresa','$valor_email','$valor_DDDTel','$valor_telefone','$valor_DDDCel','$valor_celular','$valor_motivo','$valor_veiculo','$valor_data1','$valor_horario1','$valor_data2','$valor_horario2')";
//$sql_insert = "insert into tb_dados(cod,name,fone) values ('','$valor_nome','$valor_fone')";
 mysql_query($sql_insert) or die ("erro no sql insert");
 include('../Html/Contato.php');
//echo "dados inseridoos na tabela orcamento <br>";
//include("Exibir.php"); */
?>
