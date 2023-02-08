<?php

class Product
{
    public $name,$description,$price;
 
    public function product1()
    {
        return $this->name;
    }
    public function product2()
    {
        return $this->name;
    }
}
 $product1 = new Product();
 $product1->name = "iPhone 14 ";
 $product2 = new Product();
 $product2->name = "iPhone 14 Pro";
 echo 'le premier name est :'.  $product1->product1()."<br>";
 echo 'le deuxième name est :'. $product2->product2();
?>