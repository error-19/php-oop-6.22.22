<?php
abstract class car{
    public $name;
    public function __construct($aha){
        $this->name=$aha;

    }
    abstract public function intro():string;
}
class driver extends car{
    public function intro():string{
        return "Bangladeshi .My name is $this->name";
    }
}
    class part extends car{
        public function intro():string{
            return "Japani .My name is $this->name";
        }
    }
        class janala extends car{
            public function intro():string{
                return "American.My name is $this->name";
            }
}
$ob=new driver("china");
echo $ob->intro();
echo "<br>";
$o=new driver("china");
echo $o->intro();
echo "<br>";
$b=new driver("china");
echo $b->intro();
echo "<br>";
    
    