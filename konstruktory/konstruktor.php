<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;
    function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
    function __destruct(){
        echo"{$this->name}";
        echo"{$this->color}";
    }
}
$apple = new Fruit("Apple", "red");
echo $apple->get_name(). "<br>";
echo $apple->get_color();
?>