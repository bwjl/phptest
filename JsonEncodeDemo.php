<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/11/5 上午11:40
 * Description:
 */


//$array = [
//    'username' => '13911050001',
//    'password' => '982212cd510a8b143aea11b957822e55'
//];
//
//var_dump(json_encode($array));

$array = [
    'scheme_name' => '方案1',
    'machine_id' => [9, 13],
    'type' => 1,
    'is_distinguish_width' => 1,
    'ladder_list' => [
        ['full_num' => 8, 'price_id' => 1, 'discount' => 7],
        ['full_num' => 8, 'price_id' => 2, 'discount' => 7],
    ],
    'width_list' => [
        ['price_id' => 1, 'price_start' => 10, 'width_step' => 10, 'price_step' => 2],
        ['price_id' => 2, 'price_start' => 10, 'width_step' => 10, 'price_step' => 2],
    ],
];

echo(json_encode($array, JSON_UNESCAPED_UNICODE));