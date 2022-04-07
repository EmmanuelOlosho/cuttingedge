<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/typography.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="icon" type="image/png" href="images/cutting.jpg">
	  <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
</head>
<body>
 <div class="mobile-nav-modal" id="nav-modal"></div>
   <div class="mobile-nav bg-color-code-1 hidden-ls">
     <div class="xs-6"><div class="container"><a href="index.php" class="white px20"><i class="fas fa-arrow-left"></i></a></div></div>
     <div class="xs-6 right"><a href="javascript:void(0)" class="btn-sm white px20" id="bars"><i class="fas fa-bars" id="icon"></i></a></div>
   </div>
   <div class="mobile-nav-open" id="full-nav">
     <div class="container xs-down-10">
       <div class="centered xs-12 xs-down-10"><div class="img-container-circle"><img src="images/cutting.jpg"></div></div>
       <div class="xs-12 centered"><span class="white px20">Cutting Edge Institute</span></div>
       <div class="mother xs-down-10">
         <a href="index.php"><i class="fas fa-home"></i> Home</a>
         <a href="#services"><i class="fas fa-bicycle"></i> Services</a>
         <a href="javascript:void(0)" onclick="openModal('contact_modal')"><i class="fas fa-envelope"></i> Contact</a>
         <a href=""><i class="fas fa-search"></i> Search</a>
         <a href="blog.php"><i class="fas fa-blog"></i> Blog</a>
       </div>
     </div>
   </div>
   <div class="mother bottom-50 xs-down-10">
   	<div class="xs-10 xs-off-1 xs-down-20">
   		<div class="centered "><span class="color-code-1 bold px30">Get In touch</span></div>
   		<div class="mother xs-down-3 centered"><span class="faded">How would you like to reach Us ?</span></div>
   		<div class="mother xs-down-15">
   			<div class="xs-4 centered">
   				<div class="container" id="chat">
   					<div class="init-bg centered"><span class="color-code-1 px20 bold"><i class="fab fa-whatsapp"></i></span></div>
   					<div class="mother xs-down-5"><span class="color-code-1">Chat us up</span></div>
   				</div>
   			</div>
   			<div class="xs-4 centered">
   				<div class="container" id="mail">
   					<div class="init-bg centered"><span class="color-code-1 px20 bold"><i class="fas fa-envelope"></i></span></div>
   					<div class="mother xs-down-5"><span class="color-code-1" >Mail Us</span></div>
   				</div>
   			</div>
   			<div class="xs-4 centered">
   				<div class="container" id="call">
   					<div class="init-bg centered"><span class="color-code-1 px20 bold"><i class="fas fa-phone"></i></span></div>
   					<div class="mother xs-down-5"><span class="color-code-1">Place a Call</span></div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>
   <div class="mother bottom-50 fade-in" id="chat-me" hidden="">
   	<div class="xs-10 xs-off-1 xs-down-5 centered">
   		<div class="init-bg centered"><i class="fas fa-comments"></i></div>
   		<div class="mother xs-down-10"><span class="faded color-code-1">send su a message via whatsapp and we will respond in no time !</span></div>
   		<div class="mother xs-down-10"><a href="https://wa.me/<07082470461>" class="btn-sm white bg-color-code-1">Message us now</a></div>
   	</div>
   </div>
   <div class="mother bottom-50 fade-in" id="mail-me">
   	<div class="xs-10 xs-off-1">
   		<form method="POST" action="helper.php">
            <input type="text" name="status" value="New" hidden="">
   		  <div class="mother">
   		    <label><span class="px13 bold color-code-1">Your Name</span></label>
   		    <div class="email-input-container">
   		      <div class="xs-1 centered"><span class="faded px13"><i class="fas fa-user"></i></span></div>
   		      <div class="xs-8"><input type="text" required="" name="name" placeholder="your name here"></div>
   		    </div>
   		  </div>
   		  <div class="mother xs-down-5">
   		    <label><span class="px13 bold color-code-1">Your e-mail</span></label>
   		    <div class="email-input-container">
   		      <div class="xs-1 centered"><span class="faded px13"><i class="fas fa-envelope"></i></span></div>
   		      <div class="xs-8"><input type="email" name="email" required="" placeholder="your name"></div>
   		    </div>
   		  </div>
   		  <div class="mother xs-down-5">
   		    <label><span class="px13 bold color-code-1">Phone Number</span></label>
   		    <div class="email-input-container">
   		      <div class="xs-1 centered"><span class="faded px13"><i class="fas fa-phone"></i></span></div>
   		      <div class="xs-8"><input type="Tel" name="phone" required="" placeholder="phone number"></div>
   		    </div>
   		  </div>
   		  <div class="mother xs-down-5">
   		    <label><span class="px13 bold color-code-1">Message</span></label>
   		    <div class="mother bg-faded">
   		      <textarea placeholder="Message here" name="message" required=""></textarea>
   		    </div>
   		  </div>
   		  <div class="mother xs-down-5 bottom-10 right"><button type="submit" name="send_mail" value="" class="bg-color-code-1"> <i class="fas fa-paper-plane"></i>  Send mail</button></div>
   		</form>
   	</div>
   </div>
   <div class="mother bottom-50 fade-in" id="call-me" hidden="">
   	<div class="xs-10 xs-off-1 xs-down-5 centered">
   		<div class="init-bg centered"><i class="fas fa-phone"></i></div>
   		<div class="mother xs-down-10"><span class="faded color-code-1">You would also place a call rightaway !</span></div>
   		<div class="mother xs-down-10"><a href="Tel: 07082470461" class="btn-sm white bg-color-code-1">Place a call</a></div>
   	</div>
   </div>
   <div class="mother xs-down-5 bottom-50 centered">
   	<a href="" class="color-code-1  btn-sm"><i class="fab fa-facebook"></i></a>
   	<a href="" class="color-code-1 btn-sm"><i class="fab fa-instagram"></i></a>
   	<a href="" class="color-code-1 btn-sm"><i class="fab fa-twitter"></i></a>
   	<a href="" class="color-code-1 btn-sm"><i class="fas fa-map-marker-alt"></i></a>
   </div>
<?php include'footer.php'; ?>
<script type="text/javascript">
	var mail = document.getElementById('mail')
	var call = document.getElementById('call')
	var chat = document.getElementById('chat')
	mail.addEventListener('click', function(){
		document.getElementById('mail-me').style.display = 'block'
		document.getElementById('call-me').style.display = 'none'
		document.getElementById('chat-me').style.display = 'none'
	})
	call.addEventListener('click', function(){
		document.getElementById('mail-me').style.display = 'none'
		document.getElementById('call-me').style.display = 'block'
		document.getElementById('chat-me').style.display = 'none'
	})
	chat.addEventListener('click', function(){
		document.getElementById('mail-me').style.display = 'none'
		document.getElementById('call-me').style.display = 'none'
		document.getElementById('chat-me').style.display = 'block'
	})
</script>