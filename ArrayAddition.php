<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/6/2 6:27 下午
 * @Description: 索引型数组 + ，被加数组直接被忽略
 */

$array1 = ['D11', 'B3S'];
$array2 = ['Dxx', 'B3Sxxx'];

var_dump($array1 + $array2);
var_dump(array_merge($array1, $array2));