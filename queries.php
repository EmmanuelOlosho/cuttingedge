<?php 
 include 'cuttingdah.php';
 include 'db.php'; 
 $q  = @$_GET['i'];
 $query = mysqli_query($con, "SELECT * from query where id = '$q' limit 1");
 $row = mysqli_fetch_assoc($query);
 if($_GET['i'] == $q){
   $query_stat = mysqli_query($con, "UPDATE query SET status = '' where id = '$q'");
 }
 ?>
 <div class="col-10 off-2 xs-10 xs-off-1 md-12 xs-down-15  md-down-5 bottom-50" id="main-window-2">
 	<div class="col-10 off-1 md-container down-8 xs-down-10">
 		<div><span class="color-code-1 bold"><a href="query.php" class="btn-sm color-code-1 px13"><i class="fas fa-arrow-left"></i></a>  Query</span></div>
 		<div class="mother down-3  xs-12 xs-down-5"><span class="color-code-1 Quest px13"><span class="">Sender's Name:</span>  <span class="faded"><?php echo$row['name'] ?></span></span></div>
 		<div class=" xs-12 xs-down-5"><span class="color-code-1 Quest px13"><span class="">Sender's Email:</span>  <span class="faded"><?php echo$row['email'] ?></span></span></div>
 		<div class=" xs-12 xs-down-5"><span class="color-code-1 Quest px13"><span class="">Sender's Phone Number:</span>  <span class="faded"><?php echo$row['phone'] ?></span></span></div>
 		<div class=" xs-12 xs-down-5"><span class="color-code-1 Quest px13"><span class="">Time:</span>  <span class="faded"><?php echo$row['trn_date'] ?></span></span></div>
 		<div class="mother down-4  xs-12 xs-down-5"><span class="color-code-1 Quest px13"><span class="">Query:</span>  <span class="faded"><?php echo$row['query'] ?></span></span></div>
 		<div class="down-5  xs-12 xs-down-5 col-6 xs-down-5 md-down-3">
 			<form method="POST" action="helper.php">
 				<div>
 					<input type="email" name="sender_email" hidden value=" <?php echo$row['email'] ?>">
 					<label class="px13 color-code-1 Quest">Reply This Query</label>
 					<div class="mother down-2 xs-down-5"><textarea name="reply" placeholder="Mesage here" class="bg-faded" required=""></textarea></div>
 				</div>
 				<div><button type="submit" class="bg-color-code-1 px13" name="reply_mail" value="">Reply </button></div>
 			</form>
 		</div>
 		<div class="down-5 col-6 xs-12 xs-down-5 md-down-3">
 			<div class="container">
 				<div class=""><span class="px13 color-code-1 Quest">Call Sender</span></div>
 				<div class="mother down-2 xs-down-5"><a href="Tel: <?php echo$row['phone'] ?>" class="btn-sm bg-color-code-1 white px13 Quest">Place a call <i class="fas fa-phone"></i></a></div> 				
 			</div>
 		</div>
 	</div>
 </div>
 <script src="js/script.js"></script>
 