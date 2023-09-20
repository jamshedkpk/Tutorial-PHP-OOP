<center>
<h2>
<?php
/*
Set variables in one function and display in other function
*/
class car
{
public $name;
public $price;
public function setdata()
{
$this->name="Honda Civic-2020";
$this->price=2200000;
}
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
/*
By creating object of car class we can access its variables
And functions
*/
$obj=new car();
$obj->setdata();
$obj->displaydata();
?>
</h2>
</center>
