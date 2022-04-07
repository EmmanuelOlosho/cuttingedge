<?php include'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/cutting.jpg">
  <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
</head>
<body class="noselect" style="">
	<div class="mobile-nav-modal" id="nav-modal"></div>
	<div class="mobile-nav bg-color-code-1 hidden-ls">
	  <div class="xs-6"><div class="img-container-circle-1 xs-down-5 xs-off-1"><img src="images/cutting.jpg"></div></div>
	  <div class="xs-6 right"><a href="javascript:void(0)" class="btn-sm white px20" id="bars"><i class="fas fa-bars" id="icon"></i></a></div>
	</div>
	<div class="mobile-nav-open" id="full-nav">
    <div class="container xs-down-10">
      <div class="centered xs-12 xs-down-10"><div class="img-container-circle"><img src="images/cutting.jpg"></div></div>
      <div class="xs-12 centered"><span class="white px20">Cutting Edge Institute</span></div>
      <div class="mother xs-down-10">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="index.php#services"><i class="fas fa-bicycle"></i> Services</a>
        <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
        <a href="blog.php"><i class="fas fa-blog"></i> Blog</a>
      </div>
    </div>
  </div>
	<?php include 'navbar.php';?>
  <div class="bg-landing-2 fade-in">
    <div class="dark-scarf">
      <div class="col-10 off-1 xs-10 xs-off-1">
        <div class="col-6 down-15 xs-12">
          <div class="mother xs-down-15">
          <div class="mother xs-down-20"><span class="white px45 xs-px40">Latest: Unilorin Release First List</span></div>
            <div class="xs-12 xs-down-3"><span class="white px13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamcoborum.</span></div>
            <div class="mother down-2 xs-down-5">
              <a href="#blogs" class="call-to-action bg-white color-code-1 px13 hidden-xs bold"> See All News <i class="fas fa-arrow-down"></i></a>
              <a href="javascript:void(0)" class="call-to-action bg-white xs-bg-color-code-1 border-color-code-1 xs-white color-code-1 px13  hidden-ls bold"> See All News <i class="fas fa-arrow-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  	<div class="col-10 xs-10 md-10 md-off-1 xs-off-1 off-1 down-5 xs-down-10 md-down-10 bottom-50">
  		<?php 
       $query = mysqli_query($con, "SELECT * from blog order by id desc");
       $i = 0;
       while($row = mysqli_fetch_assoc($query)){
        $i++;
       ?>
          <div class="col-4 xs-12 md-6 xs-down-10 md-down-8">
            <a href="news.php?id=<?php echo$row['id'] ?>" class="black">
              <div class="container bottom-10">
                <div class="img-container-blog"><img src="images/d2.jpg"></div>
                <div class="container down-2 xs-down-5 md-down-3">
                  <div class="down-4 xs-down-10 md-down-5 mother"><span class="bold"><?php echo$row['title'] ?></span></div>
                   <div class="mother down-1 xs-down-1">
                     <span class="faded px13 Quest"><i class="fas fa-clock"></i> <?php  echo$row['trn'] ?></span>
                   </div>
                  <div class="hide-content down-3 col-12 xs-down-5 md-down-5 xs-12">
                    <span class="faded px13"><?php echo$row['content'] ?></span>
                </div>
                <div class="mother down-5 xs-down-10 md-down-5">
                  <div class="col-10">
                    <div class="col-2 xs-1">
                     <div class="img-container-circle-1 xs-down-5 xs-off-1"><img src="images/cutting.jpg"></div>
                    </div>
                    <div class="col-8 xs-6 xs-off-1">
                      <div class="container down-1">
                        <div class="">
                          <span class="bold px13">Cutting Edge Institute</span>
                          <div><span class="px13 faded">tanke, ilorin</span></div>
                        </div>
                        </div>
                      </div>
                  </div>
                </div>
                </div>
              </div>
            </a>
          </div>
     <?php } ?>
  	</div>
  </div>
  <?php include'footer.php'; ?>