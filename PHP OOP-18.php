<center>
<h2>
<?php
/*
Constructor: Constructor is a function in any class
Which is automatically called when we make object of
That class. In other language like c, c++ it created
By giving function same name as class but in php it
Is Created by the following manner.
*/
class connection
{
public function __construct()
{
echo("Constructor Is Successfully Executed");	
}	
}
// We make only object of class
$obj=new connection();
?>
</h2>
</center>
