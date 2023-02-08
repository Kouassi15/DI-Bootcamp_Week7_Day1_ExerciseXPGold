<?php

  class MyCalculator
  {
    public $valeur1, $valeur2;
    public function __construct($valeur1 , $valeur2)
    {
        $this->valeur1 = $valeur1;
        $this->valeur2 = $valeur2;
    }
    public function Add()
    {
       return $this->valeur1 + $this->valeur2;
    }
    public function Subtract()
    {
        return $this->valeur1 - $this->valeur2;
    }
    public function Multiply()
    {
        return $this->valeur1 * $this->valeur2;  
    }
    public function divide()
    {
        return $this->valeur1 / $this->valeur2;
    }
  }
  $mycalc = new MyCalculator( 12, 6);
 echo $mycalc-> add()."<br>"; // Displays 18
 echo $mycalc-> multiply(); // Displays 72
?>