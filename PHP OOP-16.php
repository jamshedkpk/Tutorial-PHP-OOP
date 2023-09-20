<center>
<h2>
<?php
/*
In OOP object oriented programming concept inheritance is one of The most important feature. It is used to reduce code size. In Inheritance One is parent class and other one is child class.
We extend child classes from parent class in this way all member data and member functions of parent class can be accessed in child classes
*/
class car 
{
public function displaycar()
{    
$speed=120;
echo ("I Am A Car And My Speed Is = ".$speed);	
}	
}

class sportcar extends car
{
public function displaysportcar()
{
$speed=300;
echo("I Am A Sport Car And My Speed Is = ".$speed);
}
}
$obj=new sportcar();
$obj->displaycar();
echo("<hr>");
$obj->displaysportcar();
?>
</h2>
</center>
