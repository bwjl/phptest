<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/1/22 下午2:49
 * Description: self和static的区别 self 永远是当前类 不受override影响
 */

class Father
{

    const METHOD = 'get';

    public function getMethodBySelf(): string
    {
        return self::METHOD;
    }

    public function getMethodByStatic(): string
    {
        return static::METHOD;
    }
}

class Son extends Father
{
    const METHOD = 'post';
}

$father = new Father();
var_dump($father->getMethodBySelf(), $father->getMethodByStatic());

$son = new Son();
var_dump($son->getMethodBySelf(), $son->getMethodByStatic());