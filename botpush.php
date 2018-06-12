<?php



require "vendor/autoload.php";

$access_token = 'DKkGO+u2LVxjVorzXqqp16UC8buq4lanhCSLgmakeOR6CJRKemoOYGu3r7Vv7izO2kUDC9YCFtaocBKpQyYdQhBSxrXoo2BhXLT77PSwXaA9Fp1mdO+4tpj+0YCL3l62dkP1RZZ4yz5vZpipmREYJwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8f1c3ee5096356805e6257e7d17c47b0';

$pushID = 'U2ef4f329786fee0e20f7638587d45f39';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







