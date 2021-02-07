<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/4 下午2:38
 * Description: strtotime 测试
 */


$a = null;

//var_dump(strtotime($a)); //bool(false)

$date = '2020.10.23';

$time = strtotime(str_replace('.', '-', $date));

var_dump(date('Y-m-d', $time));

