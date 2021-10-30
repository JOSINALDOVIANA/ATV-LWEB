<?php
include_once('Classes/Gerente.php');
include_once('Classes/Secretaria.php');
$gerente=new Gerente("josinaldo viana","22","30/08/1992","449589","00595512240","ffff",2000);
$gerente->calculaBonificacao();
foreach ($gerente->getDados() as $key => $value) {
    echo ($value."\n");
}

echo ("############################################################# \n");

$secretaria=new secretaria("marcus vinicius","22","30/08/1992","449589","00595512240","ffff",2000);
$secretaria->calculaBonificacao();
$secretaria->setRamal(32);
foreach ($secretaria->getDados() as $key => $value) {
    echo ($value."\n");
}

?>
