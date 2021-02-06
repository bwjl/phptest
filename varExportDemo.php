<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/2/6 下午7:15
 * Description: var_export 按照数组初始化格式输出
 */


$array = [
    'name' => "bear",
    'age' => 18,
    'company' => [
        'location' => 'Wuhan',
        'salary' => 3000.00,
    ],
];

var_export($array);