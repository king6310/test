<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/30
 * Time: 14:01
 */
/*
 * 之前学习了‘量’ -- 变量 常量
 * 量与量之间，可以运算，运算符
 *
 * 如果只有量与量的运算，那么我们学的知识只够做一个计算器
 * 想写程序：还得有控制结构
 *
 * 控制结构，就是条件与逻辑，控制代码的执行顺序
 *
 * 比如：
 * 商城的服务员培训的时候，学会两句话
 * “先生，您好”
 * “女士，您好”
 *
 * 来人的时候，是不是该服务员就把学会的两句话说一遍呢？
 * 答：不是，而是根据对方的性别，进行问候
 *
 * 假设我们不会编程，但你是经理，你在培训服务员的时候，该怎么简单明了的告诉服务员？
 * 经理会大致这么来培训：
 * 判断出顾客的性别
 * 如果顾客的性别是男，你就说：“先生您好”
 * 否则如果顾客的性别是女，你就说：“女士您好”
 * 否则最后，你就说，‘春哥，你好’
 *
 * 通过这个例子，来告诉大家，
 * 编程不难，编程就是说话，（请大家记住我这句话）
 *
 * 你能把一件事描述清楚，你就能写程序
 * 如果你感觉没思路，那是因为你连事情怎么发展都没想清楚
 */

/*
 * 经理 是用中文 -- 培训 --> 服务员
 * 程序员 是用PHP -- 培训 --> 计算机
 *
 * 把事想清楚之后，编程就是一个翻译而已
 *
 * 如果 --> if
 * 否则如果 --> else if
 * 否则 else
 */

$gender = $_GET['gender'];
if($gender == '男'){
    echo '先生 您好';
}else if($gender == '女'){
    echo "女士 您好";
}else{
    echo "春哥 您好";
}

/*
 *  如上3句话，只能根据情况，合理的显示其中一段
 *  我们已经用上“流程控制”
 *  即我们学的“控制结构”
 */