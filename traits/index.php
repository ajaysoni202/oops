<?php 
trait t1{
	function fun1(){
		echo "t1::fun1";
	}
}
trait t2{
	function fun1(){
		echo "t2::fun2";
	}
}
class class1{
	use t1,t2{
		t1::fun1 insteadof t2;
		t2::fun1 as fun2;
	}
}
$obj = new class1();
$obj->fun2();

?>