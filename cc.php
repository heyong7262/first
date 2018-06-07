<?php 
// $num=12233122;
// echo number_format($num);

$temp='12233122444555';
//定义接收字符串的数组
$res=array();
$str='';
for ($i=0; $i<strlen($temp); $i++) { 
		if ($i>0 && substr($temp,$i,1)!=substr($temp,$i-1,1)) {
			$res[]=$str;
			$str=substr($temp,$i,1);
	}else{
		$str .=substr($temp,$i,1);
		if ($i==strlen($temp)-1) {
			$res[]=$str;
		}
	}
}
print_r($res);



// template <class T>  
// ResultCode BSTree<T>::Insert(T &x)  
// {  
//     BTNode<T> *p = root, *q = NULL;  
//     while(p) {  
//         q = p;  
//         if(x < p -> element) p = p -> lChild;  
//         else if(x > p -> element) p = p -> rChild;  
//         else {  
//             x = p -> element;  
//             return Duplicate;  
//         }  
//     }

 ?>