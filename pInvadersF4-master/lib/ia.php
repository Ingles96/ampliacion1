<?php
class ia
{
  //Propiedades
public $mapaCol="2";
public $mapaFil="2";
public $numNaves="3";
public $navesHumano=[];
public $navesIA=[];

//Getters
public function getNave() {
   return $this->numNaves;
 }
 public function getNavesIA(){
   $this->navesIA[1]["fil"]=1;
   $this->navesIA[1]["col"]=1;
    return $this->navesIA;

  }
  public function getNaveshumano(){
   return $this->navesHumano;
 }
 public function getFila() {
    return $this->mapaFil;
  }
  public function getColumna() {
   return $this->mapaCol;
 }
//Setters
public function setMapaCol($mapaCol){
      if($mapaCol>2 ){
         $this->mapaCol = 2;
      }elseif ($mapaCol<0) {
        $this->mapaCol = 0;
      }else{
        $this->mapaCol = $mapaCol;
      }
  }
  public function setMapaFil($mapaFil){
      if($mapaFil>2 ){
         $this->mapaFil = 2;
 }    elseif ($mapaFil<0) {
        $this->mapaFil = 0;
 }    else{
        $this->mapaFil = $mapaFil;
  }
  }
  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }
  public function setNaveIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }
  public function setNavesIA($navesIA){
    $this->navesIA = $navesIA;
  }
//RANDOM
public function randompos() {
 $this->columna=rand(0,2);
 $this->fila=rand(0,2);
 }
}
 ?>
