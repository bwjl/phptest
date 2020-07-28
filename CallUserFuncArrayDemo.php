<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/7/28 下午2:43
 * Description:
 */

class CallUserFuncArrayDemo
{

    private $a = ['2020-07-28', 'handleStrtotime'];

    private function handleStrtotime(string $date)
    {
        return strtotime($date);
    }

    public function getB()
    {
        return  call_user_func_array([$this, $this->a[1]], [$this->a[0]]);
    }

}


$a = new CallUserFuncArrayDemo();

$b = $a->getB();

var_dump($b); //int(1595887200)
var_dump(date('Y-m-d H:i:s', $b)); //string(19) "2020-07-28 00:00:00"


