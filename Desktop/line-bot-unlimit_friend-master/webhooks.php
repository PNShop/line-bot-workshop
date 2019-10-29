<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'sxHCl4N3RgD3iFO1YU2MQJ9UrT0jnaSWEcc/vXLXbR8qBvBkjemWVoYxN0raiVEpBq5uAHA+boVnpEvEHVuJjlKvk1oJEpfXMe66Z8fiZPpDIOQSqB9TXVNK8yWZL9/DXKGzc6bHCN5JZtm07j/bCwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
$text2 = '';
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text']."\n".$event['source']['userId']."\n";
			// Get replyToken
			$text2 = $text;
		}
	}
}
require "vendor/autoload.php";
$channelSecret = '1f26f9201d33655f65da19926e613e25';
$pushID = 'U0bfcb10cf49ccbb73074507742bfdfe2';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";
