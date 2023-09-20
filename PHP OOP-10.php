<center>
<h2>
<?php
/*
Private variables can't be accessed outside of the class
*/
class car
{
private $name="Honda Civic-2020";
private $price=2200000;
}
/*
By creating object of car class we can access its variables
And functions
*/
// It will display an error
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
