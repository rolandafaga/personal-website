<!DOCTYPE HTML>

<html>
	<head>
		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-174251519-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<!-- End Google Analytics -->
		
		<title> ROLAND</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="canonical" href="https://rolandafaga.com" />

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/projects.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js' async defer > </script>
		<link rel="icon" type = "image/ico" href = "../images/favicon.ico" sizes="256x256">
	</head>
	<body class="is-preload contact">
		<div id="page-wrapper">
	
			<!-- Header -->
			<header id="header">
				<h1 id="title" class="nounderline"><a href = "/"> ROLAND </a> </h1>
				<nav>
					<ul>
						<li><a href="/projects/">Projects</a></li>
						<li><a href="/resume">Resume</a></li>
						<li> <a href="/contact">Contact</a></li>
					</ul>
				</nav>
				<button id="burger" class="open-main-nav">
					<span class="burger"></span>
				</button>
			</header>
			
			<nav class="main-nav" id="main-nav">
				<ul>
					<li> <a href="/projects/">Projects</a></li>
					<li><a href="/resume">Resume</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</nav>
				
			<section id="wrapper">
				
				<section id="one" class="contact profile wrapper alt spotlight style3">
					<div class="inner">
						<div class="main content align-center">
							<a id="profile" class="image"><img src="../images/profile-pic-1.jpg" alt="Roland Afaga" /></a>
							<ul class = "contact info">
								<!-- <li class="fa-phone">+1 (808) 896-6599</li> -->
								<li class="fa-envelope"> <a href="mailto:rolandafaga@gmail.com" target = "_blank">rolandafaga@gmail.com</a> </li>
								<li class="fa-linkedin"> <a href="https://linkedin.com/in/roland-afaga" target = "_blank">linkedin.com/in/roland-afaga/</a> </li>
								<li class="fa-github"> <a href="https://linkedin.com/in/roland-afaga" target = "_blank">github.com/rolandafaga</a> </li>
							</ul>
						</div>
						<div class="bio content align-left">
							<h2 class="major line-1 typewriter">Hello, World!</h2>
							<p>I am a recent graduate from Santa Clara University's School of Engineering with project management and front-end development experience. </p>

							<p> From graphic design to web development, I've always been fascinated by how technology and good design have the ability to create 
								waves in today's society. Combined with my passion for community service, I genuinely believe that together, design and tech have the power to aid people around the world. </p>

							<p> I'm seeking to leverage my leadership abilities and engineering background to develop customer-centric products and experiences 
								through full-time product management or user experience positions. </p>
						</div>
					</div>
				</section>
			
			<!-- Form -->
				<section class="wrapper style3 special">
					<div class="container medium">
						<header class="major">
							<h2>Get in Touch</h2>
						</header>
						<form id="contact" method="post" action="/contact">
							<div class="row gtr-uniform gtr-50 fields">
								<div class="field half"><input type="text" name="name" id="name" placeholder="Name *" required/></div>
								<div class="field half"><input type="email" name="email" id="email" placeholder="Email *" required/></div>
								<div class="field"><input type="text" name="subject" id="subject" placeholder="Subject *" required/></div>
								<div class="field"><textarea name="message" id="message" placeholder="Message *" rows="8" required></textarea></div>
							</div>
							<ul class="actions special">
								<li> <div class="g-recaptcha" data-sitekey="6Lf5F8AZAAAAAGU_nzGriVLJB1MmsOlRWpMczzDP" data-badge="inline" data-callback="setResponse"></div> </li>
							</ul>
							<ul class="actions special">							
								<li><input id="submit" type="submit" value="Send Message" /></li>
							</ul>
						</form>
					</div>
				</section>
			</section>
	
			<div id="reCaptcha" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<p class="modal-text">Please check the reCaptcha before submitting the form.</p>
							<button type="button" class="btn btn-default primary button" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
	
			<div id="contact-success" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Message Sent!</h3></br>
							<p class="modal-text">Please check your inbox as you will be receiving a confirmation email shortly.</p>
							<button type="button" class="btn btn-default primary button" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
			<div id="contact-error" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Error</h3></br>
							<p class="modal-text">Sorry, something went wrong. Please email <a class="modal-text" href="mailto:rolandafaga@gmail.com"> rolandafaga@gmail.com </a> to contact me directly.</p>
							<button type="button" class="btn btn-default primary button" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div> 
		</div>
			
		<!-- Scripts -->
			<script>
				$("#contact").submit(function(event) {

				   var recaptcha = $("#g-recaptcha-response").val();
				   if (recaptcha === "") {
				      event.preventDefault();
				      $("#reCaptcha").modal("toggle");
				   }
				});
				
				var onloadCallback = function() {
					grecaptcha.execute();
				};

				function setResponse(response) { 
					document.getElementById('captcha-response').value = response; 
				}
			</script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/menu.js"></script>
	</body>
