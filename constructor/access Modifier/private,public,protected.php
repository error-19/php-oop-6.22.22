<?php
class fruit{
public $name;
protected $color;
private $weight;
}
$ob=new fruit();
echo $ob->name='Mango';
echo $ob->color='Yellow';
echo $ob->weight='3000';