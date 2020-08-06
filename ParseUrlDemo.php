<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/6 下午4:46
 * Description: parse_url 解析URL
 */

$url = 'https://shop.jc-saas.com/h5_project/#/detail?goodsId=7983';

var_dump(parse_url($url));

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
