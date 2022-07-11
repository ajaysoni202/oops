<?php 
class class1{
	function fun1(){
		echo "fun1";
	}
}

class class2 extends class1{
	function fun2(){
		echo "fun2";
	}
}

class class3 extends class2{
	function fun3(){
		echo "fun3";
	}
}

class class4 extends class3{
	function fun4(){
		echo "fun4";
	}
}

$obj= new class3();
$obj->fun1();

?>

<?php 
trait class1{
	function fun1(){
		echo "fun1";
	}
}

class class2{
	use class1;
	function fun2(){
		echo "fun2";
	}
}

class class3 extends class2{
	function fun3(){
		echo "fun3";
	}
}

class class4 extends class3{
	function fun4(){
		echo "fun4";
	}
}

$obj= new class2();
$obj->fun1();

?>

<?php 
trait t1{
	function fun1(){
		echo "t1::fun1";
	}
}
trait t2{
	function fun2(){
		echo "t2::fun2";
	}
}
class class1{
	use t1,t2;

}
$obj = new class1();
$obj->fun1();

?>

<?php 
trait t1{
	function fun1(){
		echo "t1::fun1";
	}
}
trait t2{
	function fun2(){
		echo "t2::fun2";
	}
}
class class1{
	use t1,t2;
		function fun2(){
		echo "class1::fun2";
	}
}
$obj = new class1();
$obj->fun2();

?>

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