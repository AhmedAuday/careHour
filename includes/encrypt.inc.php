<?php

    function encrypt($data){
        $data = md5(sha1(md5($data).sha1("my_password_is_hhh_123").$data));//change to ocarhour key, for double checking the password
        return $data;
    }

    function encode($val){
      $key = "hama123";
      $ascii_key = 0;
      $code = "";
      for($i = 0; $i < strlen($key); $i++){
        $ascii_key = $ascii_key + ord($key[$i]);
      }
      $x = strval(($ascii_key * $val)*2);
      for($i = 0; $i < strlen($x); $i++){
        $code = $code . chr($x[$i]+64);
      }
      $code++;
      return $code;
    }

    function decode($x){
      $x--;
      $key = "hama123";
      $ascii_key = 0;
      $code = "";
      for($i = 0; $i < strlen($key); $i++){
        $ascii_key = $ascii_key + ord($key[$i]);
      }
      for($i = 0; $i < strlen($x); $i++){
        $code = $code . strval(ord($x[$i])-64);
      }
      return round((intval($code)/($ascii_key*4))*2, 0);
    }

?>
