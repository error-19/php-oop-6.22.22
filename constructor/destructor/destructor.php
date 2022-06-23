<?php
class apple{
    public $name;
    public $color;
    public $size;
    function __construct($a,$b,$c){
        $this->name=$a;
        $this->color=$b;
        $this->size=$c;
    }
    function pen(){
        return $this->name;
    }
    function book(){
        return $this->color;
    }
function cloth(){
    return $this->size;
}
function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}
$ob=new apple("matardor","Miracle Morning","Lotto");
echo $ob->pen();
echo "<br>";
echo $ob->book();
echo "<br>";
echo $ob->cloth();