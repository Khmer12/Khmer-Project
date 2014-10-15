<div class="rightside">
	<div class="page-head">
	                    <h1>All Categories  <small></small></h1>
	                    <ol class="breadcrumb">
							<li>You are here:</li>
	                        <li><a href="dashboard.php?p=home">Dashboard</a></li>
	                        <li class="dashboard.php?p=all-user">All categories</li>
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
											  	  <th>Category ID</th>
												  <th>Category Name</th>
												  <th>Action</th>
											  </tr>
										  </thead>   
										  <tbody>
										 <?php
										  	 if($result){
										  	 	foreach ($result as $row){
										  	?>
											<tr>
												<td><?=$row->Category_ID ?></td>
												<td><?=$row->Category_Name?></td>
												<td>
												<form action="<?=site_url()?>/admin/page_edit_category?category_id=<?=$row->Category_ID ?>" method="post">
													<input class="btn btn-success" type="submit" name="" value="Edit"/>
												</form>												
												</td>
											</tr>
											<?php 
												}
												}
											?> 
											
	                              
	        <!-- /.wrapper -->
			
			
	        <!-- Javascript -->
	        <script src="js/plugins/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
	        <script src="js/plugins/jquery-ui/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
			
			<!-- Bootstrap -->
	        <script src="js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
			
			<!-- Interface -->
	        <script src="js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	        <script src="js/plugins/pace/pace.min.js" type="text/javascript"></script>
			
			<!-- Forms -->
	       <script src="js/custom.js" type="text/javascript"></script>
	    
			</table></div></div></div></div>       
	</div>
	</div>
	</div>