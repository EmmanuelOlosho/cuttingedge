<?php 
include'cuttingdah.php';
$query = mysqli_query($con, "SELECT * from adim where id = 1");
$row = mysqli_fetch_assoc($query);
$query = mysqli_query($con, "SELECT * from users ORDER BY id DESC");
$i = 0;
?>
 <div class="col-3 xs-10 xs-off-2 md-8 md-off-2 side-bar off-10 hidden fade-in" id="admin_edit_info">
 	<div class="col-10 off-1 down-5">
 		<div class="mother down-5"><span class="white Quest">EDIT DETAILS</span> <span class="fl-right white px13" onclick="closeModal('admin_edit_info')"><i class="fas fa-times"></i></span></div>
 	<form method="POST" action="helper.php">
 		<div class="mother down-10 Quest">
 		  <label class="block px13 white">full Name</label>
 		  <div class="email-input-container"><input type="text" name="admin_name" class="white px13"  value="<?php echo$row['name'] ?>"></div>
 		</div>
 		<div class="mother down-10 Quest">
 		  <label class="block px13 white">Gender</label>
 		  <div class="email-input-container"><input type="text" name="admin_gender"  class="white px13" value="<?php echo$row['gender'] ?>"></div>
 		</div>
 		<div class="mother down-10 Quest">
 		  <label class="block px13 white">Email</label>
 		  <div class="email-input-container"><input type="text" name="admin_email"  class="white px13" value="<?php echo$row['email'] ?>"></div>
 		</div>
 		<div class="mother down-5"><input type="submit" class="btn-sm bg-white px13 Quest color-code-1" value="Update" name="edit_admin_details"></div>
 	</form>
 	</div>
 </div>
 <div class="col-10 off-2 xs-12 md-12 down-5 xs-down-15 md-down-10" id="main-window-2">
 	<div class="col-10 off-1 xs-container md-container">
 		<div class="xs-down-5 down-5 md-down-5"><span class="bold color-code-1 Quest"><i class="fas fa-user"></i> Dashboard [<a href="logout.php">Logout</a>]</span></div>
 		<div class="mother down-5 xs-down-10 md-down-5">
 			<div class="card">
 				<div class="container down-2 xs-down-5 md-down-5">
 					<div><span class="color-code-1 px13 Quest bold">Admin Information  <a href="javascript:void(0)" onclick="openModal('admin_edit_info')" class="faded"><i class="fas fa-pen px13"></i></a></span></div>
 			    <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container">
 				    <div class="mother down-5"><span class="color-code-1 px13 Quest">Name</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest"><?php echo$row['name'] ?></span></div>
 				    </div>
 				  </div>
 				  <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container off-1">
 				    	<div class="mother down-5"><span class="color-code-1 px13 Quest">Gender</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest"><?php echo$row['gender'] ?></span></div>
 				    </div>
 				  </div>
 				  <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container">
 				    <div class="mother down-5"><span class="color-code-1 px13 Quest">Email</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest"><?php echo$row['email'] ?></span></div>
 				    </div>
 				  </div>
 				  <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container off-5 md-off-5">
 				    	<div class="mother down-5"><span class="color-code-1 px13 Quest">Post</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest">CEO/Admin</span></div>
 				    </div>
 				  </div>
 			</div>
 		</div>
 		</div>
 		<div class="mother down-5 xs-down-5 xs-bottom-50">
 			<div class="card">
 				<div class="container down-2 xs-down-5 md-down-5">
 					<div><span class="color-code-1 px13 Quest bold">User Activities  <a href="" class="faded"><i class="fas fa-bicycle px13"></i></a></span></div>
 			    <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container">
 				    <div class="mother down-5"><span class="color-code-1 px13 Quest">Mails/requests</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest" id="alert">No Messages</span></div>
 				    </div>
 				  </div>
 				  <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container off-1">
 				    	<div class="mother down-5"><span class="color-code-1 px13 Quest">Queries</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest" id="alertQ">No Queries yet</span></div>
 				    </div>
 				  </div>
 				  <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container">
 				    <div class="mother down-5"><span class="color-code-1 px13 Quest">Blog/news</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest">10 new blogs</span></div>
 				    </div>
 				  </div>
 				  <div class="col-3 xs-12 md-3 xs-down-3 md-down-5">
 				    <div class="ls-container off-3">
 				    	<div class="mother down-5"><span class="color-code-1 px13 Quest">Teachers Report</span></div>
 				    <div class="mother down-3"><span class="faded px13 Quest">No reports yet</span></div>
 				    </div>
 				  </div>
 			</div>
 		</div>
 		</div>
 	</div>
 </div>
 <div class="col-10 off-2 xs-12 md-12 xs-down-10 down-5 md-down-5 bottom-50 hidden" id="main-window-2">
 	<div class="col-10 off-1 md-container down-5 xs-down-10 xs-12">
 		<div class="xs-container hidden-xs"><span class="Quest color-code-1 bold"><i class="fas fa-envelope"></i> Your Inbox</span></div>
 		<div class="mother down-5 xs-down-5 md-down-5">
 		<div class="xs-container hidden-ls"><span class="Quest color-code-1 bold"><i class="fas fa-envelope"></i> Your Inbox</span></div>
 			<?php 
        while ($row = mysqli_fetch_assoc($query)){
        $i++;
 			?>
 			<div class="col-4 xs-down-5 xs-12 down-1">
 				<div class="card">
 					<div class="container down-5 xs-down-5 md-down-5">
 						<div><span class="Quest faded px13"> <span class="bold px13 Quest color-code-1"><?php echo$row['name'] ?> ( <?php echo$row['phone'] ?> )</span></span> <sup id="mails"><span class="red"><?php echo$row['status'] ?></span></sup></div>
 						<div class="col-10 down-3 xs-down-3 md-down-5 hide-content"><span class="faded px13 Quest"><?php echo$row['message'] ?></span></div>
 						<div></div>
 						<div class="mother down-3 xs-down-3 md-down-3"><a href="mail.php?i=<?php echo$row['id'] ?>" class="btn-sm white px13 Quest bg-color-code-1">View</a> <span class="fl-right px13 btn-sm down-1"><a href="javascript:void(0)" onclick="clickBtn('delete')" class="faded"><i class="fas fa-trash"></i></a></span></div>
 						<div class="hidden">
 							<form method="POST" action="helper.php">
 								<input type="" name="delete_id" value="<?php echo$row['id'] ?>">
 								<button id="delete" type="submit" name="delete_mail"></button>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 			<?php } ?>
 		</div>
 	</div>
 </div>
 <div class="col-10 off-2 xs-12 md-12 xs-down-10 down-5 md-down-5 bottom-50 hidden" id="main-window-2">
 	<div class="col-10 off-1 md-container down-5 xs-down-10 xs-12">
 		<div class="xs-container hidden-xs"><span class="Quest color-code-1 bold"><i class="fas fa-envelope"></i> Your Quaries</span></div>
 		<div class="mother down-5 xs-down-5 md-down-5">
 		<div class="xs-container hidden-ls"><span class="Quest color-code-1 bold"><i class="fas fa-envelope"></i> Your Quaries</span></div>
 			<?php 
 			session_start();
        $query = mysqli_query($con, "SELECT * from query ORDER BY id DESC");
        $iq = 0;
        while ($row = mysqli_fetch_assoc($query)){
        $iq++;
        $_SESSION['iq'] = $iq;
 			?>
 			<div class="col-4 xs-down-5 xs-12 down-1">
 				<div class="card">
 					<div class="container down-5 xs-down-5 md-down-5">
 						<div><span class="Quest faded px13"> <span class="bold px13 Quest color-code-1"><?php echo$row['name'] ?> ( <?php echo$row['phone'] ?> )</span></span> <sup id="query"><span class="red"><?php echo$row['status'] ?></span></sup></div>
 						<div class="col-10 down-3 xs-down-3 md-down-5 hide-content"><span class="faded px13 Quest"><?php echo$row['query'] ?></span></div>
 						<div></div>
 						<div class="mother down-3 xs-down-3 md-down-3"><a href="queries.php?i=<?php echo$row['id'] ?>" class="btn-sm white px13 Quest bg-color-code-1">View</a> <span class="fl-right px13 btn-sm down-1"><a href="javascript:void(0)" onclick="clickBtn('<?php echo$row['id']."Btn" ?>')" class="faded"><i class="fas fa-trash"></i></a></span></div>
 						<div class="hidden">
 							<form method="POST" action="helper.php">
 								<input type="text" name="delete_id" value="<?php echo$row['id'] ?>">
 								<button id="<?php echo$row['id']."Btn" ?>" type="submit" name="delete_query"></button>
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