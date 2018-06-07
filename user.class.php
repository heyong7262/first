<?php 
class User{
    public $name;//用户名
    public $password;//密码
    /**
     *  登录方法
     */
    public function login(){
         if(empty($_POST['username']) || empty($_POST['password']))
    //你登录判断条件，一般是用户名和密码去匹配数据库，密码要MD5加密
    {
           return false; 
         }else{
            return true;
         }
    }
/**
     *  注册方法
     */
    // public function register(){
    //     $name = $_POST['name'];
    //     $password =MD5 ($_POST['password']); 
    //     // （后写入数据库，写入前需要验证是否存在）      
    // }
}


 ?>