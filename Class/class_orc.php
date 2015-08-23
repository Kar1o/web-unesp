<?php
class Orcamento{

     private $cod = null;
     private $nome = null;
     private $empresa = null;
	 private $email = null;
     private $DDDTel = null;
     private $Telefone = null;
     private $DDDcel = null;
     private $celular = null;
     private $motivo = null;
     private $veiculo = null;
     private $datas = null;
     private $horas = null;
     private $datar = null;                             
     private $horar = null;
     function Orcamento(){
     }
     
     function setTudo($nome, $empresa, $email, $DDDTel, $Telefone, $DDDcel, $celular, $motivo, $veiculo, $datas, $horas, $datar, $horar) {
         
         $this->nome = $nome;
         $this->empresa = $empresa;
         $this->DDDTel = $DDDTel;
         $this->Telefone = $Telefone;
         $this->DDDcel = $DDDcel;
         $this->celular = $celular;
         $this->motivo = $motivo;
         $this->veiculo = $veiculo;
         $this->email = $email;
         $this->datas = $datas;
         $this->horas = $horas;
         $this->datar = $datar;
         $this->horar = $horar;
     }
     
     
     public function getCod() {
         return $this->cod;
     }

     public function setCod($cod) {
         $this->cod = $cod;
     }

     public function getNome() {
         return $this->nome;
     }

     public function setNome($nome) {
         $this->nome = $nome;
     }

     public function getEmpresa() {
         return $this->empresa;
     }

     public function setEmpresa($empresa) {
         $this->empresa = $empresa;
     }

     public function getDDDTel() {
         return $this->DDDTel;
     }

     public function setDDDTel($DDDTel) {
         $this->DDDTel = $DDDTel;
     }

     public function getTelefone() {
         return $this->Telefone;
     }

     public function setTelefone($Telefone) {
         $this->Telefone = $Telefone;
     }

     public function getDDDcel() {
         return $this->DDDcel;
     }

     public function setDDDcel($DDDcel) {
         $this->DDDcel = $DDDcel;
     }

     public function getCelular() {
         return $this->celular;
     }

     public function setCelular($celular) {
         $this->celular = $celular;
     }

     public function getMotivo() {
         return $this->motivo;
     }

     public function setMotivo($motivo) {
         $this->motivo = $motivo;
     }

     public function getVeiculo() {
         return $this->veiculo;
     }

     public function setVeiculo($veiculo) {
         $this->veiculo = $veiculo;
     }

     public function getEmail() {
         return $this->email;
     }

     public function setEmail($email) {
         $this->email = $email;
     }

     public function getDatas() {
         return $this->datas;
     }

     public function setDatas($datas) {
         $this->datas = $datas;
     }

     public function getHoras() {
         return $this->horas;
     }

     public function setHoras($horas) {
         $this->horas = $horas;
     }

     public function getDatar() {
         return $this->datar;
     }

     public function setDatar($datar) {
         $this->datar = $datar;
     }
     
     public function getHorar() {
         return $this->horar;
     }

     public function setHorar($horar) {
         $this->horar = $horar;
     }
     
     public function enviar(){
	 $sql_insert = "insert into orcamento(cod,nome,empresa,email,DDDtel,telefone,DDDcel,celular,motivo,veiculo,datas,horas,datar,horar) values ('','$this->nome','$this->empresa','$this->email','$this->DDDTel','$this->Telefone','$this->DDDcel','$this->celular','$this->motivo','$this->veiculo','$this->datas','$this->horas','$this->datar','$this->horar')";

	 //$sql_insert = "insert into orcamento(cod,datar,empresa,nome,DDDtel,telefone,DDDcel,celular,motivo,veiculo,datas,horas,datar,horar) values ('','$valor_datar','$valor_empresa','$valor_nome','$valor_DDDTel','$valor_telefone','$valor_DDDCel','$valor_celular','$valor_motivo','$valor_veiculo','$valor_data1','$valor_horario1','$valor_data2','$valor_horario2')";
      mysql_query($sql_insert) or die ("erro no sql insert");
	  include('../Html/Contato.php');
        
       }
	   }
    
?>