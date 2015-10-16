<?php
/*
 * php字符器可以通过三种方式初始化
 * --单引号，字符串仅需要转义 反斜杠 和 单引号。(直观，速度快)
 * --双引号，能够识别插入的 变量 和 转义序列
 * --"here document(heredoc)",就象是没有使用双引号的双引号字符串,且不要求双引号转义
 */

function trace($data)
{
	if(is_string($data))
	{
		echo $data."<br><br>";
	}
	else
	{
		var_dump($data);
		echo "<br><br>";
	}
}

trace('==========Here is the \'\'============');

trace('I have gone to the store');
trace('I\'ve gone to the store');
trace('Would you pay $1.75 for 8 ounces of tap water.');
trace('In double ,This is a break line.\n');

trace('==========Here is the ""============');
trace("I've gone to the store");
trace("The sauce cost \$10.25");
$cost = '$10.88';
trace("the line cost $cost");

trace('==========Here is the heredoc============');
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.<<<
"hello world"
EOD;
trace($str);

trace('=========php>=5.3.0 nowdoc==========');
$str = <<< 'EOD'
<<<
hahahaha
haha.
EOD;
trace($str);

trace('=========strpos()==========');
$email = 'qqlife@qq.com';
trace('strpos($email)\'s result:'.strpos($email,'@'));

trace('=========substr()==========');
//如果start+length超过字符串长度时，则输出start开始到字符串结束的内容
//如果start为负，则从字符串的结尾开始反向推算
trace('substr($strig,$start,$length)');

trace('=========substr_replace(string, replacement, start)==========');
trace(substr_replace('My pet is a blue dog','fish',12));

trace('=========strrev()==========');
trace(strrev('This is a iPhone.'));

trace('=========ucfirst()==========');
trace(ucfirst("how do you do?"));

trace('=========ucwords()==========');
trace(ucwords('my name is jack!'));

trace('=========strtolower()==========');
trace(strtolower('HELLO WORLD'));

trace('=========strtoupper(string)==========');
trace(strtoupper('hello world'));

trace('=========trim(str)==========');
trace('has blank:'.'  hello world   ');
trace('no blank:'.trim('  hello world   '));

trace('=========explode(delimiter, string)==========');
trace("explode(' ','My name is jack')");
$arr = explode(' ','My name is jack');
trace($arr);