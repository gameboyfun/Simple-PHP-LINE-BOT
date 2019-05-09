<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
//$text = $bot->getMessageText();
//$bot->reply($text);

$imageUrl = "https://ichef.bbci.co.uk/news/976/cpsprodpb/27C9/production/_103158101_tha.jpg";
$bot->pushImage($userId,$imageUrl);
