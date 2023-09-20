<center>
<h2>
<?php
/* 
We can send variables to a class
In PHP $this->variable name is used for self refresences
Like $this->name; means $name........
*/
// Send data to variable from outside
class car
{
public $name;
public $price;
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
$obj->name="Honda Civic-2020";
$obj->price=2200000;
$obj->display();
?>
</h2>
</center>
