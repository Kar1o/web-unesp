<?php
 //chama script para conectar 
  include_once('conectar.php');
  
  
  $cod=$_GET['codigo'];
//  echo "excluiu da tabela orcamento com codigo - $cod";
  $sql_excluir="DELETE FROM orcamento WHERE cod =$cod";
  mysql_query($sql_excluir) or die ("erro ao excluir");
  //echo "registro excluido com sucesso";
  include('ExibeOrcamento.php');
?>
