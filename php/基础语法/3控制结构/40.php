<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/6/1
 * Time: 22:41
 */

/*
 * 一只公鸡 5元
 * 一只母鸡 3元
 * 三只小鸡 1元
 *
 * 拿了100元，买回来100只鸡
 *
 * 问：公鸡，母鸡，小鸡各多少只？
 */

/*
 * 思路：
 * 公鸡 1-100只
 * 母鸡 1-100只
 * 小鸡 1-100只
 *
 * 暴力组合
 */

for($g = 1; $g <= 100; $g++){
    for($m = 1; $m <= 100; $m++){
        for($x = 1; $x <= 100; $x++){
            if(($g + $m +$x) == 100 && (5 * $g + 3 * $m + $x/3) == 100){
                echo '公鸡'.$g. '  母鸡'.$m.' 小鸡'.$x.'<br />';
            }
        }
    }
}

//上面这个for循环，虽然算出来了结果，但效率很低
//因为，如果运气非常差
//要运行 100*100*100次，100w次

//优化一下
//因为公鸡+母鸡+小鸡 共100只，因此 $x= 100 - $g - $m

for($g = 1; $g <= 100; $g++){
    for($m = 1; $m <= 100; $m++){
        $x = 100 - $g -$m;
        if(($g + $m +$x) == 100 && (5 * $g + 3 * $m + $x/3) == 100){
            echo '公鸡'.$g. '  母鸡'.$m.' 小鸡'.$x.'<br />';
        }
    }
}

//这一次，优化掉一层for循环，运气最差，执行 100*100次


//继续优化，因为公鸡每只5元，共100元，因此，公鸡不可能超过20只
//母鸡每只3元，共100元，因此，母鸡不可能超过33只
for($g = 1; $g <= 20; $g++){
    for($m = 1; $m <= 33; $m++){
        $x = 100 - $g -$m;
        if(($g + $m +$x) == 100 && (5 * $g + 3 * $m + $x/3) == 100){
            echo '公鸡'.$g. '  母鸡'.$m.' 小鸡'.$x.'<br />';
        }
    }
}

//此时，利用边界条件，优化了效率，最多运行 20*33次