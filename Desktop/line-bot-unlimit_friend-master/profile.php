<?php


$access_token = 'sxHCl4N3RgD3iFO1YU2MQJ9UrT0jnaSWEcc/vXLXbR8qBvBkjemWVoYxN0raiVEpBq5uAHA+boVnpEvEHVuJjlKvk1oJEpfXMe66Z8fiZPpDIOQSqB9TXVNK8yWZL9/DXKGzc6bHCN5JZtm07j/bCwdB04t89/1O/w1cDnyilFU=';

$userId = 'U0bfcb10cf49ccbb73074507742bfdfe2';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

