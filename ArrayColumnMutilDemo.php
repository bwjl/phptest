<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/4/30 3:42 下午
 * @Description: array_column 第三个参数 index_key
 */

$list = [
    ['id' => 1, 'name' => 'bear', 'age' => 100],
    ['id' => 2, 'name' => 'dog', 'age' => 8],
    ['id' => 3, 'name' => 'pig', 'age' => 1],
    ['id' => 4, 'name' => 'cat', 'age' => 10],
];

var_dump(array_column($list, 'id', 'name'));