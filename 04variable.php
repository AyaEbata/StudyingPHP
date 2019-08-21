<?php
echo $name."さん<br/>";  // NULLが格納されていることになる

$var = '高橋';
print '[値]'.$var.',';
print '[型]'.gettype($var).'<br/>';

$var = 180;
print '[値]'.$var.',';
print '[型]'.gettype($var);

// エイリアス
$num1 = 320;
$num2 =& $num1;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

$num1 = 18;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';


$str = '山田';
$str .= 'さん';