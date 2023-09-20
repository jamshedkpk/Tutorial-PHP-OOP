<?php
/*
Namespace: Namespace is a collection of a class we canvas
Create a namespace and then we can define different classess
Inside it. It is used for reduce coding. Like in a bank development system
Manager is a user and Cashier is also user both have same attributes and functions
So when develper create a such system then he create a namespace user
Inside it he create a manager class and other one is cashier
Class. 
*/
namespace user;
class admin
{
public function display()
{
echo("I am an admin class function");
}
}
namespace user;
class cashier
{
public function display()
{
echo("I am an cashier class function");
}
}
use user\admin as x;
$obj=new x();
$obj->display();
use user\cashier as y;
$obj=new y();
$obj->display();
?>