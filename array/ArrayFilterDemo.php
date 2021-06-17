<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/6/17 8:28 下午
 * @Description: array_filter 自动过滤 0,'',false,null,[],0.0,'0'
 */


$arr = ['', 1, 0, false, null, [], 0.0, '0'];

var_dump(array_filter($arr));