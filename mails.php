<?php 
 include 'cuttingdah.php';
 include 'db.php'; 
 ?>
 <div class="col-10 off-2 xs-12 md-12 xs-down-10 down-5 md-down-5 bottom-50" id="main-window-2">
 	<div class="col-10 off-1 md-container down-5 xs-down-10 xs-12">
 		<div class="xs-container hidden-xs"><span class="Quest color-code-1 bold"><i class="fas fa-envelope"></i> Your Inbox</span></div>
 		<div class="mother down-5 xs-down-5 md-down-5">
 		<div class="xs-container hidden-ls"><span class="Quest color-code-1 bold"><i class="fas fa-envelope"></i> Your Inbox</span></div>
 			<?php 
        $query = mysqli_query($con, "SELECT * from users ORDER BY id DESC");
        $i = 0;
        while ($row = mysqli_fetch_assoc($query)){
        $i++;
 			?>
 			<div class="col-4 xs-down-5 xs-12 down-1">
 				<div class="card">
 					<div class="container down-5 xs-down-5 md-down-5">
 						<div><span class="Quest faded px13"> <span class="bold px13 Quest color-code-1"><?php echo$row['name'] ?> ( <?php echo$row['phone'] ?> )</span></span> <sup><span class="red"><?php echo$row['status'] ?></span></sup></div>
 						<div class="col-10 down-3 xs-down-3 md-down-5 hide-content"><span class="faded px13 Quest"><?php echo$row['message'] ?></span></div>
 						<div></div>
 						<div class="mother down-3 xs-down-3 md-down-3"><a href="mail.php?i=<?php echo$row['id'] ?>" class="btn-sm white px13 Quest bg-color-code-1">View</a> <span class="fl-right px13 btn-sm down-1"><a href="javascript:void(0)" onclick="clickBtn('<?php echo$row['id']."Btn" ?>')" class="faded"><i class="fas fa-trash"></i></a></span></div>
 						<div class="hidden">
 							<form method="POST" action="helper.php">
 								<input type="text" name="delete_id" value="<?php echo$row['id'] ?>">
 								<button id="<?php echo$row['id']."Btn" ?>" type="submit" name="delete_mail"></button>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 			<?php } ?>
 		</div>
 	</div>
 </div>
 <script src="js/script.js"></script>