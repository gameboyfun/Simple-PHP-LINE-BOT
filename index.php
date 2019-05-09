<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
//$text = $bot->getMessageText();
//$bot->reply($text);

$imageUrl = "https://sites.google.com/site/khxmuleleasarsnthes/_/rsrc/1480953778509/watthuprasngkh/googlelogo_color_284x96dp.png";
$bot->pushImage($userId, $imageUrl);
