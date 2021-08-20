<?php
/**
    ===笔记部分===
 * 昨天回顾：
 * smarty的引用流程
 * smarty的定界符与css的{}冲突的解决
 * smarty的数组的赋值与引用
 * assign的深入探讨
 *
 * 我们继续来探讨：
 * 1.smarty能赋数组，能否赋对象呢？
 * 2.在昨天的学习中，我们总是要反复配置smarty模板的template_dir等选项，能否简化？
 * 3.模板里用标签引用一个变量，还能否进行运行和修改？
 * 4.php中能分支，循环输出，模板中能不能？
 */

require('smarty3/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty -> template_dir = 'temp';
$smarty -> compile_dir = 'comp';

//对象的引用是$标签->属性名
//还可以调用对象的方法，如何调用？
//$标签->method();
//使用模板主要是为了分离php与html代码，让代码简洁，
//模板中的标签应该尽量只负责变量的输出，显示数据，不要负责太多的逻辑判断，函数调用等，不推荐模板里调用函数和方法
class human{
    public $name = '张三';
    public $age = '26';
    public  function say(){
        return '你爸是李刚吗？';
    }
}
$man = new human();

$smarty -> assign('man',$man);

$smarty -> display('05.html');
