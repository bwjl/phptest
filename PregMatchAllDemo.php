<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/3/29 4:01 下午
 * @Description:
 */

$pattern = "/(?<=\\()[^\\)]+/";

$str = '耗材(配件,滞销款,定制款,常备款),硬件(常备款,定制款,滞销款,配件)';

$pattern1 = "/\(.*\)/";

preg_match_all($pattern, $str, $matches);
preg_match($pattern, $str, $matches1);
preg_match($pattern, 'xxx', $matches2);

var_dump($matches, $matches1, $matches2);