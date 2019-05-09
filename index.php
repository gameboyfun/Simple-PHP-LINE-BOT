<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($text);

$bot = new Linebot();
$Id = $bot->getUserId();
$bot->reply($Id);

// $eiei = $bot->pushText($userId, 'Hello Simple Text!');
// $bot->reply($eiei);
