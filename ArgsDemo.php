<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/10/23 上午9:28
 * Description:
 * @param array $str
 */


function write_log(...$str)
{
    var_dump($str);
}

write_log('info1', 'info2', 'info3');
