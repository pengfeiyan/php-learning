<?php

/*
 * 内容：值传递与引用传递
 *
 *
 *
 */

//值传递
function swap($a,$b){
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

$a = 1;
$b = 10000;
swap($a,$b);
echo "a=",$a,",b=",$b;

//引用传递
function swap2(&$a,&$b){
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

$a = 1;
$b = 10000;
swap2($a,$b);
echo "\n";
echo "a=",$a,",b=",$b;

