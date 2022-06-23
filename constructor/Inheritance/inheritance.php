<!DOCTYPE html>
<body>
  <?php
  class fol{
    public $name;
    public $color;
    public function __construct($n,$c){
      $this->name=$n;
      $this->color=$c;
    }
  public function priciti(){
    echo "The fruit is {$this->name}and the color is {$this->color}.";
  }
}
class kola extends fol{
public function sms(){
  echo "Am I a fruit or a berry";
  $this->priciti();
 // echo "$this->name.";
}
}
$anaros=new kola("apple","Mango");
$anaros->sms();
?>
</body>
</html>