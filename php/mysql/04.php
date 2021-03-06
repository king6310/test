<?
 /*

 目的：要学会建表
 知识点：列类型
 
怎么建表？
以在A4纸上建表为例。
————————————————————————————————————————————————————————————————
	学号		姓名		家乡		入学年份		自我介绍
————————————————————————————————————————————————————————————————
	001         张三        衡水        2012            
————————————————————————————————————————————————————————————————

分析：我们只要把第一行，表头建好了，这张表也就完成了。
至于下面的001，张三，这不是表的概念，而是表中存储的数据。

其实建表过程，就是一个画表头的过程。
从术语上讲，这张表有5个列。
建表的过程就是一个 声明字段 过程

那么建表和列类型又有什么关系呢？

分析：再看上面的表，A4纸是数据的存储空间，而A4的大小是有限的
请问：你准备给学号留多宽？给姓名留多宽？自我介绍又留多宽？

自然的，姓名如果留的过宽，比如20个字都能存，但是一般人的姓名，就三四字...浪费了
如果留的过窄，导致存不下，更有问题。

对应的，A4纸空间有限，键盘空间也有限。
我们建列时，自然想的是----能够容纳放置的内容，但是又不浪费

存储同样的数据，不同的列类型，所占据的空间和效率是不一样的---这就是我们建表前要学列类型的意义

所以---重点学列类型的存储范围与占据的字节关系

 */

?>
