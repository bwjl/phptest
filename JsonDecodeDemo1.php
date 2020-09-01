<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/4 上午11:39
 * Description:
 */


$json = '[{"MessageID":"713964193DA642A579938D52B6C2A7CD","TAG":"data-synchronization","BODY":"{\"businessType\":\"FinishedProduct\",\"entityId\":8155,\"httpMethod\":\"get\",\"middleEndOperationType\":\"新增\",\"url\":\"\/merchandise\/finished-product\/8155\"}","nPublishTime":"1598582208194","FirstConsumeTime":"1598594124820","nConsumedTimes":"1","NextConsumeTime":"1598594424820","receiptHandles":["713964193DA642A579938D52B6C2A7CD-MTc3IDE1OTg1OTQxMjQ4MjAgMzAwMDAwIDcgMCBxZDlpbnRlcm5ldC0wMyA3IDIzMw=="]}]';

var_dump(json_decode($json, true));

