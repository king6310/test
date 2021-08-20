<?
 /*

 C:\Users\kennyking>D:
 D:\cd phpstudy_pro\Extensions\MySQL5.7.26\bin
 D:\phpstudy_pro\Extensions\MySQL5.7.26\bin>mysql -uroot -proot
 mysql> 

 乱码，告诉服务器，客户端使用的GBK编码
set names gbk;

mysql可以换行打，遇到";"时认为语句结束


 mysql> tee D:\0729.sql
 这句话是把我敲的sql及结果都输出到一个sql文件里
 便于来复习

接下来我们学习增删改查基本语法，得先有一张表，才行。


先创建一张班级薪水登记表
mysql> create table class( 
    -> id int primary key auto_increment,
    -> sname varchar(10) not null default '',
    -> salary decimal(6,2) not null default 0
    -> ) engine myisam charset utf8; 
    
 create table class(
	id int primary key auto_increment,
	sname varchar(10) not null default '',
	gender char(1) not null default '',
	company varchar(20) not null default '',
	salary decimal(6,2) not null default 0.00,
	fanbu smallint not null default 0
) engine myisam charset utf8;

往哪张表 添加行 class

添哪几列 (id,sname,gender,company,salary,fanbu) 

分别添加什么值(1,'张三','男','百度',8888.67,234)

insert into class
(id,sname,gender,company,salary,fanbu) 
values
(1,'张三','男','百度',8888.67,234);

insert into class
values
(6,'小慈','女','新浪',5678.99,125);
列值对应（包括自增长）

insert into class
(sname,company,salary)
values
('刘备','皇室成员',15.28),
('孙策','江东集团',56.34),
('曹操','宦官后裔',88.56);


update 改的要素

改哪张表： update
改哪几列： gender,company
改成什么值： '女','千度'
改哪一行? where expression

where 表达式为真，则该行就发挥作用（= > < and or...）
where 1中的1，恒为真，所以取了所有行。 

update class
set
gender='女',
company='千度'
where id=6;

删除要素
删哪张表的数据：class
删哪几行：where expression

删除，就是指删除整行，不存在删除一行中的某几列

把salary大于8800的用户删掉
delete from class where salary>8800;

查询3要素
查哪张表的数据? class
查那些列? sname,salary,company
查哪一行? where expression

select sname,salary,company from class where id=6;

* 代表所有列，表名后不加where条件，则选所有行
  因此取出所有行，所有列。

  select * from class;


  这是最基本的增删改查
  针对单个表来说。

  后面还要学什么?
  如何自己建表?
  如何修改表（增加减少列等）
  多表联查
  子查询
  触发器
  事务
  存储过程
  备份恢复
	
 */

?>
