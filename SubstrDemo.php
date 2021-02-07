<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/17 下午2:34
 * Description: substr 开始index 长度
 */

$str = '202009170000000062';

var_dump(substr($str, 0, 8));
var_dump(substr($str, -10));
var_dump(substr('锅圈食汇河南省郑州市巩义市孝义镇店410969', -6));