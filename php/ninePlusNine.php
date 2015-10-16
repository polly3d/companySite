<?php
/**
 * 九九乘法表
 * @author:wang
 * @date: 2015-10-16
 * 以下的程序将向浏览器输出一张九九乘法表
 */


showTab();


function showTab()
{
    for ($i=1; $i <= 9; $i++) 
    { 
        for ($j=1; $j <= $i; $j++) 
        { 
            echo $j . '*' . $i . '=' . $i * $j . '   ';
        }
        echo '<br>';
    }
}