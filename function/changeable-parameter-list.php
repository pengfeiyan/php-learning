<?php
/*
 * 内容： 可变参数列表
 *
 * 实现1（php5.5之前用的比较多）
 * func_num_args()
 * func_get_arg()
 * func_get_args()
 *
 * 实现2(php5.6以及更晚)
 * function sum(...$sums)
 */

function get_sum(){
    // 实现1
    $args_sum = func_num_args(); //获取参数个数；
    $sum = 0;
    if($args_sum){
        return $sum;
    }else{
        for($i=0;$i<$args_sum;$i++){
            $sum += func_get_arg($i); // 获取参数值，形参输入为偏移量；
        }
        return $sum;
    }
}


function get_sum2(...$nums){
    $sum = 0;
    print_r($nums);
    if(!$nums){
        return $sum;
    }
    else{
        foreach ($nums as $num){
            $sum += $num;
        }
        return $sum;
    }
}

get_sum2();



?>