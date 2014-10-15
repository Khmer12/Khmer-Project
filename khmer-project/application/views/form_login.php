<?php
	$user_id=0;
?>
<html>
	<head>
		<title>
			
		</title>
		<script type="text/javascript" src="js/jquery_ui/jquery.js"></script>
		<script type="text/javascript" src="js/jquery_ui/jquery-ui.js"></script>
	</head>
	<body>
			<h3>List User Account</h3>		
			<table>
				<tr>
					<th>User ID</th>
					<th>User Name</th>
					<th>User Password</th>
					<th>Status</th>
					<th></th>
				</tr>
					<?php
					if($result){
						foreach ($result as $row){
						$user_id=$row->User_ID;
						$status=$row->Status;
				?>
				<tr>
					<td><?=$user_id?></td>
					<td><?=$row->User_Name?></td>
					<td><?=$row->User_Password?></td>
					<td>
						<?php
							 if($status==1){
						?>
							<form action="<?=site_url()?>/authentication/enable_disable_user?status=1&user_id=<?=$user_id?>" method="post">
								<button type="submit" value="1" class="enable_disable">Enable</button>
							</form>
							
						<?php 	 	
							 } else{
						?>
							<form action="<?=site_url()?>/authentication/enable_disable_user?status=0&user_id=<?=$user_id?>" method="post">
								<button type="submit" value="1" class="enable_disable">Disable</button>
							</form>
						<?php	
							 }
						?>
					</td>	
					
				</tr>
				
				<?php 
						}
					}else{
						echo "nothing";
					}
					
				?>
			</table>
			<br><br><br>
			<h3>Login Form</h3>
			<form action="<?php echo site_url()?>/authentication/login_user_account" method="post">
				Username : <input type="text"  name="username" placeholder="username"/>
				Password : <input type="password" name="password" placeholder="password"/>
						<input type="submit" name="login_user" value="Log In"/>
			</form> 
			<br/><br/>
			<h3>Form Add New User</h3>
			<form action="<?php echo site_url()?>/authentication/add_user" method="post">
				Username : <input type="text"  name="user_name" placeholder="username"/>
				Password : <input type="password" name="user_password" placeholder="password"/>
						<input type="submit" name="add_user" value="Save"/>
			</form> 
			<br/><br/>
			
			<h3>Form Edit User</h3>
			<form action="<?php echo site_url()?>/authentication/update_user_account" method="post">
				User ID  : <input type="text" name="user_id"/>
				Username : <input type="text"  name="username" placeholder="username"/>
				Password : <input type="password" name="password" placeholder="password"/>
						<input type="submit" name="update_user" value="Update"/>
			</form> 
			<h3>Add Category</h3>
			<a href="<?=site_url()?>/category/load_form_add_category">form add category</a>
			<div>
				 <script type="text/javascript">
				 	$(document).ready(function(){
				 		
					 				 		
					 	});
				 	function change_enable_disable($user_id){				 		 		
				 			$data=$(".enable_disable").val();				 			
						 	enable_disable($data,$user_id);
					 	}
				 	function enable_disable($status,$user_id){ 
					    window.location.href="<?=site_url()?>/authentication/enable_disable_user?status="+$status+"&user_id="+$user_id+"";
					 }
				 </script>
			</div>
	</body>
</html>