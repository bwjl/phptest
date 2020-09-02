<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/2 下午1:53
 * Description:
 */

$goodsJson = '[{"MessageID":"713964193DA642A579938D52B6C2A7CD","TAG":"data-synchronization","BODY":"{\"businessType\":\"SKU\",\"entityId\":7533,\"httpMethod\":\"get\",\"middleEndOperationType\":\"修改\",\"url\":\"\/merchandise\/finished-product\/sku\/7533\"}","nPublishTime":"1598582208194","FirstConsumeTime":"1598594124820","nConsumedTimes":"1","NextConsumeTime":"1598594424820","receiptHandles":["713964193DA642A579938D52B6C2A7CD-MTc3IDE1OTg1OTQxMjQ4MjAgMzAwMDAwIDcgMCBxZDlpbnRlcm5ldC0wMyA3IDIzMw=="]}]';

//var_dump(json_decode($goodsJson, true));

$goodsArr = json_decode($goodsJson, true);

var_dump(json_encode($goodsArr));
var_dump(json_encode($goodsArr), JSON_UNESCAPED_UNICODE);

$array = ['name' => '熊', 'age' => 18];
var_dump(json_encode($array));
var_dump(json_encode($array, JSON_UNESCAPED_UNICODE));