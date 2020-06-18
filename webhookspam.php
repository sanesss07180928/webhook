<?php
// 送信データ

if (isset($_GET["msg"])){
$url = $_GET["msg"];
}
else
{
echo "メッセージを指定してください。<br><a href='webhookspamtool.php'>設定ツール</a>";
exit;
}

if (isset($_GET["webhookurl"])){
$url = $_GET["webhookurl"];
}
else
{
echo "webhookを指定してください。<br><a href='webhookspamtool.php'>設定ツール</a>";
exit;
}
if (isset($_GET["avatar"])){
$avatar = $_GET["avatar"];
}
else
{
$avatar = "https://google.com/favicon.ico";
}
if (isset($_GET["name"])){
$name = $_GET["name"];
}
else
{
$name = "指定なし";
}
if (isset($_GET["count"])){
$count = $_GET["count"];
}
else
{
echo "回数が指定されていません。<br><a href='webhookspamtool.php'>設定ツール</a>";
exit;
}

$data = array(
    "username" => $name,
    "content" => $_GET["msg"],
    "avatar_url" => $avatar,
);
// ストリームコンテキストのオプションを作成
$options = array(
        // HTTPコンテキストオプションをセット
        'http' => array(
            'method'=> 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($data),
            'protocol_version' => '1.1',
            'ignore_errors' => true,
        )
);

while ($i <= $count) {
$contents = file_get_contents($url, false, stream_context_create($options));
$i++;
sleep (0.5);
echo $contents;
}