<?php
class class1{
	static public $num=10;
	/*function fun1(){
		echo "test";
	}*/
}
//$obj=new class1();
echo class1::$num;
?>



<?php
class class1{
	static public $num1=10;
	public $num2=20;
	static function fun1(){
		echo self::$num1;
	}
}

echo class1::fun1();
?>


<?php
class class1{
	static public $num1=10;
	
	function __construct(){
		echo "Hello"; 
	}

	static function fun1(){
		echo "test";
	}
}

echo class1::fun1();
?>


<?php 
class class1{
	public $num=10;

	function fun1(){
		$this->num++;
	}
}
$obj=new class1();

$obj->fun1();

echo $obj->num;
?>

<?php 
class class1{
	public $num=10;

	function fun1(){
		$this->num++;
	}
}
$obj=new class1();

$obj->fun1();
echo $obj->num;

$obj->fun1();
echo $obj->num;

$obj->fun1();
echo $obj->num;
?>

<?php 
class class1{
	public $num=10;

	function fun1(){
		$this->num++;
	}
}
$obj=new class1();

$obj->fun1();
echo $obj->num;

echo $obj->num;

echo $obj->num;
?>

<?php 
class class1{
	static  public $num=10;

	static function fun1(){
		self::$num++;
	}
}
class1::fun1();
echo class1::$num;

class1::fun1();
echo class1::$num;

class1::fun1();
echo class1::$num;
?>