<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/7/14 2:41 下午
 * @Description: empty('0.00') false empty('0') true
 */

var_dump(empty('0.00')); //false
var_dump(empty('0')); //true