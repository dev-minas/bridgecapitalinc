<?php

// echo "<pre>"; print_r($_POST); exit();

require_once('PHPMailer/src/PHPMailer.php');

$email = new PHPMailer();
$email->isHTML(true);
$email->From      = 'form@bridgecapitalinc.com';
$email->FromName  = 'bridgecapitalinc';
$email->Subject   = $_POST["Subj"];
// $email->AddAddress( 'info@bridgecapitalinc.com' );
$email->AddAddress( 'armen.musaelyan@gmail.com' );
$email->AddAddress( 'arsendes@gmail.com' );

$bodytext = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body>';
foreach ($_POST as $k => $v) if ($v and $k != "Subj") {

    if ($k == 'My_First_Name') $bodytext .= "<br /><h2>Personal Information</h2><hr>";
    if ($k == 'Street') $bodytext .= "<br /><h2>Property Information</h2><hr>";
    if ($k == 'Years_at_Current_Address') $bodytext .= "<br /><h2>Address Information</h2><hr>";
    if ($k == 'Employment_Type') $bodytext .= "<br /><h2>Employers Information</h2><hr>";
    if ($k == 'Other_Income_Belongs_To') $bodytext .= "<br /><h2>Other Income Information</h2><hr>";
    if ($k == 'What_is_your_race') $bodytext .= "<br /><h2>Questions the Government Requires Us to Ask</h2><hr>";
    if ($k == 'Are_there_any_outstanding_judgments_against_you') $bodytext .= "<br /><h2>Declarations</h2><hr>";

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