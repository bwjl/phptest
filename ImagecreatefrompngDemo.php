<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/10/22 下午4:57
 * Description:
 */

$url1 = 'https://shop.jxc.jc-dev.cn/data/upload/mall/common/06540167931523620.png';
$url2 = 'https://shop.jxc.jc-dev.cn//data/upload/mall/store/goods/1/1_06555753762493250_240.jpg';
$url3 = 'https://www.baidu.com/img/PCfb_5bf082d29588c07f842ccde3f97243ea.png';

var_dump(imagecreatefrompng($url1));
var_dump(imagecreatefrompng($url3));
var_dump(imagecreatefromjpeg($url2));