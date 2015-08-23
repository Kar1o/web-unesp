<?php include ("../Includes/Inicio.php"); ?>


<table border="0">
  <form method="POST" action="../Scripts/insereContato.php"  name="contact" id="contact">
  Tire suas dúvidas, solicite informações ou dê sugestões. Preencha o formulário abaixo. Campos com "*", são obrigatórios:<br><br>
   <tr>
      <td>Nome*<br><br></td>
      <td><input name="Nome" id="Nome" type="text" size="35" required><br><br></td>
   </tr>
   <tr>
      <td>Empresa<br><br></td>
      <td><input name="Empresa" id="Empresa" type="text" size="35"><br><br></td>
   </tr>
   <tr>
      <td>Email*<br><br></td>
      <td><input type="email" name="Email" id="Email" type="text" size="35" required><br><br></td>
   </tr>
   <tr>
      <td>(DDD)Telefone*<br><br></td>
      <td><input name="DDD1" id="DDD1" type="text" size="1" maxlength="2"><input name="Telefone" id="Telefone" type="text" size="15" required><br><br></td>
   </tr>
   <tr>
      <td>(DDD)Celular<br><br></td>
      <td><input name="DDD2" id="DDD2" type="phone" size="1" maxlength="2"><input name="Celular" id="Celular" type="text" size="15" ><br><br></td>
   </tr>   
   <tr>
      <td>Mensagem*<br><br></td>
      <td><textarea name="Mensagem" id="Mensagem" cols="31" rows="7" required></textarea></td>
   </tr>
   <tr>
     <td><input name="env" id="env" type="submit" value="Enviar"></td>
   </tr>
  </form>
</table>

<?php include ("../Includes/fim.php"); ?>
