<?php

$data = array(
        "GroupPrivateToken" => "bb8a47ab-42e0-4b7f-ba08-72d55f2d9e41",
        "Items" => array(array(
            "CatalogNumber" => "29",
            "Quantity" => 1,
            "UnitPrice" => 7.6,
            "Description" => "Item1"
        ),
        array(
            "CatalogNumber" => "5678",
            "Quantity" => 2,
            "UnitPrice" => 3.0,
            "Description" => "Item2"
        )),
  "Custom1" => "123",
  "Custom2" => "456",
  "RedirectURL" => "http://yoursite.co.il/ThankYouPage",
  "EmailAddress" => "info@sample.com",
  "CustomerLastName" => "Doe",
  "CustomerFirstName" => "John"
    );

$url = "https://testicredit.rivhit.co.il/API/PaymentPageRequest.svc/GetUrl";
$post = json_encode($data); 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
//curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);// prevent ssl error on localhost
//curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);// prevent ssl error on localhost
$result = curl_exec($ch);
curl_close($ch);

$url_to_view = json_decode($result)->URL;
$output = '<iframe src="'.$url_to_view.'" width="100%" height="1800px" frameborder="0"></iframe>';

echo $output;

?>
