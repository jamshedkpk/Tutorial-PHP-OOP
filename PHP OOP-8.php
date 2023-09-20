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
// Example of protected modifier
class car 
{
protected function display()
{
$name="Honda Civic-2020";
$price=2200000;
echo
(
"I Am A Car My Name Is =".$name. " And My Price Is  = ".$price
);	
}	
}
// Child class 
class sportcar extends car
{
public function search()
{
$this->display();	
}	
}
// From child class we can access protected function
$obj=new sportcar();
$obj->search();
?>
</h2>
</center>