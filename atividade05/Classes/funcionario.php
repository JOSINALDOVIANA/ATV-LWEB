<?php
include_once('Pessoa.php');
 abstract class funcionario extends pessoa{
     protected $salario;
     protected $bonus;
     protected $cargo;  
     
  abstract function calculaBonificacao();
     
    
   
   


}
// $func=new funcionario("josinaldo viana","22","30/08/1992","449589","00595512240","ffff");
// foreach ($func->getDados() as $key => $value) {
//     echo ($value."\n");
// }
?>
