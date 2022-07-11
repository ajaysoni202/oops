<?php 
class class1{
	function fun1(){
		echo "fun1";
	}
	function fun2(){
		echo "fun2";
	}
}
$obj= new class1();
$obj->fun1();
?>

<?php 
class class1{
	//$x=1; Error - syntax error, unexpected variable "$x"
	public $x=1;
	function fun1(){
	//	echo $x; Error -  Warning: Undefined variable $x 
	//echo $this->x; ($this is current insitence)
	return $this->x++;
	}
	function fun2(){
		echo "fun2";
	}
}
$obj= new class1();
$obj->fun1();
echo $obj->x;
?>

<?php 
class class1{
	public $x=1;
	function fun1(){
	return $this->x++;
	}
}

$obj1= new class1();
$obj2= new class1();

$obj1->fun1();
echo $obj2->x;	
echo "<br>";
echo $obj1->x;
?>

<?php 
class class1{
	function __construct(){
		echo "start";
	}
	function __destruct(){
		echo "end";
	}
}
$obj1= new class1();
?>

<?php 
class class1{
	function __construct(){
		echo "start";
	}
	function fun1(){
		echo "Hello";
	}
	function __destruct(){
		echo "end";
	}
}
$obj1= new class1();
$obj1->fun1();
?>

<?php 
class class1{
	function __construct(){
	$this->x=10;
	}
	function fun1(){
		echo $this->x;
	}
	function __destruct(){
		echo "end";
	}
}
$obj1= new class1();
$obj1->fun1();
?>

<?php 
class class1{
	function __construct($y){
	$this->x=$y;
	}
	function fun1(){
		echo $this->x;
	}
	function __destruct(){
		echo "end";
	}
}
$obj1= new class1(20);
$obj1->fun1();
?>