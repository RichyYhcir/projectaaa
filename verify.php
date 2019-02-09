<?php
$access_token = 'FwEeFYUcgzzYFbrPeel7H/rJfzfgCEdjHD9U7UTQ4koa5K5MFE/IMNBxuGgcme+bpjVBPgMxLGRpZbINWuJinRJ3gH66as5n96KixvL2/BFSXFCKlnDgggWZpjQ2YsLfKHLusYlo6uhgRTnjCYi02gdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
