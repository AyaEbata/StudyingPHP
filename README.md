# PHPのお勉強（初めまして的なメモだよ、忘れちゃったしねぇ）
## インストール（自分の場合のメモ。Macだよ）
### 本体のPHPのバージョンをあげる場合
Homebrewで入れます。

1. とりあえずなんのバージョンあるのか`brew search php`で検索
2. その中から今出てる中で新し目なやつを`brew install php@7.2`みたいな感じに打ってインストール
3. だがしかし怒られたので、書いてある通り`xcode-select --install`でCommand Line Developer Toolsをインストール
4. 再度、`brew install php@7.2`を実行
5. シンボリックリンクの作成をするために`brew link php@7.2`を実行
6. そしたらこれ実行しろ的なのを言われるから実行（`echo`から始まってるやつ2つ）
7. `source ~/.bash_profile`で更新してあげる

### MAMPを使う場合
（こっちだけでよかったじゃないか…）

1. https://www.mamp.info/en/downloads/ ここからダウンロード
2. htdocsにサーバを使って動かしたいソースを置く
3. `Start Servers`を押す
4. `localhost:8888/ファイル名`でブラウザでアクセス
5. そしたら見れる
6. 最後に`Stop Servers`を押す

## コードを書いてみる
### 書き方
```PHP
<?php
print 'Hello Word';
?>

```

- みたいな感じに書いて`.php`を後ろにつけたファイル名で保存する。
- ファイルの最後に改行を入れる
- 最後の`?>`はなくてもいい（ない方がいい？？？！！！）

### echoとprintの違い
https://qiita.com/yuka_pon/items/753f17f822d69b437efb

### //と#の違い
よくわかんないけど、#はあんまり推奨しないよーって書いてある記事が少しあるような。  
（誰か教えてくださいー）

### ヒアドキュメント
```PHP
echo <<<EOD
ヒアドキュメント<br/>
だよ！！！！ 
EOD;
```

詳細はこちらー https://www.flatflag.nir87.com/eod-729

## 参考
- [macにPHPとapacheをbrewから入れてみた（PHPの部分のみ参考にした）](https://qiita.com/kobiyama/items/4e48604f1120cfe47f36)
- [PHP入門](https://www.javadrive.jp/php/)
- [【PSR】PHPの標準コーディング規約](https://qiita.com/katsukii/items/e68183f14407722de9cc)
