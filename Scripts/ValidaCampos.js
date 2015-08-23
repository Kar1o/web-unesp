function validaNome()
{
 var nome=Nome.value;
 if((nome=='')||(nome==null))
 {
 alert("campo nome obrigatorio");
 return false;
 }
}

function validaEmail()
{
 var email=Email.value;
  if((email=='')||(email==null))
 {
  alert("campo email obrigatorio");
  return false;
 }
 else 
 {
  a=email.indexOf("@");
  b=email.indexOf(".");
   if((a<1) || (b <a+2))
   {
   alert("email invalido");
   return false;
   }
 }
}

function validaTel()
{
 var tel=Telefone.value;
  if((tel=='')||(tel==null))
  {
   alert("campo Telefone obrigatorio");
   return false;
  }
  else
  { 
   a=tel.length;
    if((a<8)||(a>9))
     {
      alert("telefone invalido");
      return false;
     }
  }   
}

function validaMsg()
{
 var msg=Mensagem.value;
  if((msg=='')||(msg==null))
  {
   alert("campo Mensagem obrigatorio");
   return false;
  } 
}

function validaVeicu()
{
 var veic=Veiculo.value;
  if((veic=='')||(veic==null))
  {
   alert("Escolha um tipo de veiculo");
   return false;
  } 
}

function validaData()
{
 var a=date1.value;
 var b=date2.value;
 if((date1.value!='')&&(date2.value!=''))
  {
  var horas=1000*60*60;
  //cria a data de Saida
  dates = new Date(date1.value);
  dates.setHours(hora.value);
  //cria a data de retorno
  dater = new Date(date2.value);
  dater.setHours(horar.value);
  //transforma data em milisegundos
  var datesMS= dates.getTime();
  var daterMS= dater.getTime();
  //dias que cliente vai estar com carro
  var res= (daterMS - datesMS)/horas;
  var resDia= parseInt(res/24);
  var resHora=res%24;
  if(res<0)
   {
   alert("data de retorno incompativel com a data de saida");
   return false;
   }
  else{
   alert(resDia + "dia(s) e " + resHora + "horas de aluguel");
   document.getElementById("resJS").value=res;
   }
  
  return false;
  }
 else 
  alert("campos de data sao obrigatorios");
  return false;
}

//$.post( "calcOrcamento.php", {hrs: res});


function validaContato()
{

validaNome();
validaEmail();
validaTel();
validaMsg();
 
}

function validaOrcamento()
{
validaNome();
validaEmail();
validaTel();
validaVeicu();
validaData();
 
}
