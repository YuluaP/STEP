<?php

const wall_min = 3;
const wall_max = 5;
$n = rand(wall_min,wall_max);
$m = $n + 1;

class room {

  public function __construct (){
    echo 'Room of ' . $GLOBALS['n'] . ' wall create' . '<br >';
  }

}// End class

class wall {

  public function __construct (){
    echo 'Wall create' . '<br >';
  }

}// End class

  $globalRC;
  function createWall (){
    GLOBAL $globalRC;
    GLOBAL $n;

    if ($globalRC < $n) {
      $globalRC++;
      return new wall();
    } else {
      return new room();
    }

}

for ($i = 0; $i < $m; $i++){
  $nextWall [$i] = createWall ();
}
