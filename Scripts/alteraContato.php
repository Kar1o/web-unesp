<?php
 //chama script para conectar 
  include_once('conectar.php');
  
  $cod=$_GET['codigo'];
  echo "chamou o script pra aleterar o codigo - $cod";
  //sql pra buscar dados ref ao cod
  
  $sql_buscar = "select * from contato where cod=$cod";
  $retorno= mysql_query($sql_buscar);
  $dados = mysql_fetch_array($retorno);
  $nome_selecionado = $dados['nome'];
  $empresa_selecionado = $dados['empresa'];
  $email_selecionado = $dados['email'];
  $DDD1_selecionado = $dados['DDDtel'];
  $telefone_selecionado = $dados['telefone'];
  $DDD2_selecionado = $dados['DDDcel'];
  $celular_selecionado = $dados['celular'];
  $mensagem_selecionado = $dados['msg'];
  
  
   echo" <table border='0'>
     <form action = 'alteraContato_opcoes.php' method='POST'>
   <tr>
      <td>cod</td>
      <td><input type='text' name='cod' value='$cod' readonly></td>
   </tr>
   <tr>
      <td>Nome</td>
      <td><input type='text' name='name' value='$nome_selecionado'></td>
   </tr>
   <tr>
      <td>Empresa</td>
      <td><input type='text' name='empresa' value='$empresa_selecionado'></td>
   </tr>
   <tr>
      <td>Email</td>
      <td><input type='text' name='email' value='$email_selecionado'></td>
   </tr>
   <tr>
      <td>DDD1</td>
      <td><input type='text' name='DDD1' value='$DDD1_selecionado'></td>
   </tr>
   <tr>
      <td>Telefone</td>
      <td> <input type='text' name='telefone' value='$telefone_selecionado'></td>
   </tr>
   <tr>
      <td>DDD2</td>
      <td><input type='text' name='DDD2' value='$DDD2_selecionado'></td>
   </tr>
   <tr>
      <td>Celular</td>
      <td><input type='text' name='celular' value='$celular_selecionado'></td>
   </tr>
   <tr>
      <td>Mensagem</td>
      <td><input type='form' name='mensagem' value='$mensagem_selecionado'></td>
   </tr>
   <tr>
      <td><input type='submit' name='b_confirma' value='confirma'></td>
      <td><input type='submit' name='b_cancelar' value='cancela'></td>
   </tr>
  </form>
</table>

  ";
  
  ?>
