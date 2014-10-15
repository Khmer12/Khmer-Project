<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Inbox</title>
		
		<!-- Maniac stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/animate/animate.min.css" />
        <link rel="stylesheet" href="css/iCheck/all.css" />
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
                                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
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
                        <li class="active">
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
                        <li class="sub-nav">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="basic-tables.php">Basic tables</a></li>
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
                    <h1>Mailbox  <small>your private messages</small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li class="active">Mailbox</li>
                    </ol>
                </div>

                <div class="content">
                    <!-- Main row -->
                    <div class="mailbox row">
						<div class="col-lg-12"> 
							<div class="box">
                                <div class="box-title">
                                    <i class="fa fa-inbox"></i>
                                    <h3>Inbox</h3>
                                    <div class="pull-right box-toolbar">
                                        <a href="#" class="btn btn-link btn-xs"><i class="fa fa-cog"></i></a>
                                        <a href="#" class="btn btn-link btn-xs remove-box"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="box-body"> 
                                  <div class="row">
                                        <div class="col-md-3 col-sm-4">
											<ul class="nav nav-pills nav-stacked">
												<li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label pull-right">15</span></a></li>
                                                <li><a href="#"><i class="fa fa-envelope"></i> Sent mail</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Draft <span class="label label-danger pull-right">4</span></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i> Important</a></li>
                                                <li><a href="#"><i class="fa fa-folder"></i> Spam</a></li>
                                            </ul>
											
											<div class="mailbox-buttons">
												<div class="btn-group">
													<button type="button" class="btn btn-primary no-radius dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-paper-plane"></i></button>
													<ul class="dropdown-menu">
														<li><a href="#">Mark as read</a></li>
														<li><a href="#">Mark as unread</a></li>
														<li><a href="#">Delete</a></li>
													</ul>
												</div>
												<button type="button" class="btn btn-success no-radius"><i class="fa fa-plus"></i></button>
												<button type="button" class="btn btn-danger no-radius"><i class="fa fa-trash-o"></i></button>
											</div>
											
											<div class="box-bordered clearfix">
												<input type="text" class="form-control" placeholder="To" />
												<input type="text" class="form-control" placeholder="Email" />
												<textarea class="form-control" placeholder="Message" rows="8"></textarea>
												<button type="submit" class="btn btn-danger no-radius pull-left">Reset</button>
												<button type="submit" class="btn btn-success no-radius pull-right">Send</button>
											</div>
                                        </div>
                                        <div class="col-md-9 col-sm-8">
										
											<div class="mailbox-tools clearfix">
												<div class="pull-left">
													<div class="btn-group">
														<button type="button" class="btn btn-info no-radius dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-paper-plane"></i></button>
														<ul class="dropdown-menu">
															<li><a href="#">Mark as read</a></li>
															<li><a href="#">Mark as unread</a></li>
															<li><a href="#">Delete</a></li>
														</ul>
													</div>
													<button type="button" class="btn btn-success no-radius"><i class="fa fa-plus"></i></button>
													<button type="button" class="btn btn-danger no-radius"><i class="fa fa-trash-o"></i></button>
												</div>
												
												<div class="pull-right">
													<button class="btn btn-success"><i class="fa fa-caret-left"></i></button>
													<button class="btn btn-success"><i class="fa fa-caret-right"></i></button>
												</div>
											</div>
											
                                            <div class="table-responsive scroll">
                                                <table class="table table-hover">
                                                    <tr class="unread">
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star"></i></td>
                                                        <td class="name">Jean Doe</td>
                                                        <td class="subject"><a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                        <td class="time"><i class="fa fa-paperclip"></i> 11:00 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jeremy Doe</td>
                                                        <td class="subject"><a href="#">Morbi nec nunc condimentum, egestas </a></td>
                                                        <td class="time">10:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jill Doe</td>
                                                        <td class="subject"><a href="#">uis non malesuada est, quis congue nibh</a></td>
                                                        <td class="time">10:13 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">Jeremy Doe</a></td>
                                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet</a></td>
                                                        <td class="time">07:34 AM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star"></i></td>
                                                        <td class="name">Jean Doe</td>
                                                        <td class="subject"><a href="#">Is non malesuada est</a></td>
                                                        <td class="time">10:31 AM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star"></i></td>
                                                        <td class="name">Jill Doe</td>
                                                        <td class="subject"><a href="#">Morbi nec nunc condimentum...</a></td>
                                                        <td class="time">11:50 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jeremy Doe</td>
                                                        <td class="subject"><a href="#">Morbi nec nunc condimentum, egestas </a></td>
                                                        <td class="time">10:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jill Doe</td>
                                                        <td class="subject"><a href="#">uis non malesuada est, quis congue nibh</a></td>
                                                        <td class="time">10:13 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jeremy Doe</td>
                                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet</a></td>
                                                        <td class="time">07:34 AM</td>
                                                    </tr>
													 <tr class="unread">
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jeremy Doe</td>
                                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet</a></td>
                                                        <td class="time">07:34 AM</td>
                                                    </tr>  <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jeremy Doe</td>
                                                        <td class="subject"><a href="#">Morbi nec nunc condimentum, egestas </a></td>
                                                        <td class="time">10:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jill Doe</td>
                                                        <td class="subject"><a href="#">uis non malesuada est, quis congue nibh</a></td>
                                                        <td class="time">10:13 AM</td>
                                                    </tr>
													 <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jeremy Doe</td>
                                                        <td class="subject"><a href="#">Morbi nec nunc condimentum, egestas </a></td>
                                                        <td class="time">10:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jill Doe</td>
                                                        <td class="subject"><a href="#">uis non malesuada est, quis congue nibh</a></td>
                                                        <td class="time">10:13 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small"><input type="checkbox" /></td>
                                                        <td class="small"><i class="fa fa-star-o"></i></td>
                                                        <td class="name">Jeremy Doe</td>
                                                        <td class="subject"><a href="#">Lorem ipsum dolor sit amet</a></td>
                                                        <td class="time">07:34 AM</td>
                                                    </tr>
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                </div>
								<div class="box-footer">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search message..."/>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>	
					</div>
                </div>
            </div>
        </div><!-- /.wrapper -->
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Lorem ipsum dolor sit</h4>
			  </div>
			  <div class="modal-body">
				<div class="mailbox-info clearfix">
					<div class="pull-left from"><span>From:</span> <a href="#">Jean Doe</a></div>
					<div class="pull-right"><span class="label"><i class="fa fa-clock-o"></i> 30 mins</span></div>
				</div>
				<img src="img/avatar2.jpg" class="mailbox-avatar pull-left" />
				<p class="mailbox-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut luctus sem turpis, sit amet scelerisque erat molestie at. Praesent auctor venenatis molestie. Nulla facilisi. Donec ipsum libero, consequat nec adipiscing sed, facilisis vitae sem. Pellentesque rhoncus interdum tempor. Nunc scelerisque facilisis leo. Suspendisse potenti. Aliquam lectus tortor, pharetra sed placerat ut, interdum vel lectus. Phasellus sem dui, molestie sit amet consectetur in, interdum a lorem. Aenean sit amet ligula rutrum, venenatis mauris tempor, sagittis nunc.
				</p> 
				<p class="mailbox-text">
					Suspendisse vitae nunc risus. Praesent vulputate ante ut leo tempus, a cursus purus pharetra. Quisque faucibus mi eget nunc placerat, pharetra accumsan nisi placerat. Praesent porttitor metus id eros fermentum, eu placerat dui mollis. Aliquam erat volutpat. Suspendisse scelerisque felis quis est posuere, a tempus nibh egestas. Sed fermentum vehicula ligula at volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla consequat vel sapien eu condimentum. 
				</p>
				<p class="mailbox-text">	
					Vestibulum molestie elit quis lorem consectetur, porta euismod augue mollis. Sed sed tempor quam. Pellentesque ac eros sapien. Suspendisse id rhoncus velit. Donec nisi odio, accumsan ut luctus in, viverra blandit est. Morbi dapibus dapibus leo id blandit. 
				</p> 
				<div class="mailbox-attachment">
					<button class="btn btn-info"><i class="fa fa-download"></i> Download Attachment</button>
					<small>File Size: 12 MB | <i class="fa fa-clock-o"></i> 03.08.2014 - 4:00 AM</small>
				</div>
			 </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close <i class="fa fa-times"></i></button>
				<button type="button" class="btn btn-success pull-left"><i class="fa fa-reply"></i> Reply</button>
			  </div>
			</div>
		  </div>
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
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
		
		<!-- Inbox -->
        <script type="text/javascript">
		$(function() {
			//iCheck
			$("input[type='checkbox'], input[type='radio']").iCheck({
				checkboxClass: 'icheckbox_minimal',
				radioClass: 'iradio_minimal'
			});
			
			// box scroll
			$('.scroll').slimScroll({
				height: '600px'
			}); 
		});
		</script>
    </body>
</html>