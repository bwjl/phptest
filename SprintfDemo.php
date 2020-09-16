<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/16 下午3:37
 * Description: sprintf 格式化字符串 不足的前面补0
 */


$str = '12';

var_dump(sprintf("%010s", $str));
