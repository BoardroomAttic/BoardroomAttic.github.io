<?php
function postToDiscord($message)
{
    $data = array("content" => $message, "username" => "Webhooks");
    $curl = curl_init("https://discordapp.com/api/webhooks/553599357090267137/13BNbLpPsaMgtL1vwt1zWzMr8z5IsiBI1FLo08NUi1t8gQeXeXmmmfpHAv1ywdPQYYSd");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}

?>
