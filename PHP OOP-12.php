<center>
<h2>
<?php
/*
Protected variables can be accessed from child class
*/
class car
{
Protected $name="Honda Civic-2020";
Protected $price=2200000;
}

class sportcar extends car
{
public function search()
{
$name=$this->name;
$price=$this->price;
echo($name);	
}
}
/*
By creating object of car class we can access its variables
And functions
*/
$obj=new sportcar();
//$name=$obj->name;
//$price=$obj->price;
$obj->search();
?>
</h2>
</center>
