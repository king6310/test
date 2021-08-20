<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/10
 * Time: 15:06
 */
class mini{
    public $template_dir = ''; //模板文件所在的位置
    public $compile_dir = ''; //模板编译后所在的位置

    //定义一个数组，用来接收外部的变量
    public $_tpl_var = array();

    public function assign($key,$value){
        $this -> _tpl_var[$key] = $value;
    }

    /*
     * String $template 模板名
     * 作用：调用compile来编译模板，并自动引入
     */
    public function dispaly($template){
        $comp = $this -> compile($template);
        include ($comp);
    }
    public function compile($template){
        //读出模板内容
        $temp = $this -> template_dir . '/' . $template;
        $source = file_get_contents($temp);
        //echo $source;

        //替换模板内容
        $source = str_replace('{$','<? echo $this -> _tpl_var[\'',$source);
        $source = str_replace('}','\'];?>',$source);
        //echo $source;

        //再把编译后的文件保存成 .php文件
        $comp = $this -> compile_dir . '/' . $template . '.php';

        //判断模板是否已存在
        if(file_exists($comp) && filemtime($temp) < filemtime($comp)){
            return $comp;
        }

        file_put_contents($comp,$source);
        return $comp;
    }
}