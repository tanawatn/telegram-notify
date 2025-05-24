<?php
	
	//tokenที่ได้จากสร้าง bot
	$bot_token = "22283882734:FVDDasasDDFFzM0wpnXMjeAx48bg-zTtA223DDASD";
	//id กลุ่มที่เราสร้าง
	$chat_id = "-1001234567890";
	//ข้อความที่ต้องการส่ง
  	$text = "สวัสดี นี่ telegram-notify by TN";

    $url = "https://api.telegram.org/bot".$bot_token."/sendMessage";

        $data = [
            'chat_id' => $chat_id, // กลุ่ม sila
            'text' => $text,
            'parse_mode' => 'HTML'
        ];

        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        echo $result;

?>