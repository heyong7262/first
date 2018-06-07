<?php 


$file_测试 = 100;
echo $file_测试;

class Person{
	static $name = "张三";
	public $sex = "男";

	function __construct(){
		self::$name++;
		$this->sex++;
	}

}
header("content-type:text/html;charset=utf8");
$obj=new Person;
echo Person::$name;
/*$obj = new Person;
$obj1 = new Person;
$obj3 = new Person;
echo Person::$num;
echo $obj3->num1;
*/


 ?>