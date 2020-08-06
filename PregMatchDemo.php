<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/6 下午4:50
 * Description:
 */

$url = 'https://shop.jc-saas.com/h5_project/#/detail?goodsId=7983&?goodsId=7984';


preg_match('/goodsId=\d+/', $url, $matches);
var_dump($matches);
$ret = str_replace('goodsId=', '', $matches[0]);
var_dump($ret);

preg_match_all('/goodsId=\d+/', $url, $matches1);
var_dump($matches1);
