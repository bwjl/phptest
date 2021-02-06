<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/30 下午5:03
 * Description: json_decode 用法
 */

$json = '{"actionModel":{"models":[{"barcodeFormat":0,"data":"","dateFormat1":"","dateFormat2":"","excelString":"","fakeBoldText":false,"fontProperty":0,"fontSpacing":0,"hasGoodsBarCode":false,"hasSetHint":false,"height":32.083332,"id":1610354862113,"imageUrl":"","increasesNum":"","lineHSType":0,"lineSpacing":0,"lineType":0,"lineWidth":0,"local_url":"","lock":false,"rotate":0,"serialBits":"","serialPrefix":"","serialStart":"","serialSuffix":"","shapeType":0,"string":"[\u54c1\u540d]","stringLocation":0,"tagType":1,"textAlignment":0,"textFont":"\u9ed8\u8ba4","textSize":24,"textSkewX":false,"time":"","underlineText":false,"width":193.74998,"x":19.583332,"y":19.583332}]},"background":"","change_name":0,"goods_code":"","height":0,"localBackground":[],"local_background":"","printerType":"","title":"","type":0,"width":0}';

//var_dump(json_decode($json, true)['actionModel']['models']);

$list = json_decode($json, true)['actionModel']['models'];

$templateFields = array_column($list, 'string');

//var_dump(json_decode('', true));

//$list = json_decode($json, true)

var_dump($templateFields);


$fields = '';

foreach ($templateFields as $item) {

}
