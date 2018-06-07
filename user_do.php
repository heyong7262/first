<?php 
header("content-type:text/html;charset=utf8");
include "./mysql.class.php";
$obj=new Mysql();

include "./user.class.php";
$obj2=new User();
$name = isset($_POST['name'])&&!empty($_POST['name'])?trim($_POST['username']):'';//用户名 
$password = isset($_POST['password'])&&!empty($_POST['password'])?trim($_POST['password']):'';//密码 
$sql="select * from user where name='$name' nad password ='$password'";
$data=$obj2->login($sql);



 ?>