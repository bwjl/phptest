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
    'fillet_radius' => 2,
    'list' => [
        ['machine_id' => 28, 'label_spacing' => 2, 'print_length' => 1.15, 'status' => 1, 'material_type' => '1,2'],
        ['machine_id' => 28, 'label_spacing' => 2, 'print_length' => 1.15, 'status' => 1, 'material_type' => '1,2'],
    ],

];

echo(json_encode($array, JSON_UNESCAPED_UNICODE));