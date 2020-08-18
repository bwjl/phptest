<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/18 上午11:11
 * Description: php md5加密
 */

//String password = "a12345679";
//        String salt = "6y47";

$password = 'a12345679';
$salt = '6y47';

var_dump(md5(md5($password . $salt))); //982212cd510a8b143aea11b957822e55


