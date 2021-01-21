<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/21 上午10:47
 * Description:  打印class对象私有属性
 */


class People
{
    private $name = "bear";
    private $age = 18;
    public $goodsMachine;
}

$people = new People();
$people1 = new People();

var_dump($people);
var_dump($people1);
var_dump($people->goodsMachine);


