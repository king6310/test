<?php
/**
    ===笔记部分===
 * 用对象继续来统一完成smarty配置
 * 注：MySmarty里，不能通过直接重写template_dir 和 compile_dir属性来实现配置
 * 因为这2个属性在父类里是私有的，无法重写,(即被父类封装了)
 * 但可以利用开放的接口，setTemplateDir()和setCompileDir()来实现
 */

class MySmarty extends Smarty{
    public function __construct()
    {
        parent::__construct();
        $this -> setTemplateDir('temp');
        $this -> setCompileDir('comp');
    }
}