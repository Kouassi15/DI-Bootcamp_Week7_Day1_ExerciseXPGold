<?php
class Product
{
    public $name, $descrition,$price;
     
    public function __construct($name, $descrition,$price)
    {
        $this->name=$name;
        $this->description=$descrition;
        $this->price = $price;
    }
    public function product1()
    {
        echo $this->name .',' . $this->description . ',' . $this->price;
    }
    public function product2()
    {
        echo $this->name.','.$this->description.','.$this->price;
    }
}
$product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99);
 echo $product1->product1();
?>