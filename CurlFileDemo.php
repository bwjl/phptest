<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/11 下午2:29
 * Description:
 */


$fileUrl = 'http://jccg.p.jc-test.cn/./file/template/user/133111/243_20200629113108_background_4p5nthmorja5i4605hr4ncl4u6.png';

$ch = curl_init();
$timeout = 10;
curl_setopt($ch, CURLOPT_URL, $fileUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$content = curl_exec($ch);

var_dump($content);