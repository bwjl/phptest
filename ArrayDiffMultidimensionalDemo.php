<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/24 下午4:15
 * Description: array_diff不支持多维数组
 */


$array1 = [
    md5(json_encode(['category_id' => 1, 'value_name' => '哈哈'])),
    md5(json_encode(['category_id' => 2, 'value_name' => '哈哈'])),
];

$array2 = [
    md5(json_encode(['category_id' => 1, 'value_name' => '哈哈'])),
];

var_dump(array_diff($array1, $array2));