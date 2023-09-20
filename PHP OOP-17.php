<center>
<h2>
<?php
/*
In OOP object oriented programming concept inheritance is one of The most important feature. It is used to reduce code size. In Inheritance One is parent class and other one is child class.
We extend child classes from parent class in this way all member data and functions of parent class can be accessed in child classes
*/
class car 
{
protected $name;
protected $price;
public function setdata()
{
$this->name="Honda Civic-2020";
$this->price=2200000;	
}	
}

class sportcar extends car
{
public function displaydata()
{
$name=$this->name;
$price=$this->price;
echo
(
"I Am A Car My Name Is =".$name. " And My Price Is  = ".$price
);	
}
}
$obj=new sportcar();
$obj->setdata();
$obj->displaydata();
echo("<hr>");
?>
</h2>
</center>
