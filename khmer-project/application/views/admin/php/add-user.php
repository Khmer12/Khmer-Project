<div class="rightside">
<div class="page-head">
                    <h1>Form add users  <small></small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li><a href="dashboard.php?p=home">Dashboard</a></li>
                        <li class="dashboard.php?p=all-user">Add user</li>
                    </ol>
</div>
<div class="content">
      <div class="col-md-12">
            <div class="box">
                  <div class="box-title">
                      <h3>Form Register</h3>
                   </div>
                   <div class="box-body">
                   <h3>Form Add New User</h3>
							<form action="<?php echo site_url()?>/authentication/add_user" method="post" class="form-horizontal" role="form">								
									<!-- Text input -->
									<div class="form-group">
										<label for="input-text" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
										<input type="text" name="user_name" class="form-control" id="input-text">
										</div>
									</div>
									
									<!-- Input password -->
									<div class="form-group">
										<label for="inputPassword" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										<input type="password" name="user_password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
									
									<!-- Confirm password -->
									<div class="form-group">
										<label for="inputPassword" class="col-sm-2 control-label">Confirm password</label>
										<div class="col-sm-10">
										<input type="password" name="user_confirm_password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-2 control-label">
										<input type="submit" value="Register" name="add_user" class="btn btn-primary"></label>
									</div>
								
					</form>
              </div>
		</div>
	</div>              
 </div>
 </div>              
 </div>