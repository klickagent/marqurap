<?php
//Class Lebewesen, hat variable alter und kann altern (abstrakte function). die Variable kann mit getAlter abegrufen werden.
abstract class Lebewesen {
    protected $alter = 0;
    
    abstract public function altern();

    
    
    public function getAlter(){
        echo "$this->alter <br/>";
    }
}

?>

