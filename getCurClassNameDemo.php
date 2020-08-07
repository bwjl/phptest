<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/7 上午9:38
 * Description: __CLASS__ 获取当前类的名称
 */

class getCurClassNameDemo
{
    public function getCurClassName()
    {
        return __CLASS__;
    }
}

var_dump((new getCurClassNameDemo())->getCurClassName());