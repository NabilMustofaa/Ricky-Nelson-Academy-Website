<?php

namespace App\Models;


class User 
{
   protected static $user=[
        'nama'=>"Nabil Mustofa",
        'posisi'=>"LW"
   ];
   public static function info(){
       return self::$user;
   }
}
?>