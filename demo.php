<?php 
$a=1;
$b='abc';
$c='1abc';

// var_dump($a==$b);
	//打印的结果是bool类型的false
	//原因var_dump没有进行计算的步骤，直接呐$a与$b进行比较所以是false

echo PHP_EOL;





// = 是赋值   ==是比较数据，  ===就是要全等于， 不仅要比较数值 还要比较数据类型
var_dump($a==$c);
	// 结果是true
 echo PHP_EOL;





// var_dump($a===$c);
	// bool false  数据类型不相等
	// 因为$a=1  $c=1abc 一看就不像等啊
	echo  PHP_EOL;
 ?>