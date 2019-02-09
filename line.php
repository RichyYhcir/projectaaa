<?php

function send_LINE($msg){
 $access_token = 'FwEeFYUcgzzYFbrPeel7H/rJfzfgCEdjHD9U7UTQ4koa5K5MFE/IMNBxuGgcme+bpjVBPgMxLGRpZbINWuJinRJ3gH66as5n96KixvL2/BFSXFCKlnDgggWZpjQ2YsLfKHLusYlo6uhgRTnjCYi02gdB04t89/1O/w1cDnyilFU='; 
 $messages = [
        'type' => 'text',
        'text' => $msg
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U08ca677b3db4281d24b7c88c6c339a89',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
