<?php
if(@$_POST['b_contato'])
    include('ExibeContato.php');
  else if(@$_POST['b_orcamento'])
   include ('ExibeOrcamento.php');

?>
