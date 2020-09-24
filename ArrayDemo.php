<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/24 下午3:28
 * Description:
 */

$array = array(
    'id' => '416400000000002975',
    'code' => '2872',
    'name' => '可售原料3',
    'unitName' => '个',
    'isMostUnit' => false,
    'isBox' => false,
    'isPackage' => false,
    'stdPrice' => 15.0,
    'costPrice' => 19.0,
    'isEnable' => true,
    'itemClassId' => '416400000000000048',
    'spicy' => 1,
    'isSpicy' => false,
    'sortOrder' => '0',
    'unitId' => '416400000000000010',
    'itemClassName' => '原料',
    'pinyin' => 'KSYL3',
    'itemCode' => '2872',
    'itemType' => 1,
    'originItemBarcodeList' =>
        array(),
);

$val = $array['originItemBarcodeList'] ? ($array['originItemBarcodeList'][0]['placeName'] ?? '') : '';

var_dump($val);


