<?php


class Voiture {
  public $roues = 4;
  public  $moteur = 1;

  public $vitesse = 70;

  public function UpdatePorte($value){
    $this->portes = $value;
  }

  public function roule($vitesse){
    $this->vitesse = $vitesse;
  }

  public function arret(){

  }

  public function routesavant(){
    $this->test = 2;
  }

  public function drift(){

  }
}


class Camion extends Voiture {
  protected $portes = 2;
  public $vitesse = 90;
}

class Moto extends Voiture {
  private $test = 2;

}

class Moto125 extends Moto {

  public function routesavant(){
    echo "je roule";
  }
}

$renault = new Moto();
$renault->portes = 3;

