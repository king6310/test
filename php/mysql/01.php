<?
 /*
 生活中的常识，记账
 账，就是数据/信息
 记账-->就是储存数据/信息

 生活中账一般记在哪儿呢？
 比如账本上，门上，墙上，日历上

 问上：10/12，老孙头借豆种 50斤

 无论记在那儿；记录的都是信息，变化的只是信息的载体。

 随着现代社会数据的急剧增多。我们用更高效的记录信息的方式。

 来一个班级学生档案
 姓名，年龄，家乡

	-----------------        -----------------     
	  姓名：张三			 	姓名：李四
	  年龄：22					年龄：24
	  家乡：怀柔				家乡：密云
	-----------------		 -----------------    

60个学生，就需要60个纸片，而且这60个纸片，上面字有重复的，姓名/年龄/家乡
信息有岑余，想个办法更让信息更有条理

————————————————————————————————————————————
	姓名			年龄			家乡
————————————————————————————————————————————
	张三			22				怀柔
————————————————————————————————————————————
	李四			24				密云
————————————————————————————————————————————

好处：再多一个学生的话，只需要添加一行数据，姓名/年龄/家乡不用重写了。

班级要考试，考试成绩，也要记录起来
————————————————————————————————————————————
	姓名			科目			成绩
————————————————————————————————————————————
	张三			语文			68
————————————————————————————————————————————
	李四			思想品德		23
————————————————————————————————————————————


现在这一个班级里，有档案表/成绩表/违纪表/就业登记表.......
这些表都是用来管理公益1期班的信息用的

因此，这些表，放在一个档案袋里-----档案袋是 数据库

公益1期有档案袋（库1），公益2期有档案袋（库2）----->交给王大婶子来管理
王大婶管理着 许多库，我们想要数据时，找王大婶


王大婶子 ---->数据库服务器



一台服务器下有多个库，一个库下有1到多张表，表有多行多列的数据

作为WEB开发程序员。和表的操作相对多

服务器是不是mysql呢？
答：对于数据库存储数据来说国际上有sql标准

如：列类型，sql语法等是有ISO标准的
很多软件开发商遵守sql标准，来开发一套软件，用来储存和管理数据
这套软件就可以称为数据库管理系统

就好比说，看网页可以用 firefox，IE，chrome，
管理数据呢，可以用mysql，Oracle，IBM OB2，splite，postgresql
这些软件都能够用来管理数据

数据库大体上要遵循sql标准，但未必100%遵循
答：不是的，各厂商的产品可能对sql标准的执行有微小差异。
比如mysql就没有全连接 full join，没有sql sever中的topN这种用法
就好像Html有w3c标准来约束，但各浏览器也有解析不兼容的地方，但是少数。

为什么要先用mysql来学习？

答：
1.mysql和linux，php，apache配合紧密，LAPMP架构
2.mysql开源免费

请同学们有时间也可以关注一下postgresql
答:postgresql也是一个开源数据库，而且sql标准执行方面比mysql要严格

Mysql-->卖给-->sun-->oracle,版权开源方面前途未卜

安装Mysql，装哪一个版本？
答：对于软件，尤其是开源软件，不要追求最新的版本
往往最新的版本，意味着bug多，新用户往往成了'小白鼠'

开源软件的版本，一般会有beta版，stable版
我们尽量选用稳定版。

目前比较稳定的2个版本，mysql5.1，mysql5.5

连接数据库

mysql -uroot -p111111 
'mysql'不是内部或外部命令，也不是可运行的程序或批处理文件。

如果报上面的错误。
原因 当你敲mysql的时候，其实是系统调用了mysql.exe这个可执行文件，这个文件在哪儿？
在你的安装目录的/bin下

但问题是：你敲mysql时，系统怎么认识去安装目录/bin 下载mysql.exe呢？

不一定知道，系统有环境变量的概念，在环境变量指定的几个目录及当前目录下寻找

所以可以把bin

目录加到环境变量里或者干脆进入到bin目录下去操作。

如果看到下面的图标
type 'help;' or '\h' for help.

mysql>

则说明连接服务器成功了

澄清一个概念
连接成功后，命令行黑窗口，和mysql服务器是什么关系？
答：客户端 client ---> 服务器 sever 的关系

就好像 你的浏览器与--->163网站的服务器的关系一样。

还有其他mysql客户端？
答：有navcat，mysqlfront，phpMyAdmin
 */

 

?>
