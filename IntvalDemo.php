<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/6 下午4:40
 * Description: intval 字符混合数字字符串
 */

var_dump(intval('goodsId=7983')); //int(0)
var_dump((int)'goodsId=7983'); //int(0)