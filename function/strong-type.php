<?php

/*
 * 内容：强类型参数
 *
 * 强类型参数：支持
 * php5.0.0     class/interface
 * php5.1.0     array
 * php5.4.0     callable
 * php7.0.0     bool,float,int,string
 */



// 声明，强类型转换，类型不符合就编译报错。
declare(strict_types = 1);

function sum_int($a,$b){
    // 未使用强类型转换
    return $a+$b;
}
echo sum_int(1,2),"\n";
echo sum_int(1.4,2.5),"\n";


function sum(int $a, int $b){
    return $a+$b;
}
echo sum(1,2),"\n";
echo sum(1.4,2.5); // 声明declare就会报错，没有声明不报错，但是会强转成int进行计算。


// 虽然指定类型，但是依然可以传null进来，但是7.1.0是不允许的（实践得到），具体还有待实践。


?>