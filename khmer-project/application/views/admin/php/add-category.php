<div class="rightside">
<div class="page-head">
                    <h1>Add categories  <small></small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li><a href="dashboard.php?p=home">Dashboard</a></li>
                        <li class="dashboard.php?p=all-user">Add categories </li>
                    </ol>
</div>

<div class="content">
      <div class="col-md-12">
            <div class="box">
                  <div class="box-title">
                      <h3>Form Category</h3>
                   </div>
                   <div class="box-body">
							<form action="<?php echo site_url()?>/category/add_category" class="form-horizontal" role="form" method="post">			
									<!-- Text input -->
									<div class="form-group">
										<label for="input-text" class="col-sm-2 control-label">Category</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" name="category_name" id="category_name">
										</div>
									</div>
																								
									<div class="form-group">
										<label class="col-sm-2 control-label">										
										<input type="submit" name="add_category" class="btn btn-primary" value="Save"/>
									</div>
									
					</form>
              </div>
		</div>
	</div>              
 </div>
 </div>              
 </div>