<?php



require "vendor/autoload.php";

$access_token = 'sxHCl4N3RgD3iFO1YU2MQJ9UrT0jnaSWEcc/vXLXbR8qBvBkjemWVoYxN0raiVEpBq5uAHA+boVnpEvEHVuJjlKvk1oJEpfXMe66Z8fiZPpDIOQSqB9TXVNK8yWZL9/DXKGzc6bHCN5JZtm07j/bCwdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '1f26f9201d33655f65da19926e613e25';
// ID ที่ต้องการส่งไปหา
$pushID = 'nite_diy';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







