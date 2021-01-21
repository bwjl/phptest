<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/21 下午4:59
 * Description: parse_str 将字符串解析为数组
 */

$url1 = 'limit=10&page=1&attr=&keywords=';

parse_str($url1, $result1);

var_dump($result1);