<center>
<h2>
<?php
/*
Function Overloading: Function overloading means when we define 
Two functions with the same name but different parameters......
In php it is not possible to direct use function overloading so 
For this purpose magic function is used...
*/
class shape
{
public function __call($name_of_function,$parameters)
{
if($name_of_function=='area')
{
$count=count($parameters);
switch($count)
{
case(1): echo("Area of circle is = ". 3.14*$parameters[0]);
break;
case(2): echo("Area of Rectangle is = ". $parameters[0]*$parameters[1]);
break;
}
}
}
}

$obj=new shape();
$obj->area(2,4);
echo("<hr>");
$obj->area(2);
?>
</h2>
</center>
