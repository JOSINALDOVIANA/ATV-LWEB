<?php
include_once("funcionario.php");
class Gerente extends funcionario{
    public function __construct($nome,$idade,$dataN,$RG,$cpf,$end,$salario){
      $this->nome=$nome;
      $this->idade=$idade;
      $this->dataN=$dataN;
      $this->RG=$RG;
      $this->cpf=$cpf;
      $this->end=$end;
      $this->salario=$salario;
      $this->cargo="gerente";
  }
  public function getDados(){
    return [
        $this->nome,
        $this->idade,
        $this->dataN,
        $this->RG,
        $this->cpf,
        $this->end,
        $this->salario,
        $this->bonus,
        $this->cargo,   
        ];
  }
  function calculaBonificacao(){
    
    $this->bonus=($this->salario*0.03)+100;
    
  }
  
  }
?>