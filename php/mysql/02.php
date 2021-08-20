<?
 /*
 入门最基本语句
 mysql -u username -p pssword 来连接
 
 当连上服务器后,我们首先面对的是？
 答:是库,库有1个或多个,因此我们要想对表/行做操作的话.
 得先选库
 
 选库语句
 Use 库名;
 
 如果不知道有哪些库,想查看一下所有的库,怎么办？
 show databases;
 
 创建一个数据库：create database 数据库名 [charset 字符集];
 
 删除一个数据库
 drop database 数据库名;
 
 把数据库改名？
 mysql中，表/列可以改名，database不能改名
 phpMyAadmin 似乎有这功能？他是建新库，把所有表复制到新库，再删旧库完成的
 
 当选了库之后，我们面对的是表
 查看库下面的所有表：show tables;
 
 先给大家提供一个简单的建表语句，供练习用
 create table stu(
	snum int,
	sname varchar(10)
 ) engine myisam charset utf8;
 
 engine 是指表引擎和性能特点相关
 
 删除表:drop table 表名;
 
 修改表名: rename table 表名 to 新表名;
 
 
 增加表数据: insert into 表名 values
 (1,'zhangsan'),
 (2,'lisi');
 
 修改表数据: update 表名 set 列名,列名 where 行号;
 
 删除表数据: delete from 表名 where 行号;
 
 查看表数据: select 列名 from 表名 where 行号;
 
 清空表数据: truncate 表名;

 Truncate和delete是有区别的。
 在于truncate相当于删表再重建一张同样结构的表，操作后得到一张全新表。
 而delete是从删除数据行的层面来操作的。
 Truncate相当于把旧的学籍表扔了重画一张。
 delete相当于用橡皮把学籍表的数据给擦掉。
 */

?>
