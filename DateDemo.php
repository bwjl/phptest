<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/22 下午2:12
 * Description:
 */


$item = [
    'product_year' => '2020-11-04',
    'shelf_life' => 10,
];

var_dump(strtotime($item['product_year']));

$ret = date('Y-m-d', strtotime($item['product_year']) + intval($item['shelf_life']) * 3600 * 24);

var_dump($ret);

function getExpireDate(string $productYear, int $shelfLife, int $shelfLifeType): string
{
    if ($shelfLifeType == 1) {
        return date('Y-m-d', strtotime($productYear) + intval($shelfLife) * 3600 * 24);
    } elseif ($shelfLifeType == 2) {
        return date('Y-m-d', strtotime('+ ' . $shelfLife . 'months ', strtotime($productYear)));
    }

    return '';
}

var_dump(getExpireDate('2019-10-01', 2, 2));
var_dump(getExpireDate('2019-10-01', 2, 1));