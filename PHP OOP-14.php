<center>
<h2>
<?php
/*
Call a function from another function
*/
class car
{
public function setdata()
{
$this->name="Honda Civic-2020";
$this->price=2200000;
echo
(
"I Am A Car My Name Is =".$this->name. " And My Price Is  = ".$this->price
);
}
public function displaydata()
{
$this->setdata();
}
}
/*
By creating object of car class we can access its variables
And functions
*/
$obj=new car();
$obj->displaydata();
?>
</h2>
</center>
