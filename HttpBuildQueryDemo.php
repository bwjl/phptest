<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/25 下午5:05
 * Description: http_build_query 数组转换url_encode
 */

$param = [
    'goods_id' => 1233,
    'goods_name' => 'iPhone12 pro 苹果手机'

];

$query = http_build_query($param);

var_dump($query);