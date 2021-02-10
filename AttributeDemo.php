<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/2/10 8:30 下午
 * @Description:
 * @param string $name
 */


$ret = Foo('');

var_dump($ret);

#[NotEmpty]
function foo(#[NotEmpty] string $name): string
{
    return 123;
}

$reflection = new ReflectionFunction('foo');
$classAttributes = $reflection->getAttributes('NotEmpty')[0]->getArguments();
var_dump($classAttributes);