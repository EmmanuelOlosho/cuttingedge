<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/style.css">
 	<link rel="stylesheet" type="text/css" href="css/all.css">
 	<link rel="stylesheet" type="text/css" href="css/typography.css">
 	<link rel="stylesheet" type="text/css" href="">
 	<link rel="icon" type="image/png" href="images/qa1.jpg" >
 	<meta  name="theme-color" content="#0b7199"> 
 	<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=0">
 </head>
</head>
<body>
 <div class="col-4 off-4 down-10 xs-10 xs-off-1 xs-down-50 md-10 md-off-1 md-down-10">
 	<form method="POST" action="helper.php">
 		<div class="mother top-5 xs-top-10"><label>ENTER PASSWORD</label></div>
 		<div class="email-input-container down-15 xs-down-20"><input type="password" name="password" placeholder="enter here" required=""></div>
 		<div class="down-2 mother xs-down-5 md-down-3"><input type="submit" value="login" name="login_admin" class="btn-sm white bg-color-code-1 px13"></div>
 		<div class="mother down-1 xs-down-1"><a href="pasrecov.php" class="color-code-1 px13 Quest">forgotten password ?</a></div>
 		<?php 
      if (@$_GET['err'] == 'invalidpassword') {
 		?>
 		<div class="mother"><span class="px13 bold red Quest">Invalid password, two attempts left!</span></div>
 		<?php  } ?>

 	</form>
 </div>
</body>
</html>