<?php
//error_reporting(0);
 ob_start(); // Initiate the output buffer 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			include "./portal_head.php";
		?>
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<META NAME="KEYWORDS" CONTENT="bay area software consulting services, bay area contract software consultants, Silicon Valley Software Developers, Bay Area Software Developers" />
		<meta name="DESCRIPTION" CONTENT="Bay area software consulting services, deliver high quality software on time. " />
		<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW" />
		<title>bay area software consultants, software consulting services, Contract Software Development, Silicon Valley Software Developers, Bay Area Software Developers</title>
		<script language="javascript" src="js/jquery/jquery-1.9.0.js"></script>
		<script language="javascript" src="js/glogou.js"></script>
		<script language="javascript" src="js/parseLogo.js"></script>
		<link rel="stylesheet" type="text/css" href="css/glogou.css" />
		<link rel="stylesheet" type="text/css" href="news/news.css" />
     
	<?php include_once("analyticstracking.php") ?>

</head>

<?php
        ob_end_flush();
?>
	<body bgcolor="#ffffff">

		<!-- Logo and slogan -->
		<?php require('header.php'); ?>

		<!-- Menu bar -->
		<!-- Flash and highlights -->
		<?php include 'portal_highlights.php'; ?>

		<!-- Content in columns -->
		<table width="1024px" style="border-collapse:collapse" align="center" cellpadding="10" cellspacing="20">
			<tr valign="top">
				<td width="334px" style="background-image:url('images/content_background.png');background-repeat:no-repeat;">

<!-- About Us -->
<p><b>Highlight</b></p>
<p class="hgihlight">

&nbsp;&nbsp;&nbsp;&nbsp;Support and sales:<br />
&nbsp;&nbsp;&nbsp;&nbsp;- E-mail: <a href="mailto:help@glogou-inc.com">help@glogou-inc.com</a><br />
&nbsp;&nbsp;&nbsp;&nbsp;- Hotline: (408) 838-6320<br />
&nbsp;&nbsp;&nbsp;&nbsp;- Skype ID: glogou1<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Office locations:<br />
&nbsp;&nbsp;&nbsp;&nbsp;- Silicon Valley, California<br />
&nbsp;&nbsp;&nbsp;&nbsp;- Boston, Massachusetts<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Address:<br />
&nbsp;&nbsp;&nbsp;&nbsp;2068 Walsh Ave, Suite C<br />
&nbsp;&nbsp;&nbsp;&nbsp;Santa Clara, CA 95050<br />
&nbsp;&nbsp;&nbsp;&nbsp;U.S.A.
</p>
<br />
<p align="center">
<?php include "portal_livechat.html" ?>
</p>
				</td>
				<td width="678px" style="background-image:url('images/content_background1.png');background-repeat:no-repeat;">

<!-- Contact Us -->
<p><b>Contact Us</b></p>
<p class="desc">
<?php
	if ( $_POST['submit'] ) 
	{
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $track_id = $_COOKIE['track_id']; 
       	
		//DB Prod Connection
		$hostname = 'acdb01.db.5003652.hostedresource.com';
		$username = 'acdb01';
		$password = 'ACAdmin2011';
		$dbname = 'acdb01';

		/*
		//DB Dev Connection
		$hostname = 'localhost';
		$username = 'root';
		$password = 'admin';
		$dbname = 'acdb';
		
					
		$conn = mysql_connect($hostname, $username, $password) OR DIE(mysql_error());
		mysql_select_db($dbname) OR DIE(mysql_error());
		
		if ($phone =='123456') {
		}
		else {
		//Insert new page visit record
		$sql = "insert into lead_tracking( fullname, email, phone, subject_text, body_text, ip, submit_time) values( '$name', '$email', '$phone', '$subject', '$content', '$ip', NOW())";
		mysql_query($sql) OR DIE(mysql_error());
		}
		//Close db connection
		mysql_close($conn);	

		*/ 
		
	        
	    $from =	'help@glogou-inc.com';
		$to = 'help@glogou-inc.com';
		$subject_referral="You got a letter from glogou-inc";
		$headers ="From:" . $from . "\r\n" ."Reply-To: help@glogou-inc.com". "\r\n"  ;
		$headers .= 'Bcc: luofayun@gmail.com' . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
		$body_referal= "---------------------------Info for Glogou program------------------------------<br>
		Name:$name <br>
		Email:$email <br>
		Phone: $phone <br>
		Subject:$subject<br>
		Content:$content<br>";

                // spam use 123456 as phone number
		if (substr($phone, 0, 6) =='123456') {
		}
		else {	
		$mail_sent = mail($from,$subject_referral,$body_referal,$headers);
		}
		
		print ('<p align="center"><br><br><b>Thank You. Your information has been submitted. we will contact you shortly.</b></p>');
?>
	</p>
				</td>
			</tr>
		</table>
<?php
   }
include 'portal_footer.php'; 
?>
</body>
</html>