</html>

<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	require __DIR__.'/../assets/vendor/autoload.php';
	
	$mail = new PHPMailer;

	$mail->isSMTP();
	
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();

	// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
	
	$name = trim((string) $_POST['name']);
	$email = $_POST['email'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$mail->Host = $_ENV['MAIL_HOST'];                            //Set the hostname of the mail server
		$mail->Port = 587;                                         //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->SMTPSecure = "tls";				        //Set the encryption mechanism to use - STARTTLS or SMTPS
		$mail->SMTPAuth = true;                                    //Whether to use SMTP authentication
		$mail->Username = $_ENV['MAIL_USERNAME'];                     //Username to use for SMTP authentication - use full email address for gmail
		$mail->Password = $_ENV['MAIL_PASSWORD'];                           //Password to use for SMTP authentication
	} 
	
	$subject = trim($_POST['subject']);
	$message = $_POST['message'];

	if ($_POST["name"] != "") {

		$mail->setFrom('admin@rolandafaga.com', $name);                   	   //Set who the message is to be sent from, DOESN'T work with gmail 
		$mail->addReplyTo($email, $name);                                 	   //Set an alternative reply-to address
		$mail->addAddress('admin@rolandafaga.com', 'Roland Afaga');      	   //Set who the message is to be sent to

		$mail->Subject = $subject;                    	   //Set the subject line	
		$mail->Body    = $message . '<br><br> --- </br><b>' . $name . '</b><br>' . $email;
		$mail->AltBody = $message;                				   //Replace the plain text body with one created manually
			
		$secret = $_ENV['RECAPTCHA_SECRET_KEY'];
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$responseData = json_decode($verifyResponse);
		if($responseData->success) {
		//send the message, check for errors
			if (!$mail->send()) { ?>
				<script language="javascript" type="text/javascript">
					$("#contact-error").modal("toggle");
				</script> <?php
			} else { ?>
				<script language="javascript" type="text/javascript">
					$("#contact-success").modal("toggle");
				</script> <?php
			}
			$mail->ClearAllRecipients();
			
			$mail->setFrom('admin@rolandafaga.com', 'Roland Afaga');                   	  
			$mail->addReplyTo('admin@rolandafaga.com', 'Roland Afaga');                                 	
			$mail->addAddress($email, $name);      	
			
			$mail->Body    = "Thank you for getting in touch! I'll look over your message and get back to you soon. <br><br>I've attached your message below for future reference: <br><br><br><br><p style='color=:#676767';><i>". $message .
					"</i></p><br><br><br><br> --- </br><b>Roland Afaga</b><br>Santa Clara University '22<br>Web Design and Engineering<br> <a href = 'https://rolandafaga.com'> https://rolandafaga.com </a> <br>";
			
			$mail->send();	
		} else { ?>
			<script language="javascript" type="text/javascript">
				$("#contact-error").modal("toggle");
			</script> <?php
		}
	}
?>
