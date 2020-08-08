<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/8 上午10:36
 * Description: 关键字static用法 不允许被变量赋值
 */

$a = [1, 2, 3, 4, 5, 6, 7, 8];

$name = 'className' . time() . '.log';

//static $fileName = $name; //不允许被变量赋值