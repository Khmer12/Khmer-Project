<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Basic Table</title>
		
		<!-- Maniac stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/animate/animate.min.css" />
        <link rel="stylesheet" href="css/style.css" />
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body class="fixed">
        <!-- Header -->
        <header>
			<a href="index-2.php" class="logo"><i class="fa fa-bolt"></i> <span>Maniac</span></a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="navbar-btn sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
				<div class="navbar-header">
                    <form role="search" class="navbar-form" method="post" action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type="submit" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
				</div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-notifications">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i><span class="label label-warning">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-bell"></i>  You have 5 new notifications</li>
                                <li>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-users success"></i> New user registered</a></li>
                                        <li><a href="#"><i class="fa fa-heart info"></i> Jane liked your post</a></li>
                                        <li><a href="#"><i class="fa fa-envelope warning"></i> You got a message from Jean</a></li>
										<li><a href="#"><i class="fa fa-info success"></i> Privacy settings have been changed</a></li>
										<li><a href="#"><i class="fa fa-comments danger"></i> New comments waiting approval</a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all notification</a></li>
                            </ul>
                        </li>
						
                        <li class="dropdown dropdown-messages">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i><span class="label label-success">6</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-envelope"></i> You have 6 messages</li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left"><img src="img/avatar2.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>Jill Doe<small><i class="fa fa-clock-o"></i> 1 mins</small></h4>
                                                <p>Can we meet somewhere?</p>
                                            </a>
                                        </li>
										
                                        <li>
                                            <a href="#">
                                                <div class="pull-left"><img src="img/avatar.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>John Doe<small><i class="fa fa-clock-o"></i> 2 mins</small></h4>
                                                <p>Please send me a new email.</p>
                                            </a>
                                        </li>
										
										<li>
                                            <a href="#">
                                                <div class="pull-left"><img src="img/avatar3.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>Jeremy Doe<small><i class="fa fa-clock-o"></i> 30 mins</small></h4>
                                                <p>Don't forget to subscribe to...</p>
                                            </a>
                                        </li>
										
										<li>
                                            <a href="#">
                                                <div class="pull-left"><img src="img/avatar4.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>Jean Doe<small><i class="fa fa-clock-o"></i> 2 hours</small></h4>
                                                <p>I sent you a mail about me.</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all messages</a></li>
                            </ul>
                        </li>
						
                        <li class="dropdown dropdown-tasks">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i><span class="label label-danger">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-tasks"></i>  You have 1 new task</li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <h3>PHP Developing<small class="pull-right">32%</small></h3>
                                                <div class="progress">
													<div class="progress-bar progress-bar-success" style="width: 32%" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>Database Repair<small class="pull-right">14%</small></h3>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" style="width: 14%" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>Backup Create<small class="pull-right">65%</small></h3>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 65%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>Create New Modules<small class="pull-right">80%</small></h3>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
						
                        <li class="dropdown widget-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="img/avatar.jpg" class="pull-left" alt="image" />
                                <span>John Doe <i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul class="dropdown-menu">
								<li>
									<a href="#"><i class="fa fa-cog"></i>Settings</a>
								</li>
								<li>
									<a href="profile.php"><i class="fa fa-user"></i>Profile</a>
								</li>
								<li class="footer">
									<a href="#"><i class="fa fa-power-off"></i>Logout</a>
								</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
		<!-- /.header -->
		 
		<!-- wrapper -->
        <div class="wrapper">
            <div class="leftside">
                <div class="sidebar">
                    <div class="user-box">
                        <div class="avatar">
                            <img src="img/avatar.jpg" alt="" />
                        </div>
                        <div class="details">
                            <p>John Doe</p>
                            <span class="position">Superadmin</span>
                        </div>
						<div class="button">
							<a href="login.php"><i class="fa fa-power-off"></i></a>
						</div>
                    </div>
                    <ul class="sidebar-menu">
						<li class="title">Navigation</li>
                        <li>
                            <a href="index-2.php">
                                <i class="fa fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.php">
                                <i class="fa fa-envelope"></i> <span>Inbox</span>
                                <small class="label pull-right">10</small>
                            </a>
                        </li>
                        <li class="sub-nav">
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="icons.php">Icons</a></li>
                                <li><a href="buttons.php">Buttons</a></li>
                                <li><a href="sliders.php">Sliders</a></li>
                            </ul>
                        </li>
                        <li class="sub-nav">
                            <a href="#">
                                <i class="fa fa-pencil"></i> <span>Forms</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.php">Form Elements</a></li>
                                <li><a href="form-validation.php">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="active sub-nav">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li class="active"><a href="basic-tables.php">Basic tables</a></li>
                                <li><a href="data-tables.php">Data tables</a></li>
                            </ul>
                        </li>
						<li class="sub-nav">
                            <a href="#">
                                <i class="fa fa-signal"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="flot.php">Flot</a></li>
                                <li><a href="morris.php">Morris</a></li>
                            </ul>
                        </li>
						 <li>
                            <a href="widgets.php">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label label-success pull-right">new</small>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                            </a>
                        </li>
                        <li class="sub-nav">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Other Pages</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="404.php">404 Error</a></li>
                                <li><a href="blank.php">Blank Page</a></li>
                                <li><a href="invoice.php">Invoice</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="lockscreen.php">Lockscreen</a></li>
                                <li><a href="timeline.php">Timeline</a></li>
                            </ul>
                        </li>
                    </ul>
					<div class="sidebar-widget online-users">&nbsp;
						<div class="body">
							<div class="title">Online Admins <a href="#" class="pull-right"><i class="fa fa-cog"></i></a></div>
							
							<a href="#" class="full-width">
								<div class="img online pull-left"><img src="img/avatar2.jpg" alt="User" /></div>
								<div class="info pull-left">
									<div class="name">Jill Doe</div>
									<div class="status">News Writer</div>
								</div>
								<div class="pull-right activity">
									<i class="fa fa-clock-o"></i> now
								</div>
							</a>
							
							<a href="#" class="full-width">
								<div class="img away pull-left"><img src="img/avatar3.jpg" alt="User" /></div>
								<div class="info pull-left">
									<div class="name">Jeremy Doe</div>
									<div class="status">Moderator</div>
								</div>
								<div class="pull-right activity">
									<i class="fa fa-clock-o"></i> 5 m
								</div>
							</a>
							
							<a href="#" class="full-width">
								<div class="img inactive pull-left"><img src="img/avatar2.jpg" alt="User" /></div>
								<div class="info pull-left">
									<div class="name">Jill Doe</div>
									<div class="status">Uploader</div>
								</div>
								<div class="pull-right activity">
									<i class="fa fa-clock-o"></i> 1 h
								</div>
							</a>
							
							<a href="#" class="full-width">
								<div class="img online pull-left"><img src="img/avatar4.jpg" alt="User" /></div>
								<div class="info pull-left">
									<div class="name">Jean Doe</div>
									<div class="status">News Writer</div>
								</div>
								<div class="pull-right activity">
									<i class="fa fa-clock-o"></i> now
								</div>
							</a>
							
							
							
							<div class="footer">
								<div class="input-group">
									<input type="text" class="form-control" Placeholder="Search..." />
									<div class="input-group-btn">
                                         <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				 </div>
            </div>

            <div class="rightside">
                <div class="page-head">
                    <h1>Basic Tables  <small>small text goes here</small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li>Tables</li>
                        <li class="active">Basic Tables</li>
                    </ol>
                </div>

                <div class="content">
                <!-- Main row -->
				<div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Basic Table</h3>
                                </div><!-- /.box-title -->
                                <div class="box-body">
                                    <table class="table">
										<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
										</tbody>
									</table>
                                </div>
                            </div><!-- /.box -->

                            <div class="box">
                                <div class="box-title">
                                    <h3>Striped Table</h3>
                                </div><!-- /.box-title -->
                                <div class="box-body">
                                   <table class="table table-striped">
									  <thead>
										  <tr>
											  <th>Username</th>
											  <th>Date registered</th>
											  <th>Role</th>
											  <th>Status</th>
											  <th>Actions</th>
										  </tr>
									  </thead>   
									  <tbody>
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
											<td>
												<span class="label label-warning">Pending</span>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
											<td>
												<span class="label label-warning">Pending</span>
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
									  </tbody>
								  </table>            
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col -->
						
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Hover Table</h3>
                                </div>
                                <div class="box-body">
									<table class="table table-hover">
											<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>1</td>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
											</tr>
											</tbody>
									</table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

							<div class="box">
                                <div class="box-title">
                                    <h3>Bordered Table</h3>
                                </div><!-- /.box-title -->
                                <div class="box-body">
                                   <table class="table table-bordered">
									  <thead>
										  <tr>
											  <th>Username</th>
											  <th>Date registered</th>
											  <th>Role</th>
											  <th>Status</th>
											  <th>Actions</th>
										  </tr>
									  </thead>   
									  <tbody>
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
											<td>
												<span class="label label-warning">Pending</span>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
											<td>
												<span class="label label-warning">Pending</span>
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
									  </tbody>
								  </table>            
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Responsive Table</h3>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                     <table class="table table-hover table-striped">
									  <thead>
										  <tr>
											  <th>Username</th>
											  <th>Date registered</th>
											  <th>Role</th>
											  <th>Status</th>
											  <th>Actions</th>
										  </tr>
									  </thead>   
									  <tbody>
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
											<td>
												<span class="label label-warning">Pending</span>
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
										<tr>
											<td>John Doe</td>
											<td>2014/06/16</td>
											<td>Member</td>
											<td>
												<span class="label label-warning">Pending</span>
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
									  </tbody>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
            </div>
        </div><!-- /.wrapper -->
		</div>
		
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
    </body>
</html>