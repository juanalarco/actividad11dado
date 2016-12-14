<?php
include 'dado.php';

$tirada= new jugadorDado();

$minNumDado=0;
$maxNumDado=0;

for ($i=0; $i < 12 ; $i++) {
  echo $tirada->tirarDado(). "<br>";
}



?>
