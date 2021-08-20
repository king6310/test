<?
 /*

 MYSQL 三大列类型

 数值型
	整型
		Tinyint
			占据空间1字节，存储范围，-128-->127,0-255
		Smallint
		Mediuint
		Int
		bigint

		
			1个字节 8个位 	0-2^8-1 0-255
						   -2^7 --> +2^7-1


			分析：
			2个字节 16位 	0-2^16-1 0-65535
							-2^15 --> +2^15-1, -32768->32767

			一般而言，设某类型 N字节
			N字节，8N位
			0---->2^8N-1
			-2^(8N-1) ---> + 2^(8N-1)-1

			对于int型；占的字节越多，存储的范围也越大



			-----------------------------------------------------
			[][][][][][][][][]

			0000 0000 ---> 0
			1111 1111 ---> 2^8-1 = 255

			新手知道，计算机为了表示一个负数，会把最高位（左侧）的0/1，当成符合来看
			如为0，则是正数，如为1，则是负数

			0 0000000
			0 1111111 -->0->127

			1 0000000 --> -0
			1 1111111 --> -127

			-127 + 127

			二进制补码的问题
			
			如上理解的话，+0,-0,则重复了，浪费了一种存储的可能性。

			因此计算机中的负数，不是照着 “后面的绝对值直接乘-1得到的”
			而是用补码规则换算的。

			负数 =  绝对值位 -128

			1111 1111 --> -1
			1000 0000 --> -128

			因此最终结果：-128 --> = 127

			声明 tinyint 怎么样让他0-255，有怎么样让他-128 127


			int系列的声明时的参数
			(M) unsigned zerofill

			练习tinyint的参数并验证字节与范围的关系

			经过上面的测试，age的范围是-128 到 127
			即*int，不加特殊说明，默认是有符号

			加unsigned表示无符号，可以影响存储的范围

			加一个学分列
			alter table calss add score tinyint unsigned not null default 0;

			-1 不能插入了，因为有符合范围0-255

			加列类型加unsigned表示无符号类型

			分析M参数

			zerofill zero是零,fill是填充,代表0填充
			M必须和zerofill配合才有意义。

			1.学号不能为负
			2.学号一般位数相同，即使不同，00013，01238
			即不够位数，用0填充
			alter table calss add snum smallint(5) zerofill not null default 0;

			snum 统一补0，而且补到5位。为什么补到5位，因为M为5

			总结 M表示补0宽度，和zerofill配合使用才有意义。

			观察snum的类型，可知zerofill则同时必须是unsigned类型。

	小数（浮点型/定点型）
		Float(M,D),decimal(M,D)

		浮点数在计算机里表示是比较复杂。
		IEEE

		234.87
		23.487

		小数点左边 能大到多少？
		小数点右边 又能大到多少？

		M叫"精度" --->代表“总位数”，而D是“标度”，代表小数位（小数点右边的位数）
		
		float(6,2)  -9999.99 --> 9999.99

		alter table salary add bonus float(5,2) nusigned not null default 0.00;

		浮点数占多大的空间呢？
		答： float 能存 10^38, 10^-38

		如果 M<=24,占4个字节，否则占8字节
		单精度4个字节 ，双精度8个字节

		用来表示数据中的小数，除了float-->浮点
		还有一种叫定点，定点是把整数部分，和小数部分，分开存储的。
		比 float 精确

		insert into account values (1,1234567.23,1234567.23);
		id			acc1			acc2
		1		1234567.25		1234567.23

		通过上例可以看出float有时会损失精度。
		如果像账户这样的敏感字段，建议用decimal
	
字符串型
	Char(M)
	Varchar(M)
	Text 文本类型
	blob

	char和varchar分别称为定长和变长类型

	姓名char(6)
	1 张三
	2 李莲英
	3 阿拉姆汗

	思考：在硬盘上寻找第3行的姓名，并读出来
		磁头移动，去读。
		磁头移动多少？

	查找行记录时，如果都是定长
	完全可以通过行数与行的长度计算出来。
	文件指针的偏移量
		定长*行数-1

	对于定长N
	不论够不够指定长度，实际都占据N个长度

	如果不够N个长度，用空格在尾部补够N个长度，浪费了尾部。

	varchar(100),则能储存0-100个字符

	姓名varchar(20)
	1 张三
	2 李莲英
	3 阿拉姆汗

	第1行张三开始处，请把张三取出来。
	疑问：往后取几个字符呢???


	而对于varchar(N)，不用空格补齐，单列内容前，有1-2个字节来标志该列的内容长度。


	类型		宽度	可存字	实际字符(i<=M)	实占空间			利用率
	char		M		M		i				M				i/M <= 100%
	varchar		M		M		i			i字符+(1-2)字节		 i/(i+1-2) < 100%
	
	insert into test values('aa ', 'aa ');
	
	concat 连接字符串用的
	select concat(ca,'!'),concat(vca,'!') from test;
	aa! aa !

	00\0\0\0\0\0(char型，如果不够M个字符，内部用空格补齐，取出时再把右侧空格删掉)
	注：这意味着，如果右侧本身有空格，将会丢失

	速度上：定长速度快些
	注意：char(M),varchar(M)限制的时字符串，而不是字节
	即 char(2) charset utf8,能存2个utf8字符，比如‘中国’

	Text：文本类型，可以存比较大的文本字段，搜索速度稍慢
	因此，如果不是特别大的内容，建议用char，varchar来代替
	声明text列时，不必给默认值。

	Blob是二进制类型，用来存储图像，音频等二进制信息。
	意义：二进制，0-255都用可能出现。
	Blob在于防止因为字符集的问题，导致信息丢失
	比如：一张图片中有0XFF字节，这个在ascii字符集认为非法，在入库的时候，被过滤了

日期/时间类型
	Date 日期
	Time 时间
	Datetime 日期时间类型
	Year 年类型

	date型 YYYY-MM-DD
	insert into test3 values('张国荣','1956-09-12');
	报错
	这个错误，什么引起的？
	这是因为客户端没有声明字符集。
	set names gbk;

	能存储到哪年？
	1000-01-01 到 9999-12-31

	Time类型 HH:MM:SS

	存储范围
	-838:59:59 到 838:59:59

	alter table test3 add sign time not null default '00:00:00';

	Datetime类型 YYYY-MM-DD HH:MM:SS
	
	存储范围
	1000-01-01 00:00:00 到 9999-12-31 23:59:59

	一个比较有意思的列 timestamp

	create table test5 (ts timestamp default CURRENT_TIMESTAMP,id int)engine myisan charset utf8; 

	insert into test5 (id) values (4);

	CURRENT_TIMESTAMP 随时取出当前的时间

	Year类型 YYYY/YY

	1901---2155，错误0000

	inser into test6 values('肥水之战','383');

	超出范围了，year类型只占1字节。最多能存256种变化。

	inser into test6 values('辛亥革命','1911');

 */

?>
