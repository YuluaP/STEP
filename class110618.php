<?php

class sheep {
  public $sheepName;
  public $sheepColor;

  public function __construct (){
    echo 'Sheep create' . '<br >';
  }

  public function __clone (){
    echo 'Sheep clone' . '<br >';
  }

  public function echoName($sheepName) {
      echo $this->sheepName . '<br >';
  }

  public function echoColor($sheepColor) {
      echo $sheepColor . '<br >';
  }
}// End class

class cow {
  public $cowName;
  public $cowColor;

  public function __construct (){
    echo 'Cow create' . '<br >';
  }

  public function __clone (){
    echo 'Cow clone' . '<br >';
  }

  public function echoName($cowName) {
      echo $this->cowName . '<br >';
  }

  public function echoColor($cowColor) {
      echo $cowColor . '<br >';
  }
}// End class


$myShip = new sheep ();
$Dolly = clone $myShip;

//Factory
$globalSC;
function createSheep (){
  GLOBAL $globalSC;
  if ($globalSC < 5) {
    $globalSC++;
    return new sheep();
  } else {
    return new cow();
  }

}

for ($i = 0; $i < 12; $i++){
  $nextSheep [$i] = createSheep ();
  }
