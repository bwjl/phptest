<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/21 下午4:59
 * Description: parse_str 将字符串解析为数组
 */

$url1 = 'limit=10&page=1&attr=&keywords=';

parse_str($url1, $result1);

$url2 = 'platform_system_id=&platform_version=&entrance_type_id=&event_id=app_00001&goods_id=&goods_name=&goods_one_code=&prev_event_id=app_00001&is_from_sms=&prev_event_name=%E6%B5%8F%E8%A7%88%E5%95%86%E5%9F%8E%E9%A6%96%E9%A1%B5&session_id=18dd45_1611219021413&event_name=%E6%B5%8F%E8%A7%88%E5%95%86%E5%9F%8E%E9%A6%96%E9%A1%B5&event_type=2&event_path=app_00093%2Capp_00001%2Capp_00058%2Capp_00058%2Capp_00001%2Capp_00058%2Capp_00058%2Capp_00033%2Capp_00057%2Capp_00001%2Capp_00001%2Capp_00001';
parse_str($url2, $result2);

var_dump($result1);
var_dump($result2);