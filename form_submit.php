<?php

echo "<pre>"; print_r($_POST); exit();

$to = "armen.musaelyan@gmail.com";
$from = "form@bridgecapitalinc.com";
$domain = "bridgecapitalinc.com";
$subject = "Refinance contact form submit.";

$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>';
foreach ($_POST as $k => $v) {

    $message .= "<b>" . ucwords(str_replace("_", " ", $k)) . "</b>: " . (is_array($v) ? implode("", $v) : $v) . "<br /><br /> \r\n";
}
$message .= '</body>
</html>';

$headers = "";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "Return-Path: <" . $from . ">\r\n";
$headers .= "Message-ID: <" . time() . rand(1, 1000) . "@" . $domain . ">\r\n";

if (@mail($to, $subject, $message, $headers))
    echo "sussecc";
else
    echo "fail";