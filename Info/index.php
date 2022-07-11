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