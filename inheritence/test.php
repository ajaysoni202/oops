<?php
class class1{
	function __construct(){
		echo "construct1";
	}
	function fun1(){
		echo "fun1";
	}
}
class class2 extends class1{

}

$obj=new class2();
$obj->fun1();
?>

<?php
class class1{
	function __construct(){
		echo "construct1";
	}
	function fun1(){
		echo "fun1";
	}
}
class class2 extends class1{
	function __construct(){
		echo "construct2";
	}
}
$obj=new class2();
//$obj->fun1();
?>

<?php
class class1{
	function __construct(){
		echo "construct1";
	}
	function fun1(){
		echo "fun1";
	}
}
class class2 extends class1{
	function __construct(){
		echo "construct2";
	}
	function fun1(){
		echo "fun2";
	}
}
$obj=new class2();
$obj->fun1();
?>

<?php
class class1{
	function __construct(){
		echo "construct1";
	}
	function fun1(){
		echo "fun1";
	}
}
class class2 extends class1{
		
		function __construct(){
		//parent::__construct();
		echo "construct2";
		parent::__construct();
	}
	function fun1(){
		echo "fun2";
	}
}
$obj=new class2();
//$obj->fun1();
?>

<?php
class class1{
	function __construct(){
		$this->num=1;
	}
	function fun1(){
		echo "fun1";
	}
}
class class2 extends class1{
		
		function __construct(){
		//parent::__construct();
		echo "construct2";
		$this->num=2;
		parent::__construct();
	}
	function fun1(){
		echo "fun2";
	}
}
$obj=new class2();
echo $obj->num;
?>