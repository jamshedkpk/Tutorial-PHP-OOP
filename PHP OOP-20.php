<center>
<h2>
<?php
/*
Destructor: Destructor is used to destroy an object
Generally it is used to make free memory and recouces
By destroy each object or variable
*/
class connection
{
public function __construct($name,$price)
{
echo
(
"I Am A Car My Name Is =".$name. " And My Price Is  = ".$price
);	
}	
public function __destruct()
{
echo("Object Is Successfully Destroyed");	
}
}
// We make only object of class
$obj=new connection("Honda Civic-2020",2200000);
?>
</h2>
</center>
