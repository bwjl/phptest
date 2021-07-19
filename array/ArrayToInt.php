<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/7/19 11:17 上午
 * @Description: 非空array转int恒定为1；
 */

$arr = [3, 5, 1];
$arr1 = [100, 5, 10];
$arr2 = [];

var_dump(intval($arr));
var_dump(intval($arr1));
var_dump(intval($arr2));