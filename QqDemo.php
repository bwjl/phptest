<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/24 下午1:57
 * Description: ?? 三元运算符
 */


$array = [
    'age' => '',
];

$name = $array['name'] ?? 'no name';
$age = $array['age'] ?? 'no age';

var_dump($name);
var_dump($age);