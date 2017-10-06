<?php

// echo "<pre>"; print_r($_POST); exit();

require_once('PHPMailer/src/PHPMailer.php');

$email = new PHPMailer();
$email->isHTML(true);
$email->From      = 'form@bridgecapitalinc.com';
$email->FromName  = 'bridgecapitalinc';
$email->Subject   = $_POST["Subject"];
// $email->AddAddress( 'info@bridgecapitalinc.com' );
$email->AddAddress( 'armen.musaelyan@gmail.com' );
$email->AddAddress( 'arsendes@gmail.com' );

$bodytext = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body>';
foreach ($_POST as $k => $v) if ($v) {

    if ($k == 'My First Name') $bodytext .= "<b>Personal Information</b><hr>";
    if ($k == 'Street') $bodytext .= "<b>Property Information</b><hr>";
    if ($k == 'Years at Current Address') $bodytext .= "<b>Address Information</b><hr>";
    if ($k == 'Employment Type') $bodytext .= "<b>Employers Information</b><hr>";
    if ($k == 'Other Income Belongs To') $bodytext .= "<b>Other Income Information</b><hr>";
    if ($k == 'What is your race') $bodytext .= "<b>Questions the Government Requires Us to Ask</b><hr>";
    if ($k == 'Are there any outstanding judgments against you') $bodytext .= "<b>Declarations</b><hr>";

    $bodytext .= "<b>" . ucwords(str_replace("_", " ", $k)) . "</b>: "
        . (is_array($v) ? implode("", $v) : $v)
        . "<br /><br /> \r\n";
}
$bodytext .= '</body></html>';

$email->Body = $bodytext;

if (isset($_FILES['Attachment']['name'])) {

    // check extension
    $allowed =  array('txt','doc','pdf','jpg','png');

    $tmp_path = $_FILES["Attachment"]["tmp_name"];
    $file_name = $_FILES['Attachment']['name'];

    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    if(in_array($ext,$allowed) ) {

        $email->AddAttachment( $tmp_path , $file_name );
    }
}

$result = $email->Send();

if ($result)
    echo "success";
else
    echo "fail";