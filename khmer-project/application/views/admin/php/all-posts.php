 <div class="rightside">
	<div class="page-head">
        <h1>All Posts  <small></small></h1>
        	<ol class="breadcrumb">
				<li>You are here:</li>
                <li><a href="dashboard.php?p=home">Dashboard</a></li>
                <li class="dashboard.php?p=all-user">All Posts</li>
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
							  	  <th>ID</th>
								  <th>Title</th>
								  <th>Content</th>
								  <th>Date</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
					      <tbody>
					      	<?php
								foreach($result as $row){
									$post_id = $row->post_id;
									$post_title = $row->post_title;
									$post_content = $row->post_content;
									$post_created = $row->post_created;
							?>					      	
						      <tr>
								   <td><?=html_escape($post_id)?></td>
								   <td><?=html_escape($post_title)?></td>
								   <td style="width:100px;"><?=html_escape($post_content)?></td>
								   <td><?=html_escape($post_created)?></td>
								   <td>
										<span class="label label-success">Active</span>
									</td>
									<td>
										<a class="btn btn-success btn-sm" href="table.php#">
									  		<i class="fa fa-search-plus "></i>  
										</a>
										<a class="btn btn-info btn-sm" href="table.php#">
											<i class="fa fa-edit "></i>  
										</a>
										<a class="btn btn-danger btn-sm" href="table.php#">
											<i class="fa fa-trash-o "></i> 
										</a>
									</td>
								</tr>
								<?php
									}
								?>
									  </tbody>
                                <!-- /.box-body -->
                            <!-- /.box -->
                        
                    
            
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
    
		</table>
		</div>
		</div>
		</div>
		</div>       
</div>
</div>
</div>