# webhookspamtool

Webhookでスパムしてくれる何か。悪用厳禁。

# 設置のやり方
1.まずWebサーバー(PHPが使えるもの)を作るか、または契約する
(xreaやstarfreeなどの無料鯖でも可。WixやJindoなどの、無料でサイトを作るようなアレは不可。)
2.上のwebhookspam.phpとwebhookspamtool.phpをサーバーに置く。
(cgi-binでもおｋ。PHPが動くディレクトリに置くこと。)
3.webhookspamtool.phpにアクセスする。やり方は
http://(※サーバーのアドレス)/webhookspamtool.php
※ここはwebhookspamtool.phpとwebhookspam.phpを置いたディレクトリにすること。
例えばcgi-binに置いたのならば、
http://(サーバーのアドレス)/cgi-bin/webhookspamtool.php
/var/www/html/test/に置いたのならば、
http://(※サーバーのアドレス)/test/webhookspamtool.php
となる。

#使い方
URLのところにはWebhookのURLを貼り付ける。
回数はご自由に。10000とか999でもおｋ。
ただ増やしすぎはサーバーが過負荷になることもあるので調整しましょう。
nameと画像URLは入れなくてもおk。Webhookの名前とアイコンになります。
メッセージには発信したいメッセージを入れる。
everyoneでスパムしたいのなら@everyone spamと入れる。
あとは送信を押せば回数分spamしてくれます。

悪用厳禁。自己責任でお願いします。
あと著作権はないと思われる？
