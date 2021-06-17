<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/6/16 3:10 下午
 * @Description:
 */


$TC_ACCESS_KEY_ID = 'test0001';
$TC_ACCESS_SECRET = '123456';
var_dump('Basic ' . base64_encode($TC_ACCESS_KEY_ID . ':' . $TC_ACCESS_SECRET));