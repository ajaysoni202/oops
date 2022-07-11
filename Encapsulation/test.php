<?php 
class class1{
	protected $num;
	function __construct(){
		$this->num=1;
	}
	function getNum(){
		return $this->num;
	}
}

$obj= new class1();

echo $obj->getNum();
?>

<?php 
class class1{
	protected $num;
	function __construct(){
		$this->num=1;
	}
}
class class2 extends class1{
	function getNum(){
		return $this->num;
	}
}

$obj2= new class2();

echo $obj2->getNum();
?>

<?php 
class class1{
	private $num;
	function __construct(){
		$this->num=1;
	}

	private function getDatap(){
		echo "Hello";
	}
}
class class2 extends class1{
	protected function getDatap(){
		echo "hello2";
	}
}

$obj2= new class2();

echo $obj2->getDatap();
?>

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