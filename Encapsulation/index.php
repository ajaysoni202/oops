<?php 
class class1{
	private $num;
	function __construct(){
		$this->num=1;
	}

	function getDatap(){
		echo "Hello";
	}
}
class class2 extends class1{
	function getDatap(){
		echo "hello2";
	}
}

$obj2= new class2();

echo $obj2->getDatap();
?>