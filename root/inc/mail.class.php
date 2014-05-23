<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//print_r ($_POST);

class Message {
    
    //sv-va
    
   var $text;
   var $subject;
   var $to;
   
   //methods
   
   function load_text ($msgbody) {
       
       $this-> text = 'Hello, my dear friend, go a minute? I\'m client <b>'
	.$_POST['name'].'</b>  and my email <'
	.$_POST['email'].'>';
   }
   
   function send(){
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

		ini_set('sendmail_from', 'phpscript@mithrilads.com');
		mail($this->to, $this->subject, $this->text, "From: phpscript@mithrilads.com\r \n" . "X-Mailer: PHP/");
	}
	else 
		error_log ('[EE] incorect email, buddy! <'.$_POST['email'].'>');
   }
   
}
?>
