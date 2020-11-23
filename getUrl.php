<?php

$url  = "https://testicredit.rivhit.co.il/API/PaymentPageRequest.svc/GetUrl";
$post = json_encode($_POST);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type:application/json'
));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$result = curl_exec($ch);
curl_close($ch);

$url_to_view = json_decode($result)->URL;
echo $url_to_view;

?>

