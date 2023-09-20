<center>
<h2>
<?php
// Call a function of a class
class car
{
public $name="Honda Civic-2020";
public $price=2200000;
public function display()
{
$name=$this->name;
$price=$this->price;
echo
(
"I Am A Car My Name Is =".$name. " And My Price Is  = ".$price
);	
}
}
/*
By creating object of car class we can access its variables
And functions
*/
$obj=new car();
$obj->display();
?>
</h2>
</center>
