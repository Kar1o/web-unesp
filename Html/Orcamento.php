<?php include ("../Includes/Inicio.php"); 
      include ("../Includes/calendar.php");?>

<table border="0">
  <form method="POST" action="../Scripts/insereOrcamento.php" name="contact" id="contact">
  Faça um orcamento. Campos com "*", são obrigatórios:<br><br>
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
      <td><input name="Email" id="Email" type="text" size="35" required><br><br></td>
   </tr>
   <tr>
      <td>(DDD)Telefone*<br><br></td>
      <td><input name="DDD1" id="DDD1" type="text" size="1" maxlength="2"><input name="Telefone" id="Telefone" type="text" size="15" required><br><br></td>
   </tr>
   <tr>
      <td>(DDD)Celular<br><br></td>
      <td><input name="DDD2" id="DDD2" type="text" size="1" maxlength="2"><input name="Celular" id="Celular" type="text" size="15"><br><br></td>
   </tr>
   <tr>
      <td>Motivo</td>
      <td><select name="motivo" id="motivo">
  <option  selected value="">selecione abaixo</option>    
  <option value="Lazer">Lazer</option>
  <option value="Trabalho">Trabalho</option>
  <option value="Faculdade">Faculdade</option>
  <option value="Casamento">Casamento</option>
</select> </td>
   </tr>
   <tr>
      <td>Veiculo*</td>
      <td><select name="Veiculo" id="Veiculo" required>
  <option value="">selecione abaixo</option>
  <option value="carro">carro executivo</option>
  <option value="van">vans</option>
</select> </td>
   </tr>   
   <tr>
      <td>Data de Saida*</td>
      <td><input type="text" name="date1" id="date1" readonly="1"/>
      Hora<select name="hora" id="hora">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
</select>
      </td>
   </tr>
   <tr>
      <td>Data de Retorno*</td>
      <td><input type="text" name="date2" id="date2" readonly="1"/>
      Hora<select name="horar" id="horar">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
</select> </td>
   </tr>
   <tr>
   <td><input name="env" id="env" type="submit" value="Enviar"></td>
   </tr>
   <tr>
   <td><input type="hidden" name="resJS" id="resJS"></td>
   </tr>
   </form>
   </table>


<?php include ("../Includes/fim.php"); ?>
