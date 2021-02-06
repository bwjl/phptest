<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/5 上午11:48
 * Description: file_get_contents 远程url
 */

$url = 'http://www.huhutong315.com/forum.php?mod=attachment&amp;aid=Nzc3NnwxZmIyNDZhMHwxNjA5ODE4NDIzfDB8NjQ1Ng%3D%3D&amp;nothumb=yes';

var_dump(file_get_contents($url));