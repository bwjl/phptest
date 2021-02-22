<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/2/22 3:01 下午
 * @Description:
 */

$ret = date("Y-m-d", strtotime('+1 months', strtotime('2020-02-22')));

var_dump($ret);
