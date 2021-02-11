<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/2/10 8:30 下午
 * @Description:
 */


$ret = Foo('');

var_dump($ret);

#[NotEmpty]
function foo(#[NotEmpty] string $name): string
{
    return 123;
}

$reflection = new ReflectionFunction('foo');
//$ret = $reflection->getAttributes('NotEmpty')[0]->getArguments();

//$reflection->getAttributes()
$ret1 = $reflection->getParameters();
$ret2 = $reflection->getAttributes();
var_dump($ret1, $ret2);

