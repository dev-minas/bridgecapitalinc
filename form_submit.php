<?php

// echo "<pre>"; print_r($_POST); exit();

require_once('PHPMailer/src/PHPMailer.php');

$email = new PHPMailer();
$email->From      = 'form@bridgecapitalinc.com';
$email->FromName  = 'bridgecapitalinc';
$email->Subject   = $_POST["Subject"];
// $email->AddAddress( 'info@bridgecapitalinc.com' );
$email->AddAddress( 'armen.musaelyan@gmail.com' );
$email->AddAddress( 'arsendes@gmail.com' );

$bodytext = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body>';
foreach ($_POST as $k => $v) if ($v) {
    $bodytext .= "<b>" . ucwords(str_replace("_", " ", $k)) . "</b>: "
        . (is_array($v) ? implode("", $v) : $v)
        . "<br /><br /> \r\n";
}
$bodytext .= '</body></html>';

$email->Body = $bodytext;

if (isset($_FILES['Attachment']['name'])) {

    $tmp_path = $_FILES["uploaded_file"]["tmp_name"];
    $file_name = $_FILES['uploaded_file']['name']);

    $type_of_uploaded_file = substr($file_name, strrpos($file_name, '.') + 1);

    $email->AddAttachment( $tmp_path , $file_name );
}


$result = $email->Send();

if ($result)
    echo "success";
else
    echo "fail";