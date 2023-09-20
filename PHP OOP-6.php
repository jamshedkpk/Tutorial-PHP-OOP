<center>
<h2>
<?php
/*
Access Modifier: Access Modifier are used before a 
Variable or a function name. It is used to define access
Of a variable or a function...It has three types.
(1)-Public :
If we write public before a variable name or a function name then It means that it can be accessed inside and outside of a class. 

(2)-Private
If we write private before a variable name or a function name then It means that it can be accessed only inside of a class. 

(3)-Protected: 
If we write protected before a variable name or a function name then It means that it can be accessed inside of a class and outside of a child class but in child class it become private 
When we use no modifier then by default it is public
*/
// Example of private modifier for function
class car 
{
private function display()
{
$name="Honda Civic-2020";
$price=2200000;
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
// It will display error.....
$obj=new car();
$obj->display();
?>
</h2>
</center>