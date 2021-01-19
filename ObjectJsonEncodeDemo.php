<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/19 下午2:18
 * Description: stdClass 转json 为 {}
 */

$array = [];

$data = new stdClass();
$array['data'] = $data;

var_dump(json_encode($array));