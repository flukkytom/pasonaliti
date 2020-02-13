<?php
ob_start();
function email($email_id,$d,$s,$i,$c,$client_name)	{
//Here we are going to declare the variables*/
$name = 'dISC-Personaity Test Result';
$email = 'flukkytom@gmail.com';
$adminEmail = 'olutola.obembe@primaxng.com';

$message = "
<html>
<head>
<title> dISC-Personaity Test Result </title>
<body>
<div style=\"font-family:lucida sans, Geneva, Arial, Helvetica, sans-serif; font-size:12px;\">
<br />
Dear $email_id,<br />
<br />
Thank you for your recent disc test assessment, please find below your dISC traits results.<br />
<br />
&nbsp; &nbsp; &nbsp; &nbsp; Dominance (D)..........: $d<br />
&nbsp; &nbsp; &nbsp; &nbsp; Influence (I)....: $i<br />
&nbsp; &nbsp; &nbsp; &nbsp; Steady (S).......: $s<br />
&nbsp; &nbsp; &nbsp; &nbsp; Compliant (C).......: $c<br />
<br />
If you have any questions<br />
</p>
<p>or call us on +234-806-274-1555<br />
</p><br />
<p> Thank you for your time<br />
    &copy; 2013-2015 olutolaobembe.com. All Rights Reserved.</p>
</div>

</body>
</html>";

//Save visitor name and entered message into one variable:
$formcontent="$message\n\n ";
$recipient = "$email_id";
$subject = "dISC-Personaity Test Result: $email_id";
$mailheader = "From: $adminEmail\r\n";
$mailheader .= "Reply-To: $adminEmail\r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//HTML version of message
$mailsent = @mail($recipient, $subject, $formcontent, $mailheader);

return $mailsent;
}

?>