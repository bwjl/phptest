<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/11 下午5:32
 * Description:
 */

$url = 'http://jccg.p.jc-test.cn/./file/template/user/133111/243_20200629113108_background_4p5nthmorja5i4605hr4ncl4u6.png';

var_dump(get_headers($url));


$url = './file/template/user/133111/243_20200629113108_background_4p5nthmorja5i4605hr4ncl4u6.png';

var_dump(get_headers($url)); //bool(false)

