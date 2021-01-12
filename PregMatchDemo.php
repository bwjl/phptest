<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/6 下午4:50
 * Description: preg_match 返回一纬数组 preg_match_all 返回二纬数
 */

$url = 'https://shop.jc-saas.com/h5_project/#/detail?goodsId=7983&?goodsId=7984';


preg_match('/goodsId=\d+/', $url, $matches);
var_dump($matches);
$ret = str_replace('goodsId=', '', $matches[0]);
//var_dump($ret);

preg_match_all('/goodsId=\d+/', $url, $matches1);
//var_dump($matches1);


$str = '[品名]';

//preg_match('/\[.+\]/', $str, $matches2);
//var_dump($matches2);
//
//$str = str_replace(['[', ']'], '', $str);
//
//var_dump($str);

$list = [
    ['string' => '[品名]'],
    ['string' => '[规格]'],

];

$array = [];
foreach ($list as $item) {
    if (preg_match('/\[.+\]/', $item['string'], $matches)) {
        array_push($array, str_replace(['[', ']'], '', $matches[0]));
    }
}

var_dump($array);