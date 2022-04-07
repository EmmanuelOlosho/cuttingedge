<?php 
  session_start();
  include'db.php';
  if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    $query = mysqli_query($con, "SELECT * from adim where password = '$password'");
  }
  else {
    header('location:adlogin.php');
  }
?>
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
<body class="noselect">
  <div class="col-2 xs-10 md-8 xs-closed md-closed side-bar" id="side-bar">
  	<div class="side-bar-top">
  		<div class="container">
  			<div class="profile-img-container"><img src="images/cutting.jpg" alt=" "></div>
  			<span class="fl-right white">Cutting Edge Institute</span>
  		</div>
  		<div class="container down-20 xs-down-5 md-down-10 bottom-50">
  		    <a href="profile.php">
  		        <div class="side-bar-item">
  		            <i class="fa fa-user"></i>
  		            <span>Dashboard</span>
  		        </div>
  		    </a>
  		    <a href="mails.php">
  		        <div class="side-bar-item">
  		            <i class="fa fa-envelope"></i>
  		            <span>Mails</span>
  		        </div>
  		    </a>
  		    <a href="query.php">
  		        <div class="side-bar-item">
  		            <i class="fa fa-fire"></i>
  		            <span>Queries</span>
  		        </div>
  		    </a>
          <a href="">
              <div class="side-bar-item">
                  <i class="fa fa-book"></i>
                  <span>Teachers Report</span>
              </div>
          </a>
  		    <a href="blg.php">
  		        <div class="side-bar-item">
  		            <i class="fa fa-blog"></i>
  		            <span>Blog/News</span>
  		        </div>
  		    </a>
  		   <div class="nav-cluster-dah">
         <a href="">
             <div class="side-bar-item">
                 <i class="fa fa-tools"></i>
                 <span>General Settings <span class="off-1"><i class="fas fa-angle-down"></i></span></span>
             </div>
         </a>
         <div class="nav-cluster-elements-dah height-on">
           <a href="settings.php">
               <div class="side-bar-item">
                   <i class="fa fa-key"></i>
                   <span>password management</span>
               </div>
           </a>
           <a href="display.php">
               <div class="side-bar-item">
                   <i class="fa fa-paper-plane"></i>
                   <span>Page display settings</span>
               </div>
           </a>
         </div>  
         </div>
             <div class="side-bar-item">
                 <i class="fa fa-tools"></i>
                 <span>Settings</span>
             </div>
         </a>
  		</div>
  	</div>
  </div>
  <div class="hidden-ls">
  	<div class="tap-to-close fade-in" id="tap" onclick="sideMenuController()"></div>
  </div>
  <div class="col-10 off-2 xs-12 md-12" id="main-window">
      <div class="top-bar">
          <a href="javascript:void(0)" onclick="sideMenuController()" class="white px20 fl-left"><i class="fa fa-bars"></i></a>
      </div>
  </div>
  <div class="profile-footer hidden" id="footer">
      <div class="col-11 md-11 xs-11 right">
          <div>
              <span>Qagent 2021</span>
          </div>
      </div>
  </div>
</body>
</html>
<script type="text/javascript">
    function sideMenuController() {
        var x = document.getElementById('side-bar');
        var y = document.getElementById('main-window');
        var z = document.getElementById('main-window-2');
        if (x.className == 'col-2 xs-10 md-8 xs-closed md-closed side-bar') {
           document.getElementById('tap').style.display = 'block';
           x.className += ' slide-out-lg xs-opened md-opened';
           y.className = 'col-12 xs-12 md-12';
           z.className = 'col-12 xs-12 md-12 down-5 xs-down-15 md-down-10';
        }
        else {
        	document.getElementById('tap').style.display = 'none';
        	x.className = 'col-2 xs-10 md-8 xs-closed md-closed side-bar';
        	y.className = 'col-10 off-2 xs-12 md-12';
        	z.className = 'col-10 off-2 xs-12 md-12 down-5 xs-down-15 md-down-10';
        }
    }
</script>