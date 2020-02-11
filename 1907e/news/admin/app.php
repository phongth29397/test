<?php
define("ADMIN_ROOT_PATH",__DIR__);//ADMIN_ROOT_PATH=C:\xampp\htdocs\1907e\news\admin
define("ADMIN_ROOT_SITE","http://localhost/1907e/news/admin/");
//todo ............
class App
{
  static function check_login(){
        $user=$_SESSION['user'];
        $user=json_decode($user);
        if($user->id>0){
            return true;
        }
      return false;
  }

}
