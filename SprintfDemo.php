<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/22 上午11:40
 * Description:
 */


$val1 = 5;
$val2 = 0.007;

var_dump(sprintf("%01.2f", $val1));
var_dump(sprintf("%06.2f", $val1)); //补0 保证宽度最小为6位
var_dump(sprintf("%01.2f", $val2));