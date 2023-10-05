<?php 
$msg = '';
$msg2 = '';
$formname = '';
if (isset($_POST['submit']))
{
   if($_POST["submit"]=="Submit")
	{
			$msg = "";
			$to = "balajigasrepair@gmail.com";
			
            if(isset($_POST["g-recaptcha-response"]) && !empty($_POST["g-recaptcha-response"])){
				
				$url = "https://www.google.com/recaptcha/api/siteverify";
				$data = array("secret" => "6LdAsp0iAAAAAKD3kEt-ZucvGZqj9ZT410q1WyHC", "response" => $_POST["g-recaptcha-response"]);
				$query = http_build_query($data);				
				
				$options = array(
							"http" => array(
								"header" => "Content-Type: application/x-www-form-urlencoded\r\n".
											"Content-Length: ".strlen($query)."\r\n".
											"User-Agent:MyAgent/1.0\r\n",
								"method"  => "POST",
								"content" => $query,
							),
						);

				$context  = stream_context_create($options);
				$result = file_get_contents($url, false, $context);
				
				$responseData = json_decode($result);
				
				if($responseData->success){
		
					$message = "<html><body>";
					$message .= "<table rules='all' style='border-color: #dddddd; min-width: 500px;' cellpadding='12'>";
					$message .= "<tr style='background: #eeeeee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
					$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
					$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
					$message .= "<tr><td><strong>Services:</strong> </td><td>" . strip_tags($_POST['services']) . "</td></tr>";
					$message .= "<tr><td><strong>inquiry:</strong> </td><td>" . $_POST['inquiry'] . "</td></tr>";					
					$message .= "</table>";
					$message .= "</body></html>";								
					
					//$to = "tsvaja@gmail.com";
					$subject = "Contact Inquiry to Balaji Gas Sales & Service";
					$headers = "From: Contact Inquiry <balajigasrepair@gmail.com>\r\n";
					$headers .= "Reply-To: balajigasrepair@gmail.com\r\n";
					$headers .= "Return-Path: balajigasrepair@gmail.com\r\n";
					// $headers .= "CC: info@cetra.in\r\n";
					// $headers .= "BCC: info@cetra.in\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					// $headers .= "X-Priority: 2\nX-MSmail-Priority: high";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					$headers .= "X-Priority: 3\r\n";
                    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    
					mail($to, $subject, $message, $headers);
					
					$msg = "<div style='color:#4bab02;'>Your inquiry has been sent.</div>";
				} else {
					$msg = "<div style='color:red;'>ERROR! Please try after some time.</div>";
				}
			}
			else{
				$msg = '<div>Please click on the reCAPTCHA box.</div>';
			}
	}
}    
?>


<!DOCTYPE html>
<html>
<head>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-PKT71EB4NH"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-PKT71EB4NH');
	</script>
	
	<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10815776212"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-10815776212'); </script>

    <script> gtag('config', 'AW-10815776212/8u76CIz3hu0DENTLrqUo', { 'phone_conversion_number': '088497 19272' }); </script>
	
	<!--
	<script>
	window.addEventListener('load', function() {
	if(window.location.pathname == '/contact.php'){
	var x = 0;
	  var myVar = setInterval(function(){
		if(x == 0){
		  if(jQuery('#msg:contains(Your inquiry has been sent.)').is(':visible'))
		  {
			  gtag('event', 'conversion', {'send_to': 'AW-10815776212/7ZYYCLKFp4UYENTLrqUo'});
			clearInterval(myVar);
			x = 1;
		  }
		}
	  }, 1000);
	 }
	  })
	</script>
	-->
	
	
<title>Contact Us</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Gas Stove Repair Service | Gas Repairing near me | Gas Geyser Service</title>
	
	<meta name="description" content="Balaji Gas Sales & Services provide one of the best Gas Stove Repair service, Gas Repairing service, Gas Chulha Service, Gas Geyser Repair, Chimney Servicing, Hob Repair, Hob Service, Gas Stove Installation Service in Ahmedabad. Find as Gas stove Repair Near Me, Gas Repairing near me, Gas Geyser Repair Near me, Chimney Servicing near me." />
	
	<meta name="keywords" content="Gas Stove Repair, Gas Stove Service, Gas Stove Installation, Hob Repair, Hob Service, Gas Stove Hob Repair, Gas Stove Hob Repair, Gas Chulha Repair, Gas Chulha Service." />
	
	<link rel="icon" type="image/favicon.png" href="images/favicon.png">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responcive.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

	<script> 
		$(function(){
		  $("#header").load("header.html"); 
		  $("#footer").load("footer.html"); 
		});
	</script>
	
	
