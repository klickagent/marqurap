<?php
require_once 'Lebewesen.php';

class Mensch extends Lebewesen{
    private static $vorfahre;
    
    private $name;
    private $geschlecht;
    
    public function __construct($name, $geschlecht){
       $this->name = $name;
       $this->geschlecht = $geschlecht;
       
       $this->altern();
       
       echo "$this->name, is born! <br/>";
    }

    public function __destruct(){
        echo "$this->name Wurde getötet <br/>";
    }
    
   public function umbenennen($value){
        $this->name = $value;
        $this->getName();
    }

    public function geburtstagFeiern(){
    }
    public function altern(){
        $this->alter += 1;
    }
    
    
    
    
    
    public function neueEvolutionstheorie($value){
        self::$vorfahre = $value;
    }
    
   
    
    public function getName(){
        echo "Name: $this->name <br/>";
    }
    
    public function getVorfahre(){
        return self::$vorfahre;
    }
}

?>