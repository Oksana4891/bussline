<?php

/* https://api.telegram.org/bot2005698213:AAFZYuAI9MAr18MfQku5Htdtxm91g8NliS4/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$phone = $_POST['user_tel'];
$message = "с сайта bussline.com.ua  просят передзвонити по номеру" . $phone; 

$token = "2005698213:AAFZYuAI9MAr18MfQku5Htdtxm91g8NliS4";
$chat_id = "-584188112";
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}","r");

?>