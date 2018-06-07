<?php 
//代码从上而下执行  没有调用方法
// $a=900;//实参

//形参把$a覆盖了所以是200

// function  test($a)
// {
// 	echo $a=300;
// }

// test($a);
// echo $a;
// 数组中 用于数组的 key 和 value之间的关系 例如：
// $a = array(
//   '0' => '1',
//   '2' => '4',
// );

// echo $a['0'];
// echo $a['2'];
// 类中 用于引用类实例的方法和属性 例如：
// class Test{
//     function add(){return $this->var++;}
//     var $var = 0;
// }

// $a = new Test; //实例化对象名称
// echo $a->add();
// echo $a->var;
// 
// ：：
// 类中 静态方法和静态属性的引用方法 例如

class Test{
    public static function test(){
    public 	static $test = 1;
   }
}

 ?>