<center>
<h2>
<?php
/*
Public variables can be accessed inside and outside of the class
*/
// Example of public modifier for variable
class car
{
public $name="Honda Civic-2020";
public $price=2200000;
}
/*
By creating object of car class we can access its variables
And functions
*/
$obj=new car();
$name=$obj->name;
$price=$obj->price;
echo
(
"I Am A Car My Name Is =".$name. " And My Price Is  = ".$price
);	
?>
</h2>
</center>
