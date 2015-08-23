<?php
include_once('conectar.php');

  //manipular a tabela tb_dados
  //insert into tb_dados(cod,nome,fone) values ('','',''); 
  
$valor_nome= $_POST['Nome'];
$valor_empresa= $_POST['Empresa'];
$valor_email= $_POST['Email'];
$valor_DDDTel= $_POST['DDD1'];
$valor_telefone= $_POST['Telefone'];
$valor_DDDCel= $_POST['DDD2'];
$valor_celular= $_POST['Celular'];
$valor_mensagem= $_POST['Mensagem'];

//INSERT INTO `contato`(`cod`, `nome`, `empresa`, `email`, `DDDtel`, `telefone`, `DDDcel`, `celular`, `msg`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
$sql_insert = "insert into contato(cod,nome,empresa,email,DDDtel,telefone,DDDcel,celular,msg) values ('','$valor_nome','$valor_empresa','$valor_email','$valor_DDDTel','$valor_telefone','$valor_DDDCel','$valor_celular','$valor_mensagem')";

 mysql_query($sql_insert) or die ("erro no sql insert");
 include('../Html/Contato.php');
//echo "dados inseridoos na tabela contato <br>";
//include("Exibir.php");
?>
