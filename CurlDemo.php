<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/10/9 下午5:06
 * Description:
 */


$fileUrl = 'https://www.baidu.com/img/PCtm_d9c8750bed0b3c7d089fa7d55720d6cf.png';
//$fileUrl = 'https://api.jxc.jc-saas.com/img/jxc/jxc/api/old_image/product/productImages/1186483046983970818/1593538505555304.JPG';

downloadFile('', '', $fileUrl);

function downloadFile($saveUrl = '', $filename = '', $fileUrl)
{
//        if(strpos($fileUrl,JXC_IMG_HOST)===false){
//            $fileUrl = JXC_IMG_HOST.$fileUrl;
//        }

    //$rootPath = DEFAULT_UPLOAD_PATH.$saveUrl;
//    if (!is_dir($rootPath)) {
//        mkdir($rootPath, 0777, true);
//    }
//    $filePath = $rootPath.$filename;
//    $fp = fopen($filePath, "w+");
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $fileUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $content = curl_exec($ch);


    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    var_dump($httpCode);
    die;


    curl_close($ch);


    if ($content == false) {
        return '';
    }
//    fwrite($fp, $content);
//    fclose($fp);
    unset($content, $fileUrl);
    return $filename;
}

//$timeout=5;
//$ch=curl_init();
//curl_setopt($ch,CURLOPT_URL,$fileUrl);
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//$content=curl_exec($ch);
//curl_close($ch);
//
//
//
//var_dump($content);
//
//$content1 = ($fileUrl);
//
//var_dump($content1);
//
//
//die;
//
//if($content == false){
//    return '';
//}