<?php

class ia
{
public $columna = '0';
public $fila = '3';

public function setColumna($col){
  if ($col>3) {
    $this->columna=3;
  }elseif ($col<0) {
    $this->columna=0;
  } else {
    $this->columna=$col;
  }
}
public function getcolumna() {

return $this->columna;
}
public function setFila($fil) {
  if ($fil>3) {
    $this->fila=3;
  }elseif ($fil<0){
    $this->fila=0;
  }else {
    $this->fila=$fil;
  }
}
public function getfila() {

  return $this->fila;
}
  public function RandomPos() {
}

}
 ?>
