<?php
//creamos la clase
class jugadorDado {


private $minNumDado = 0;
private $maxNumDado = 12;


//Creamos setters
public function setminNumDado($minNumDado){
$this->minNumDado=$minNumDado;
}

public function setmaxNumDado($maxNumDado){
$this->maxNumDado=$maxNumDado;
}

//Creacion de getters
public function getminNumDado(){
  return $this->minNumDado;
}

public function getmaxNumDado(){
  return $this->maxNumDado;
}

public function tirarDado(){
  return $this->tirarDado=rand($this->minNumDado,$this->maxNumDado);
}







}


?>
