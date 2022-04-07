<?php 
include'cuttingdah.php';
?>
<div class="col-10 off-2 xs-12 md-12 xs-down-10 down-5 md-down-5 bottom-50" id="main-window-2">
	<div class="col-10 off-1 md-container down-5 xs-down-10 xs-12">
		<div class="xs-container hidden-xs"><span class="Quest color-code-1 bold"><i class="fas fa-key"></i> Password Management</span></div>
		<div class=" mother down-3"><span class="faded">Change Password</span></div>
		<div class="col-4 down-3">
			<form method="POST" action="helper.php" class="Quest">
				<div>
					<div><label class="px13 color-code-1">Initial Password</label></div>
					<div class="email-input-container down-1"><input type="Password" name="old" required=""></div>
				</div>
				<div class="down-8">
					<div><label class="px13 color-code-1">New Password</label></div>
					<div class="email-input-container down-1"><input type="Password" name="new" required=""></div>
				</div>
				<div class="down-8">
					<div><label class="px13 color-code-1">re-type Password</label></div>
					<div class="email-input-container down-1"><input type="Password" name="re-new" required=""></div>
				</div>
				<div class="down-5">
					<input type="submit" name="change_password" value="Change Password" class="btn-sm px13 bg-color-code-1 white Quest">
					<?php 
             if (@$_GET['err'] == 'passworddoesnotmatch') {
					?>
          <div class="mother down-1"><span class="px13 red Quest bold">password does not match!</span></div>
          <?php } ?>
          <?php 
             if (@$_GET['err'] == 'invalidOldpassword') {
					?>
          <div class="mother down-1"><span class="px13 red Quest bold">Initial Password Not correct !</span></div>
          <?php } ?>
				</div>
			</form>
		</div>
 </div>
</div>
<script src="js/script.js"></script>