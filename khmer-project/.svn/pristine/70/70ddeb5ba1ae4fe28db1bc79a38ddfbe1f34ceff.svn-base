<div class="page-head">
                    <h1>Form edit users  <small></small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li><a href="dashboard.php?p=home">Dashboard</a></li>
                        <li class="dashboard.php?p=all-user">edit user</li>
                    </ol>
</div>
<div>
</div>

<div class="content">
      <div class="col-md-12">
            <div class="box">
                  <div class="box-title">
                      <h3>Form Edit</h3>
                   </div>
                   <div class="box-body">
                   <h3>Form Edit User</h3>
                  				 <?php
										 if($result){
										 	foreach ($result as $row){						 		
									?>
							<form action="<?php echo site_url()?>/authentication/update_user_account?user_id=<?php echo $row->User_ID?>" method="post" class="form-horizontal" role="form">								
									<!-- Text input -->
									<div class="form-group">
										<label for="input-text" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
										<input type="text" name="user_name" value="<?php echo $row->User_Name;?>" class="form-control" id="input-text">
										</div>
									</div>
									
									<!-- Input password -->
									<div class="form-group">
										<label for="inputPassword" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										<input type="password" name="user_password" value="<?php echo $row->User_Password;?>" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
								
																								
									<div class="form-group">
										<label class="col-sm-2 control-label">
										<input type="submit" value="Update" name="update_user" class="btn btn-primary"></label>
									</div>
								
					</form>
					<?php
									}
									}
								?>
              </div>
		</div>
	</div>              
 </div>