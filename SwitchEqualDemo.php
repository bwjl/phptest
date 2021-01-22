<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/22 下午3:42
 * Description: 大小写不一样 == 为false
 */


$method = 'POST';

switch ($method) {
    case 'GET':
        $result = 'GET';
        break;
    case 'POST':
        $result = 'POST';
        break;
    default :
        $result = 'default';
}

var_dump($result);
var_dump('post' == 'POST'); //false