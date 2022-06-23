<?php
class Fruit {
  public $name;
  public $color;

  function __construct($n) {
    $this->name = $n; 
  }
  function pen() {
    return $this->name;
  }
}

$a = new Fruit("Orange");
echo $a->pen();
?>

