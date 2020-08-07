<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/7 上午9:38
 * Description: __CLASS__ 获取当前类的名称，如何是父类那么是父类的名称
 */

class GetCurClassNameDemo
{
    public function getCurClassName()
    {
        return __CLASS__;
    }

    public function getClass()
    {
        return get_class($this);
    }
}


class GetCurClassNameDemoSon extends GetCurClassNameDemo
{

}

var_dump((new GetCurClassNameDemo())->getCurClassName()); //getCurClassNameDemo
var_dump((new GetCurClassNameDemoSon())->getCurClassName()); //getCurClassNameDemo
var_dump((new GetCurClassNameDemoSon())->getClass()); //GetCurClassNameDemoSon