<?php
/**
 * 学习mysql数据库的连接，以及简单的读取数据
 */

$host = 'localhost:3306';
$user = 'root';
$pswd = '123456';
$dbname = 'test';

//连接数据库
$connect = @mysql_connect($host,$user,$pswd);
//选择数据库
@mysql_select_db($dbname);

//sql语句
$sql = 'SELECT * FROM `test_users`';

//执行查询
$query = @mysql_query($sql);

if($query != false)
{
    $arr = [];
    //将执行结果转换成数组
    while($res = @mysql_fetch_assoc($query))
    {
        $arr[] = $res;
    }
}

var_dump($arr);
