<?php
if (isset($_POST['sendmail'])){
$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$msg = addslashes($_POST['message']);

$to = "zero.thanaphat@gmail.com";

$message = $msg;

$header = "From : " . $email . " \r\n";
$header .= "MIME-Version; 1.0\r\n";
$header .= "Content-type; text/html\r\n";

$retval = maill($to,$message,$header)

if ($retval) {
    echo"ส่งข้อความสำเร็จ!";
   } else {
    echo"ส่งข้อความไม่สำเร็จ!";
   }
}


?>