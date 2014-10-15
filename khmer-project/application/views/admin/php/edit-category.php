<div class="page-head">
                    <h1>Edit categories  <small></small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li><a href="dashboard.php?p=home">Dashboard</a></li>
                        <li class="dashboard.php?p=all-user">Edit categories </li>
                    </ol>
</div>

<div class="content">
      <div class="col-md-12">
            <div class="box">
                  <div class="box-title">
                      <h3>Edit Category</h3>
                   </div>
                   <div class="box-body">
                   			<?php
                   				 if($result){
                   				 	foreach ($result as $row){
										$category_id=$row->Category_ID;
                   			?> 		
							<form action="<?php echo site_url()?>/category/update_category?category_id=<?=$category_id?>" class="form-horizontal" role="form">			
									<!-- Text input -->
									<div class="form-group">
										<label for="input-text" class="col-sm-2 control-label">Category</label>
										<div class="col-sm-10">
										<input type="text" value="<?=$row->Category_Name?>" class="form-control" id="input-text">
										</div>
									</div>
															
									<div class="form-group">
										<label class="col-sm-2 control-label">										
										<input type="submit" name="update_category" class="btn btn-primary" value="Update"/>
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