</head>
<body>


	<div id="header"></div>

	
		<div class="editimg" style="background: url('images/banner-5.jpg') center; background-size: cover;">
			<div class="editright">
				<div class="aboutus">Contact us</div>
			</div>
		</div>
			
			<div class="cl"></div>
			
						<div class="design">
							<div class="view2" style="z-index: 9;">
								<div class="runright">
									<p class="macro">Balaji Gas Sales & Service</p>
									<h3 class="macro2">Get In Touch!</h3>
										<div class="pageright">
											<div class="col-sm-5 pageright2">
												Address
											</div>	
												
											<div class="col-sm-7 open">
												<p>AHMEDABAD, GUJARAT, INDIA.</p>
											</div>
										</div>
										
										<div class="pageright">
											<div class="col-sm-5 pageright2">
												Call us
											</div>	
												
											<div class="col-sm-7 open">
												<p><a href="tel:+918849719272"><i class="fa fa-phone" aria-hidden="true"></i> +91 88497 19272</a></p>
											</div>
										</div>
										
										<div class="pageright">
											<div class="col-sm-5 pageright2">
												Email us
											</div>	
												
											<div class="col-sm-7 open">
												<p><a href="mailto:balajigasrepair@gmail.com">balajigasrepair@gmail.com</a></p>
											</div>
										</div>
										
										<div class="pageright">
											<div class="col-sm-5 pageright2">
												Open
											</div>	
												
											<div class="col-sm-7 open">
												<p>Everyday 24 Hours</p>
											</div>
										</div>
									</div>
										<div class="cl"></div>
							</div>
						</div>
						
						<!-- <div class="top2" style="position:relative; z-index:0;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.954551708585!2d72.52125131480092!3d23.025440884951596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8577fa81e4d7%3A0x8fa0d2a78b9a3024!2sRiddhi%20Overseas!5e0!3m2!1sen!2sin!4v1646974376948!5m2!1sen!2sin" frameborder="0" style="border:0; height:100%; max-height: 500px; width:100%; position:absolute; left:0px; top:0px;" allowfullscreen></iframe>
						
						</div>  -->
				
			<div class="boxbottom" id="inquiry">
				<div class="textright">
					<p class="macro">GET IN TOUCH!</p>
					<h3 class="macro2">Inquiry</h3>
					<div id="msg"><?php if(isset($msg)) echo $msg;?></div>
					<form method="post" id="frm" name="frm">
						<input type="hidden" name="posted" value="1" >
						<div class="contactup">
							<input type="text" name="name" data-name="Name :"  class="form-control contacttop" id="name" placeholder="Name :">
						</div>
						
						<div class="contactup">
							<input name="email" type="text" class="form-control contacttop" id="email" data-name="Email Address :" placeholder="Email Address :" size="35" >
						</div>
						
						<div class="contactup">
							<input name="phone" type="text" class="form-control contacttop" id="phone" data-name="Contact Number :" placeholder="Mobile :" size="35" >
						</div>
						
						<div class="contactup">
							
							<select name="services" data-name="Services :" id="services" class="form-control contacttop">
								<option value="0">Select Services</option>
								<option value="Gas Stove Repair Service">Gas Stove Repair Service</option>
								<option value="Hub Gas Stove Service">Hub Gas Stove Service</option>
								<option value="Gas Geyser Repair Service">Gas Geyser Repair Service</option>
								<option value="Chimney Service">Chimney Service</option>
								<option value="RO Water Purifier Service">RO Water Purifier Service</option>
								<option value="Commercial Gas Service">Commercial Gas Service</option>
								<option value="Commercial Chulha Bhatti Service">Commercial Chulha Bhatti Service</option>
								<option value="Gas Pipe Line Fittings">Gas Pipe Line Fittings</option>
								<option value="Laboratory Gas Line Fittings">Laboratory Gas Line Fittings</option>
								<option value="Laboratory Gas Burner Service and Fittings">Laboratory Gas Burner Service and Fittings</option>
								
							</select>
							
						</div>
						
						<div class="contactup">
							<textarea name="inquiry" data-name="Message :" placeholder="Message :" cols="35" rows="4" class="form-control contacttop" id="inquiry"></textarea>						
						</div>
						
						<div class="contactup">
							<div class="captchaPSD">
								<div class="g-recaptcha" data-sitekey="6LdAsp0iAAAAADG9c-Ern-Urtc7R8ODwx4oR8ogR"></div>
							</div>					
						</div>
						
						<div >
							<input type="submit" class="btn btn-primary btn-lg formSubmit" name="submit" id="button" value="Submit">
							<input type="hidden" value="<?php echo $formname;?>" name="form" >
						</div>
					
					</form>
					
				</div>
				<div class="cl"></div>
			</div>
			
				<div class="cl"></div>

		
		<div id="footer"></div>
		
		
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$('body').on('mouseenter mouseleave','.dropdown',function(e){
			  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
			  setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
			  },300);
			  
			});
		}); 
		
		$(function(){
		 var shrinkHeader = 150;
		  $(window).scroll(function() {
			var scroll = getCurrentScroll();
			  if ( scroll >= shrinkHeader ) {
				   $('nav').addClass('shrink');
				}
				else {
					$('nav').removeClass('shrink');
				}
		  });
		function getCurrentScroll() {
			return window.pageYOffset;
			}
		});
		
	</script>
	
</body>
</html>