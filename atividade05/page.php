<?php
include_once('Classes/Gerente.php');
include_once('Classes/Secretaria.php');
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>ATIVIDADE AV2</title>
</head>

<body class="bg-success mt-1 ">
  <div class="container" style="color:#fff">
    <div class="row">
      <form action="?" method="POST">


        <div class="col">
          <input class="mb-1" type="text" name="nome" placeholder="Digite o nome">
          <input class="mb-1" type="number" name="idade" placeholder="Digite sua idade">
          <input class="mb-1" type="text" name="ano" placeholder="Digite o ano de Nascimento">
          <input class="mb-1" type="password" name="rg" placeholder="Digite o seu RG">
        </div>

        <div class="col">
        <input type="password" name="cpf" placeholder="Digite o seu CPF">
        <input type="number" name="sal" placeholder="Digite o  valor do salario">
        <input class="mb-1" type="text" name="end" placeholder="Digite o digite o endereço">
        <select name="select">
          <?php
          
          $arr=array('Gerente','secretaria');
          foreach($arr as $k => $value){
            echo '<option value='.$k.' >'.$value.'</option> ';
          }
          ?>


        </select>
        </div>
        <button name="enviar" type="submit">Enviar</button>
      </form>
      
    </div>
  </div>
  <?php

      if(isset($_POST["enviar"])){
      
      $cargo=$_POST["select"];
      switch($cargo=$_POST["select"]){
      case 0: 
        $gerente=new Gerente($_POST["nome"],$_POST["idade"],$_POST["ano"],$_POST["rg"],$_POST["cpf"],$_POST["end"],$_POST["sal"]);
        $gerente->calculaBonificacao();
        foreach ($gerente->getDados() as $key => $value) {
            switch ($key) {
              case 0:
                echo ("Nome: ".$value)."<br>";
                break;
              case 1:
                echo ("idade: ".$value)."<br>";
                break;
              case 2:
                echo ("Data de Nascimento: ".$value)."<br>";
                break;
              case 3:
                echo ("RG: ".$value)."<br>";
                break;
              case 4:
                echo ("CPF: ".$value)."<br>";
                break;
              case 5:
                echo ("Endereço: ".$value)."<br>";
                break;
              case 6:
                echo ("Salário: ".$value)."<br>";
                break;
              case 7:
                echo ("Bonus: ".$value)."<br>";
                break;
              case 8:
                echo ("Cargo: ".$value)."<br>";
                break;
              
              default:
                
                break;
            }
        }
        break;
      case 1:
        $secretaria=new secretaria($_POST["nome"],$_POST["idade"],$_POST["ano"],$_POST["rg"],$_POST["cpf"],$_POST["end"],$_POST["sal"]);
        $secretaria->calculaBonificacao();
        $secretaria->setRamal(32);
        foreach ($secretaria->getDados() as $key => $value) {
          switch ($key) {
            case 0:
              echo ("Nome: ".$value."<br>");
              break;
            case 1:
              echo ("idade: ".$value."<br>");
              break;
            case 2:
              echo ("Data de Nascimento: ".$value."<br>");
              break;
            case 3:
              echo ("RG: ".$value)."<br>";
              break;
            case 4:
              echo ("CPF: ".$value)."<br>";
              break;
            case 5:
              echo ("Endereço: ".$value)."<br>";
              break;
            case 6:
              echo ("Salário: ".$value)."<br>";
              break;
            case 7:
              echo ("Bonus: ".$value)."<br>";
              break;
            case 8:
              echo ("Cargo: ".$value)."<br>";
              break;
              case 9:
                echo ("Ramal: ".$value)."<br>";
                break;
              
            default:
              
              break;
          }
        }
          break;       

      }
    }
      ?>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>