<div class="rightside">
<div class="page-head">
                    <h1>All users  <small></small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li><a href="<?php echo base_url()?>/dashboard.php?p=home">Dashboard</a></li>
                        <li class="dashboard.php?p=all-user">All user</li>
                    </ol>
</div>

<div class="content">
             <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Table User</h3>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                     <table class="table table-hover table-striped">
									  <thead>
										  <tr>
										  	  <th>User ID</th>
											  <th>User Name</th>
											  <th>User Password</th>
											  <th>Status</th>
											  <th>Actions</th>
										  </tr>
									  </thead>   
									  <tbody>
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
														<button class="btn btn-primary" type="submit" value="1" class="enable_disable">Enable</button>
													</form>						
												<?php 	 	
													 } else{
												?>
													<form action="<?=site_url()?>/authentication/enable_disable_user?status=0&user_id=<?=$user_id?>" method="post">
														<button class="btn btn-danger" type="submit" value="1" class="enable_disable">Disable</button>
													</form>
												<?php	
													 }
												?> 											</td>
											<td>
												<form action="<?=site_url()?>/admin/page_edit_user?user_id=<?=$user_id?>" method="post">
													<button class="btn btn-success" type="submit" value="1" class="enable_disable">Edit</button>
												</form>
											</td>
										</tr>
									  <?php 
									  		}
									  	} 
									  ?>													
        <!-- /.wrapper -->
        <!-- Javascript -->
      
		</table></div></div></div></div>       
</div>
</div>
</div>