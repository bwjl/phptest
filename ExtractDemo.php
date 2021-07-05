<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/7/5 10:36 上午
 * @Description: 将二维数组 键名变量名等于键值
 */

$array = [
    'name' => 'bear',
    'age' => 18,
    'height' => 1.80
];

extract($array);

var_dump($name, $age, $height);