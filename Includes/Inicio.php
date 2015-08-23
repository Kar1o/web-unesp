<?php
echo'
<html>

<head>
       <link rel="stylesheet"  href="../CSS/Loc.css">
       <script language="javasript" type="text/javascript" src="../Scripts/ValidaCampos.js"></script> 
<title>Locaçâo de veiculos</title>

</head>

<body>
<div class="page">
<div class="header">
<div class="logo"><br>
<a href="../Html/Home.php"><img src="../Pictures/tray.jpeg" width="150" height="93"></a>
</div>
<div class="meio">
<p align="center">Locações <br> <strong>Carros<br>e<br>Vans</strong></p>
</div>
<div class="direita">
<p>Atendimento<br> Fixo:(018)<strong> 12345678 </strong><br>Celular1:(018)<strong>87654321</strong><br> Celular2:(018)<strong>12348765</strong></p>
</div>
</div>
<div class="login">
<form action="../Scripts/Login/verifica_login.php" method="post">
Nome:<input name="USR_LOGIN" type="text">
Senha:<input name="USR_SENHA" type="password">
<input name="Logar" id="Logar" type="submit">

</form>
</div>

<div class="left"> 
<a href="../Html/Home.php">Home<br><br></a>
<a href="../Html/Empresa.php">Empresa <br><br></a>
<a href="../Html/Frota.php">Frota <br><br></a>
<a href="../Html/Orcamento.php">Orçamento <br><br></a>
<a href="../Html/Contato.php">Contato <br></a>
</div>

<div class="content" align="center">
'
?>
