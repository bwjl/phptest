<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/8/4 上午11:39
 * Description:
 */


//$json = '[{"MessageID":"713964194D6242A5799317A3DFA94BC9","TAG":"data-synchronization","BODY":"{\"businessType\":\"Inventory\",\"entityId\":544,\"httpMethod\":\"get\",\"middleEndOperationType\":\"新增\",\"url\":\"\/inventory\/inventory\/sku-type-sum\/A1B88788802\"}","nPublishTime":"1599286215593","FirstConsumeTi":"1599286217689","nConsumedTimes":"1","NextConsumeTime":"1599286517689","receiptHandles":["713964194D6242A5799317A3DFA94BC9-NTc4IDE1OTkyODYyMTc2ODkgMzAwMDAwIDIgMCBxZDlpbnRlcm5ldC0wMSAwIDU3OA=="]}]';

$json = '{"goods_data":[{"order_sn":"210315162443310615","goods_sn":"A1B88478901","pay_time":1615796419},{"order_sn":"210311144228909232","goods_sn":"A2A78391901","pay_time":1615444996}]}';

var_dump(json_decode($json, true));

