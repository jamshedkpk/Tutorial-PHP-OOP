<center>
<h2>
<?php
/*
We can send values to a function of a class
*/
class car
{
public function display($name,$price)
{
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
$name="Honda Civic-2020";
$price=2200000;
$obj->display($name,$price);
?>
</h2>
</center>
