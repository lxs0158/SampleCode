<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Glogou, Inc, leading softwar development company in Silicon Valley</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!--bootstrap CDN-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/styleNew.css" rel="stylesheet">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
<script>

$(function(){

  $('#myCarousel').carousel();
});
</script>
	</head>
	<body>
		<!-- Navbar -->
<style>
input.gsc-input {
	background-image:none !important;
	line-height: normal;
	box-shadow:none; 
	box-sizing: content-box;
	width:250px !important; 
	font-size:12px;
	}
input.gsc-search-button {
	line-height: normal;
	box-shadow:none; 
	box-sizing: content-box;
}
table.gsc-search-box {
	width: 250px;
	height:50px;
}
td.gsib_a {padding:0 5px; }
</style>	

	<nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img src="image/glogou_logo2.png" /></a>

                    <div class="collapse navbar-collapse" id="navbar-exl-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="product.html">Products</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="market.html">Markets</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul><!-- end of nav -->
                        <script>
  (function() {
    var cx = '015984177207326994057:ufucy1vtoki';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>

                    </div><!-- end of collapse navbar-collapse -->
                </div><!-- end of inner container -->
            </nav>

        <!-- Navbar End -->
	
	<div id="topimage"><img src="image/aboutus.jpg" /><div>
	
	<div class="row">
		<div class="col-md-12 text-center" id="slogan">
			<h2>Contact Us</h2>
		</div>
	</div>
	
		<!-- Contact blocks -->
	<div class="container">
	
	<div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Our Office</h4>
                    </div>
                    <div class="panel-body">
						<p><strong>Headquarter address:</strong></p>
						<p>2068 Walsh Ave, Suite C, Santa Clara, CA 95050</p>
						<p>We have offices in Silicon Valley, California and Boston, Massachusetts.</p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Support and Sales</h4>
                    </div>
                    <div class="panel-body">
                        <p><strong>EMAIL:</strong> help@glogou-inc.com</P>
						<p><strong>SKYPE ID:</strong> glogou1</p>
						<p><strong>HOTLINE:</strong> (408) 838-6320</p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
		<!-- Contact blocks End-->
		<?php

	if ( !isset($_POST['submit']) ) 

	{		
	?>
		<!-- Contact Form -->
		<div clas="row">
		<div class="col-md-12 text-center" id="contactform">
			<h3>We provide ALL THE HELP you need for your software development requirements</h3>
			<div class="col-md-8 col-md-offset-2">
			<h4>Small or large software development projects ? Contact Us:</h4>
			<form class="form-horizontal"  method="post" action="contact.php" onsubmit="return validate(this);">
				<div class="form-group">
				    <label for="name" class="col-md-2 control-label">Your Name</label>
				    <div class="col-md-6">
					<input type="text" class="form-control col-sm-10" name="name" placeholder="name"/>
				    </div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail" class="col-md-2 control-label">Your Email</label>
					<div class="col-md-6">
					<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
				    <label for="name" class="col-md-2 control-label">Your Phone</label>
				    <div class="col-md-6">
					<input type="text" class="form-control col-sm-10" name="phone" placeholder="phone"/>
				    </div>
				</div>
				<div class="form-group">
				    <label for="name" class="col-md-2 control-label">Subject:</label>
				    <div class="col-md-6">
					<input type="text" class="form-control col-sm-10" name="subject" placeholder="subject"/>
				    </div>
				</div>
				<h4>Additional information to help us understand your requirements:</h4>
					<ul class="ul1">
						<li>What are the goals of your projects ?</li>
						<li>Which platform, framework do you prefer ?</li>
						<li>When do you plan to start the project ?</li>
					</ul>
				<div class="form-group">
					<label for="message" class="col-md-2 control-label">Comments: </label>
					<div class="col-md-8">
					<textarea class="form-control" name="message" id="message" required="required"></textarea>
					</div>
				</div>

            <button type="submit" class="btn btn-primary" id="submit" name="submit" style="margin-left: 40px">Send</button>

    
			</form>
				
			</div><!--end inner col 6 -->
		</div><!-- end col-md-12 -->
	</div><!-- end row -->
		<p>&nbsp;</p>
		<?php

	} else 

	{

        $name = $_POST['name'];

        $phone = $_POST['phone'];

        $email = $_POST['email'];

        $subject = $_POST['subject'];

        $content = $_POST['message'];

        $ip = $_SERVER['REMOTE_ADDR'];

        //$track_id = $_COOKIE['track_id']; 

		//DB Prod Connection

		$hostname = 'acdb01.db.5003652.hostedresource.com';

		$username = 'acdb01';

		$password = 'ACAdmin2011';

		$dbname = 'acdb01';

	    $from =	'help@glogou-inc.com';

		$to = 'help@glogou-inc.com';

		$subject_referral="You got a letter from glogou-inc";

		$headers ="From:" . $from . "\r\n" ."Reply-To: help@glogou-inc.com". "\r\n"  ;

		$headers .= 'Bcc: bin.lee@gmail.com' . "\r\n";

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

		print ('<div class="row"><div class="col-md-12 text-center">' .
			'<h3>Thank You. Your information has been submitted. We will contact you shortly.</h3>' .
			'</div></div>');
	}
?>
		<!-- Contact Form End-->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Glogou, Inc. &middot; <a href="about">About</a> &middot; <a href="contact.html">Contact</a></p>
      </footer>

    </div><!-- /.container -->
<script>
$(document).ready(function() {
	setTimeout(function() {
		var msg = "Enter search phrases, e.g., web application";
		jQuery("input.gsc-input").val(msg);
		jQuery("input.gsc-input").focus(function() {
			$(this).val("");
		});
		jQuery("input.gsc-input").blur(function() {
			if ($(this).val().trim() == "") {
				$(this).val(msg);
			}
		});
	}, 1000);
	
});
</script>	
	</body>
</html>