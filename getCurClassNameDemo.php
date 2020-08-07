<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/7 上午9:38
 * Description:
 */

class getCurClassNameDemo
{
    public function getCurClassName()
    {
        return __CLASS__;
    }
}

var_dump((new getCurClassNameDemo())->getCurClassName());