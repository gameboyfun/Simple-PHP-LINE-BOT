<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "6jtTR4BgR5uI86oUoxODYNUyTKM0UeziXIQI97uPhtk8tIJtisAk2lsP5Xs6F7rToTr3XyfTRdmTicsShZu8sxRhWQ6Cin/TXX/2J8H429AB/wDw0XcSlIrOK5CuC1c7TDUxW5uiUERSbig1ebUaswdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "6c8f950137a781d397c41e9cdefff164";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
