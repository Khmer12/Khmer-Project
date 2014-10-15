<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Widgets</title>
		
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
						 <li class="active">
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
                    <h1>Widgets <small>small text goes here</small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li class="active">Widgets</li>
                    </ol>
                </div>

                <div class="content">
					<!-- Main row -->
					<div class="row">
						<div class="col-md-12">
							<h4 class="page-header">
								Custom Boxes
							</h4>
						</div>	
					</div><!-- /.row -->
					<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="custom-box palette-alizarin">
                                <h3>155</h3>
                                <p>Registered users</p>
                                <i class="fa fa-users"></i>
							</div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="custom-box palette-nephritis">
                                <h3>135</h3>
                                <p>Daily Visitors</p>
								<i class="fa fa-signal"></i>
							</div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="custom-box palette-peter-river">
                                <h3>17</h3>
                                <p>Messages</p>
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="custom-box palette-wet-asphalt">
                                <h3>45</h3>
                                <p>Subscribers</p>
                                <i class="fa fa-rss"></i>
                            </div>
                        </div>
					</div><!-- /.row -->
					<div class="row">
						<div class="col-md-12">
							<h4 class="page-header">
								Palette Colors
							</h4>
							<div class="pallete-item">
								  <dl class="palette palette-turquoise">
								<dt>#1abc9c</dt>
								<dd>Turquoise</dd>
							  </dl>
							  <dl class="palette palette-green-sea">
								<dt>#16a085</dt>
								<dd>Green sea</dd>
							  </dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-emerald">
							  <dt>#2ecc71</dt>
							  <dd>Emerald</dd>
							</dl>
							<dl class="palette palette-nephritis">
							  <dt>#27ae60</dt>
							  <dd>Nephritis</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-peter-river">
							  <dt>#3498db</dt>
							  <dd>Peter river</dd>
							</dl>
							<dl class="palette palette-belize-hole">
							  <dt>#2980b9</dt>
							  <dd>Belize hole</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-amethyst">
							  <dt>#9b59b6</dt>
							  <dd>Amethyst</dd>
							</dl>
							<dl class="palette palette-wisteria">
							  <dt>#8e44ad</dt>
							  <dd>Wisteria</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-wet-asphalt">
							  <dt>#34495e</dt>
							  <dd>Wet asphalt</dd>
							</dl>
							<dl class="palette palette-midnight-blue">
							  <dt>#2c3e50</dt>
							  <dd>Midnight blue</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-sun-flower">
							  <dt>#f1c40f</dt>
							  <dd>Sun flower</dd>
							</dl>
							<dl class="palette palette-orange">
							  <dt>#f39c12</dt>
							  <dd>Orange</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-carrot">
							  <dt>#e67e22</dt>
							  <dd>Carrot</dd>
							</dl>
							<dl class="palette palette-pumpkin">
							  <dt>#d35400</dt>
							  <dd>Pumpkin</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-alizarin">
							  <dt>#e74c3c</dt>
							  <dd>Alizarin</dd>
							</dl>
							<dl class="palette palette-pomegranate">
							  <dt>#c0392b</dt>
							  <dd>Pomegranate</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-clouds">
							  <dt>#ecf0f1</dt>
							  <dd>Clouds</dd>
							</dl>
							<dl class="palette palette-silver">
							  <dt>#bdc3c7</dt>
							  <dd>Silver</dd>
							</dl>
							  </div>
							  <div class="pallete-item">
								  <dl class="palette palette-concrete">
							  <dt>#95a5a6</dt>
							  <dd>Concrete</dd>
							</dl>
							<dl class="palette palette-asbestos">
							  <dt>#7f8c8d</dt>
							  <dd>Asbestos</dd>
							</dl>
						</div>	
					</div>	
					</div><!-- /.row -->
					<div class="row">
						<div class="col-md-12">
							<h4 class="page-header">
								Elements
							</h4>
						</div>
						 <div class="col-lg-6">
                            <div class="box" style="height: 360px">
                                <div class="box-title">
                                    <i class="fa fa-envelope"></i>
                                    <h3>Quick Post</h3>
                                    <div class="pull-right box-toolbar">
                                        <a href="#" class="btn btn-link btn-xs remove-box"><i class="fa fa-times"></i></a>
                                    </div>          
                                </div>
                                <div class="box-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Title"/>
                                        </div> 
										<div class="form-group">
                                            <input type="text" class="form-control" value="post, article, tags, put" data-toggle="tags" />
                                        </div>
                                        <div>
                                            <textarea placeholder="Content" class="form-control" rows="5"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer clearfix">
                                    <button class="pull-left btn btn-success">Publish <i class="fa fa-arrow-circle-right"></i></button>
                                    <button class="pull-right btn btn-default">Reset <i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div><!-- /.Left col -->
					
                        <div class="col-lg-6">
                            <div class="box" style="height: 360px">
                                <div class="box-title">
									<i class="fa fa-comments-o"></i> 
                                    <h3>Chat</h3>
                                    <div class="pull-right box-toolbar">
                                        <a href="#" class="btn btn-link btn-xs" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#"><i class="fa fa-circle text-success"></i> Online</a></li>
                                                <li><a href="#"><i class="fa fa-circle text-danger"></i> Offline</a></li>
                                            </ul>
                                        <a href="#" class="btn btn-link btn-xs remove-box"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="box-body chat" id="chat-box">
                                    <div class="item">
                                        <img src="img/avatar.jpg" alt="user" class="img-thumbnail"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                                Jill Doe
                                            </a>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                        </p>
                                    </div>
                                    <div class="item">
                                        <img src="img/avatar.jpg" alt="user image" class="img-thumbnail"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                                John Doe
                                            </a>
                                           
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                        </p>
                                    </div>
                                    <div class="item">
                                        <img src="img/avatar.jpg" alt="user image" class="img-thumbnail"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                                Jeremy Doe
                                            </a>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                                        </p>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Send a message..."/>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
					</div><!-- /.row -->
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