<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/7/31 上午11:47
 * Description:
 */


$array = [
    [
        'id' => 1,
        'attributes' => [
            ['name' => 'bear', 'age' => 18],
            ['name' => 'dog', 'age' => 2],
        ],
        'techAttributes' => [
            ['name' => 'bear1', 'age' => 18],
            ['name' => 'dog1', 'age' => 2],
        ]
    ]


];

$b = [
    ['name' => 'bear1', 'age' => 18],
];

//var_dump($array);

$a = array_column($array, 'attributes');

var_dump($a);