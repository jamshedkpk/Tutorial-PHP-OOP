<center>
<h2>
<?php
/* 
Class : Collection of object is callled a Class
Object : An object is a real world entity like a car,
A chair, a table, a student
Each object has two things (1)- Property (2)- Function
Property of an object describes its characterestics like a car has its own model , color , price etc
Each property has its own value like a car is model 3322bb-Civics 
It has a color Green and price 7 Lack
Function of an object describes its behaviour like a car can move , Its doors can be open ect...
Similery a person has property like its name, age, marks etc...
And it has functions like it can move, run, eat, sweam....
Properties are also called member data,variables or Characterestics.
Functions are also called method, behaviours or module.
We can retreive variables from a class
In PHP $this->variable name is used for self refresences
Like $this->name; means $name........
*/

// Access variable data from outside of the class
class car
{
public $name="Honda Civic-2020";
public $price=2200000;
}
$obj=new car();
$name=$obj->name="Honda Civic-2020";
$price=$obj->price=2200000;
echo
(
"I Am A Car My Name Is =".$name. " And My Price Is  = ".$price
);	
?>
</h2>
</center>
