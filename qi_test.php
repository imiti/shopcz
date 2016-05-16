<?php
/**
 * Created by PhpStorm.
 * User: zhangmengqi
 * Date: 2016/5/9
 * Time: 10:21
 */
function test($a = 1){
    static $a = 3;
    ++$a;
    echo "$a" . "\n";
}
test(3);
test(5);