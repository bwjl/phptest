<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/4/29 2:07 下午
 * @Description: explode 支持null 空字符串
 */

var_dump(explode(',', null));
var_dump(explode(',', ''));

//array(1) {
//    [0]=>
//  string(0) ""
//}