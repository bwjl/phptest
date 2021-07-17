<?php
/**
 * Created with PhpStorm.
 * @Author: bear
 * @Date: 2021/7/12 4:09 下午
 * @Description:
 */

// 冒泡排序
function bubble_sort($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {//循环对比的轮数
        for ($j = 0; $j < $len - $i - 1; $j++) {//当前轮相邻元素循环对比
            if ($arr[$j] > $arr[$j + 1]) {//如果前边的大于后边的
                $tmp = $arr[$j];//交换数据
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
    return $arr;
}

$arr = [5, 2, 4, 7, 9, 4, 2, 6, 8, 3];
print_r(bubble_sort($arr));