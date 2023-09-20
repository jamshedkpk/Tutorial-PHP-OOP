<center>
<h2>
<?php
/*
Function Overriding: Function overriding is same as other OOPs programming languages. In function overriding, both parent and child classes should have same function name with and number of arguments. It is used to replace parent method in child class. The purpose of overriding is to change the behavior of parent class method. The two methods with the same name and same parameter is called overriding.
*/
class parentclass
{
public function display()
{
echo("I Am A Parent Class Function");
}
}

class childclass extends parentclass
{
public function display()
{
echo("I Am A Child Class Function");	
}
}
 $p=new parentclass();
 $c=new childclass();
 $p->display();
 echo("<hr>");
 $c->display();
?>
</h2>
</center>
