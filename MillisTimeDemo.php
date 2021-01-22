<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/22 下午4:37
 * Description: 获取毫秒时间戳
 */

/**
 * millisecond
 */

function getMillisecond()
{
    list($s1, $s2) = explode(' ', microtime());
    return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
    //return $s2 * 1000 + round($s1 * 1000, 2);
}

var_dump(time());
var_dump(microtime());
var_dump(getMillisecond());