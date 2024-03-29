<?php
echo "こんにちは。<br/>";

// 改行を混じりの長文とかが書けるようになる
echo <<< EOD
お元気ですか？<br/>
いいお天気ですね。<br/>
ではさようなら。<br/>
EOD;

$name = 'あや';
echo $name.'さん。こんにちは。<br/>';  // ドットで文字列の連結ができる

echo '2008年', '10月', '7日', '<br/>';  // echoはカンマ区切りで書ける
print '月曜日<br/>';  // printはカンマ区切りで書けないけど、戻り値として文字列を持っている

echo "私の名前は\"あや\"です<br/>";  // バックスラッシュ使ってあげる必要ある
echo '私の名前は\"あや\"です<br/>';  // ただの文字列になる（''と""で区別がつけられるから）
echo "私の名前は\'あや\'です<br/>";  // ↑と同じ

$colorname = 'red';
echo $colorname."<br/>";
echo "frame is ${colorname}color";  // 文中で区切りがわからないような時は{}をつける
