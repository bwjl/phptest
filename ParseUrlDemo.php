<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/6 下午4:46
 * Description: parse_url 解析URL
 */

//$url = 'https://shop.jc-saas.com/h5_project/#/detail?goodsId=7983';

$url1 = 'limit=10&page=1&attr=&keywords=';

var_dump(parse_url($url1));

//array(4) {
//    ["scheme"]=>
//  string(5) "https"
//    ["host"]=>
//  string(16) "shop.jc-saas.com"
//    ["path"]=>
//  string(12) "/h5_project/"
//    ["fragment"]=>
//  string(20) "/detail?goodsId=7983"
//}

//$url = 'http://www.baidu.com/index.php?m=content&c=index&a=lists&catid=6&area=0&author=0&h=0®ion=0&s=1&page=1';
//var_dump(parse_url($url));
//array(4) {
//    ["scheme"]=>
//  string(4) "http"
//    ["host"]=>
//  string(13) "www.baidu.com"
//    ["path"]=>
//  string(10) "/index.php"
//    ["query"]=>
//  string(71) "m=content&c=index&a=lists&catid=6&area=0&author=0&h=0®ion=0&s=1&page=1"
//}

