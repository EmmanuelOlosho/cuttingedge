<?php 	
include'db.php';
$receiver_email = "adebiyiomichael24@gmail.com";
$receiver_name = "Cutting edge institute";
$message = "It will be well with you";
$subject = "CUTTING EDGE INSTITUTE";

$headers = array(
    'Authorization: Bearer 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',
    'Content-Type: application/json'
);

$data = array(
    "personalizations" => array(
        array(
            "to" => array(
                array(
                    "email" =>$receiver_email,
                    "name" => $receiver_name
                )
            )
        )
    ),
    "from" => array(
        "email" => "17-30gp054@students.unilorin.edu.ng"
    ),
    "subject" => $subject,
    "content" => array(
        array(
            "type" => "text/html",
            "value" => $message
        )
    )
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

?>