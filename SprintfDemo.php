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
//这是什么意思，f是浮点数，第一步按照格式 %   '（补位值） 宽度值  格式化类型  这三部分，语法之间必须紧挨着不能用空格
var_dump(sprintf("%06.2f", $val1)); //补0 保证宽度最小为6位
var_dump(sprintf("%01.2f", $val2));