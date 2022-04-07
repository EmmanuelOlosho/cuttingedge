<?php 
include'db.php';
 	$post = @$_GET['id'];
  $query = mysqli_query($con, "SELECT * from blog where id = '$post' limit 1");
  $row = mysqli_fetch_assoc($query);
  $title = $row['title'];
  $i = 0;

  $ss = mysqli_query($con, "SELECT * from comments where title = '$title' ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
    if (@$_GET['id'] == 'err') {
      @$_GET['id'] == '12';
    }
	 ?>
	<title><?php echo$row['title'] ?></title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/cutting.jpg">
  <meta  name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
 <?php include'navbar.php' ?>
 <div class="col-10 off-1 down-10 bottom-50">
 	<div class="col-4">
 		<div class="img-container"><img src="images/<?php echo'im99.jpg' ?>">	</div>
 	</div>
 	<div class="col-6 off-2">
 		<div class="container">
 			<div><span class="px20 color-code-1 bold"><?php echo$row['title'] ?>!</span></div>
 			<div class="mother down-2"><span class="px13 faded"><?php echo$row['content'] ?></span></div>
 			<div class="mother down-6">
 				<a href="blog.php" class="px13 color-code-1"><i class="fas fa-share"></i> back</a>
 				<a href="blog.ph" class="off-1 px13 color-code-1"><i class="fas fa-thumbs-up"></i> like 0</a>
 			</div>
 			<div class="mother down-5">
 				<div><span class="px13 color-code-1 bold">Comments <i class="fas fa-comments"></i> <?php echo mysqli_num_rows($ss);?></span></div>
 				<?php 
 				 $post = @$_GET['id'];
 				 $query = mysqli_query($con, "SELECT * from blog where id = '$post' limit 1");
 				 $row = mysqli_fetch_assoc($query);
 				 $title = $row['title'];
 				  
          while ($sql = mysqli_fetch_assoc($ss)) {
          $i++;
 				 ?>
 				<div class="mother down-5">
 				<div>
 					<span class=""><i class="fas fa-user color-code-1"></i></span>
 					<span class="px13 color-code-1 bold"><?php echo$sql['name'] ?></span>
 				</div>
 					<div class="mother">
 						<div class="mother">
 							<div class=""><span class="px13 faded"><?php echo$sql['comment'] ?></span></div>
 						</div>
 					</div>
 				</div>
 			<?php } ?>
 			</div>
 			<div class="mother down-5">
 				<div><span class="px13 bold color-code-1">Add your Comment</span></div>
 				<form method="POST" action="helper.php" class="col-8" autocomplete="off">
 					<input type="text" name="title" value="<?php echo$row['title'] ?>" hidden>
 					<input type="text" name="id" value="<?php echo$row['id'] ?>" hidden>
 					<div class="mother down-3">
 						<div><label class="px13 color-code-1">Name</label></div>
 						<div class="email-input-container"><input type="text" class="px13" name="name" placeholder="Name here..."></div>
 					</div>
 					<div class="mother down-3">
 						<div><label class="px13 color-code-1">Your Comments</label></div>
 						<div><textarea name="comment" placeholder="Comments here..." class="bg-faded"></textarea></div>
 					</div>
 					<div><input type="submit" name="post_comm" value="Post" class="btn-sm white bg-color-code-1 px13"></div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>