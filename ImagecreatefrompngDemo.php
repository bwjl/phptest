<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/10/22 下午4:57
 * Description: imagecreateXXX
 */

$url1 = 'https://shop.jxc.jc-dev.cn/data/upload/mall/common/06540167931523620.png';
$url2 = 'https://shop.jxc.jc-dev.cn//data/upload/mall/store/goods/1/1_06555753762493250_240.jpg';
$url3 = 'https://www.baidu.com/img/PCfb_5bf082d29588c07f842ccde3f97243ea.png';

//var_dump(imagecreatefrompng($url1));
//var_dump(imagecreatefrompng($url3));
//var_dump(imagecreatefromjpeg($url2));
//$url = 'https://vshop.jc-test.cn//data/upload/mall/store/goods/1/1_20201103145048_5fa0fdc84244d.jpg';
$file = 'https://vshop.niimbot.com//data/upload/mall/store/goods/1/1_20201105143904_5fa39e0822859.jpg';

//var_dump(imagecreatefromjpeg($url));
//var_dump(imagecreatefrompng($url));

$fileSuffix = 'jpg';

switch ($fileSuffix) {
    case 'jpg':
    case 'jpeg':
        $theImage = @imagecreatefromjpeg($file);
        if ($theImage === false) {
            $theImage = @imagecreatefrompng($theImage);
        }
        break;
    case 'png':
        $theImage = @imagecreatefrompng($file);
        break;
    case 'gif':
        $theImage = @imagecreatefromgif($file);
        break;
    default:
        $theImage = @imagecreatefromstring(file_get_contents($file));
        break;
}

var_dump($theImage);