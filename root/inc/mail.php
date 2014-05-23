<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "mail.class.php";

$mes =  new Message();
$mes->subject = 'Client has been submited';
$mes->to = 'dkroshkin@gmail.com; silverbudha@gmail.com; samorodow@gmail.com';
$mes->load_text('');
$mes->send();

#TODO:validation

#if (!isset($_POST['res'])){
#    echo "Please fill the body";
#}
#else
echo "Message was sended";

HEADER('Location: http://mithrilads.com');

?>

