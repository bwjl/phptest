<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2021/2/5 下午3:34
 * Description: json_decode 测试
 */


$json = '{"businessType":"FinishedProduct","entityId":17237,"httpMethod":"get","middleEndOperationType":"新增","url":"/merchandise/finished-product/17237"}';

var_dump(json_decode($json, true));