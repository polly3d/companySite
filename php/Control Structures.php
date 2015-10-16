<?php
/*
 * 流程控制
 * 案例：展示一个31天的日历，7天一行，每行格子不同色，每隔两天，格子数字变红
 */

header("content-type:text/html; charset=utf-8");

$day = 31;
$line = 0;
echo "<h3>某个月的日历</h3>";

echo "<table width=700px border=1px>";
for ($i=1; $i < 31; $i++) 
{
	if($i == 1)
	{
		echo "<tr>";
		$line++;
	}
	if($i % 3 == 0)
	{
		echo "<td bgColor=red>".$i."</td>"; 
	}
	else
	{
		echo "<td>".$i."</td>"; 
	}
	
	if($i % 7 == 0)
	{
		if($line % 2 ==0)
		{
			echo "<tr>";
		}
		else
		{
			echo "<tr bgColor=#cccccc>";
		}
		$line++;
	}
}

echo "</table>";