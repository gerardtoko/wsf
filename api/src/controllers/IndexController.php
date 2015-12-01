<?php


class Voiture {

  $portes = 2;
  $roues = 4;
  $moteur = 1;

  $vitesse = 70;

  public function roule($vitesse){
    $this->vitesse = $vitesse;
  }

  public function arret(){

  }

  public function drift(){

  }
}

$renault = new Voiture();
$renault->portes = 5;
$renault->roule(140);

$ferrari = new Voiture();
$ferrari->moteur = 2;
$ferrari->vitesse = 340;
$ferrari->arret();
