<?php
$access_token = 'x3q+7gvFIY8V4sPrCRNhzd/b7COhbKQBpSGMNj7ho+hYn6nL8YIu5bjp7qdUxHH2UfzTiHv1ckKEEE6tKr+z94aJBs53J1dAWmvGhoxMToj2KfjIbSOxOz7Cm55Gt8TAzHu5fLRsEcaoq5XmkRbzugdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
