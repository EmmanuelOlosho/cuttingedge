<?php 
 include 'cuttingdah.php';
 include 'db.php'; 
 ?>
 <div class="col-10 off-2 xs-10 xs-off-1 md-12 xs-down-15 down-5 md-down-5 bottom-50" id="main-window-2">
 	<div class="col-10 off-1 md-container xs-down-10">
 		<div class="col-4 down-5">
 			<div><span class="color-code-1 bold">Add New Blog [<a href="blog.php" class="faded px13">View blog</a>]</span></div>
 			<form method="POST" action="helper.php" class="down-5">
 				<div class=""><label class="px13">News Title:</label></div>
 				<div class="email-input-container"><input type="text" placeholder="add title here" required="" name="title"></div>
 				<div class="mother down-5">
 					<div class=""><label class="px13">News Content:</label></div>
 					<div><textarea class="bg-faded" name="content" placeholder="add contents here" required=""></textarea></div>
 				</div>
 				<div class="mother down-5">
 					<button class="btn-sm bg-color-code-1 px13 white" type="submit" name="post_blog"><i class="fas fa-paper-plane"></i> Post</button>
 				</div>
 			</form>
 		</div>
 		<div class="mother down-5 xs-down-10 bottom-50">
 			<div><span class="color-code-1 bold">Your Blogs</span></div>
 			<div class="col-10 down-1">
 				<div class="table">
 					<div class="bg-color-code-1">
 						<span class="header">s/n</span>
 						<span class="header">Tite</span>
 						<span class="header">Content</span>
 						<span class="header">Images</span>
 						<span class="header">Date</span>
 						<span class="header">edit</span>
 						<span class="header">delete</span>
 					</div>
 					<?php 	
           $query = mysqli_query($con, "SELECT * from blog order by id desc");
           $i = 0;
           while($row = mysqli_fetch_assoc($query)){
           	$i++;
 					 ?>
 					 <div class="iii">
 					 	<span class="td"><?php 	echo$i ?></span>
 					 	<span class="td"><?php 	echo$row['title'] ?></span>
 					 	<span class="td" contenteditable=""><?php 	echo$row['content'] ?></span>
 					 	<span class="td">1</span>
 					 	<span class="td"><?php 	echo$row['trn'] ?></span>
 					 	<span class="td" ><a onclick="openModal('<?php echo$row['id'] ?>')" class="faded"><i class="fas fa-pen"></i></a></span>
 					 	<span class="td" ><a onclick="openModal('d-<?php echo$row['id'] ?>')" class="faded"><i class="fas fa-trash"></i></a></span>
 					 <div class="edit-blog fade-in" id="<?php echo$row['id']?>" hidden>
 					 	<div class="col-6 off-4 down-10 bg-color-code-1 bottom-50">
 					 	<div class="col-10 off-1 right down-5"><span onclick="closeModal('<?php echo$row['id'] ?>')"><i class="fas fa-times white px15"></i></span></div>
 					 		<div class="container">
 					 			<form method="POST" action="helper.php" class="col-6 off-3">
 					 				<input type="text" name="edi_id" hidden="" value="<?php echo$row['id'] ?>">
 					 				<div class="mother down-5">
 					 					<div class=""><label class="px13 white">News Title:</label></div>
 					 					<div class="email-input-container"><input type="text" placeholder="add title here" required=""  class="white" value="<?php 	echo$row['title'] ?>" name="edi_title"></div>
 					 					<div class="mother down-5">
 					 						<div class=""><label class="px13 white">News Content:</label></div>
 					 						<div><textarea class="bg-faded" name="edi_content" placeholder="add contents here" required=""><?php echo$row['content'] ?></textarea></div>
 					 					</div>
 					 					<div class="mother down-5">
 					 						<button class="btn-sm bg-color-code-1 px13 white" type="submit" name="edit_blog"><i class="fas fa-paper-plane"></i> Edit</button>
 					 					</div>
 					 				</div>
 					 			</form>
 					 		</div>
 					 	</div>
 					 </div>
 					 <div class="edit-blog fade-in" id="d-<?php echo$row['id'] ?>" hidden>
 					 	 <div class="col-4 off-4 down-15 centered">
 					 	 	<div class="mother right down-5"><span onclick="closeModal('d-<?php echo$row['id'] ?>')"><i class="fas fa-times white px15"></i></span></div>
 					 	 	<div><a href="javascript:void(0)" onclick="clickBtn('delete-<?php echo$row['id'] ?>')"><i class="fas fa-trash white px20"></i></a></div>
 					 	 	<div><span class="px13 white">delete "<?php echo$row['title'] ?>" ?</span></div>
 					 	 </div>
 					 </div>
 					 <div class="hidden">
 					 	<form method="POST" action="helper.php">
 					 		<input type="text" name="edit_id" value="<?php echo$row['id'] ?>">
 					 		<input type="submit" name="delete_blog" id="delete-<?php echo$row['id'] ?>">
 					 	</form>
 					 </div>
 				 </div>
 					<?php 	} ?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <script src="js/script.js"></script>