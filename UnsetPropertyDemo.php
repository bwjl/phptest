<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/12/29 上午9:47
 * Description:
 */

class Person
{
    private $name = "bear";

    public function doUnset()
    {
        unset($this->name);
    }

    public function getName(): string
    {
        return $this->name;
    }

}

$obj = new Person();

$obj->doUnset();
var_dump($obj->getName());