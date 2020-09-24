<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/24 上午11:28
 * Description: 返回一个相反顺序的新数组
 */


$array = [
    ['id' => 1, 'name' => 'bear'],
    ['id' => 2, 'name' => 'dog'],
];


var_dump(array_reverse($array));