<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/12/15 下午2:04
 * Description:
 */

$array1 = array(4, 6, 8, 10, 12, 2);
$array2 = array(1, 2, 3, 4, 5, 6);

var_dump(array_intersect($array1, $array2));
var_dump(array_intersect($array2, $array1));