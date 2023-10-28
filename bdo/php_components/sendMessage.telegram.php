<?php 
if($telegram['mode'] == true){
	function Tele($text) {
		global $telegram;
		$query_string = array(
			'chat_id'    => trim($telegram['chat_id']), 
			'text'       => $text,
			'parse_mode' => 'html',
		);
		$ch = curl_init('https://api.telegram.org/bot'.trim($telegram['token']).'/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, (http_build_query($query_string)));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
Tele($text.'');
}
?>