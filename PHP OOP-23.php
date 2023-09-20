<center>
<h2>
<?php
/*
Abstract Class: An Abstract Class is a class
Which has one abstract method. An abstract method
Is a method which is only declared but not defined.
It is used in such cases where users are only sure
Which function would be used but not sure about the 
Definition of that function.
In order to make an abstract we inherit a child class and
Then we write definition of that abstract method
In child class.
*/
abstract class person
{
abstract function age($age);	
}

class student extends person
{
public function age($age)
{
echo("Your age is = ". $age);	
}
}
 
$obj=new student();
$obj->age(30);
?>
</h2>
</center>
