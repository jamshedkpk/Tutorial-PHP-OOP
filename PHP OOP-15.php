<center>
<h2>
<?php
/*
Access variables inside a function
*/
class car
{
public $name;
public function data()
{
$this->name="Jamshed Khan";
}
}
/*
By creating object of car class we can access its variables
And functions
*/
$obj=new car();
$obj->data();
echo $obj->name;
?>
</h2>
</center>
