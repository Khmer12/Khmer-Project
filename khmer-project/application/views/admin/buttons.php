<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Buttons</title>
		
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
                        <li class="active sub-nav">
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="icons.php">Icons</a></li>
                                <li class="active"><a href="buttons.php">Buttons</a></li>
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
                    <h1>Buttons  <small>small text goes here</small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li>UI Elements</li>
                        <li class="active">Buttons</li>
                    </ol>
                </div>

                <div class="content">
                    <!-- Main row -->
                   <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Buttons</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <table class="table table-bordered table-striped text-center">
                                        <tr>
                                            <th>Normal</th>
                                            <th>btn-lg Button</th>
                                            <th>Small Button</th>
                                            <th>Disabled</th>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-default">Default</button></td>
                                            <td><button class="btn btn-default btn-lg">Default</button></td>
                                            <td><button class="btn btn-default btn-sm">Default</button></td>
                                            <td><button class="btn btn-default disabled">Default</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-primary">Primary</button></td>
                                            <td><button class="btn btn-primary btn-lg">Primary</button></td>
                                            <td><button class="btn btn-primary btn-sm">Primary</button></td>
                                            <td><button class="btn btn-primary disabled">Primary</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success">Success</button></td>
                                            <td><button class="btn btn-success btn-lg">Success</button></td>
                                            <td><button class="btn btn-success btn-sm">Success</button></td>
                                            <td><button class="btn btn-success disabled">Success</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-info">Info</button></td>
                                            <td><button class="btn btn-info btn-lg">Info</button></td>
                                            <td><button class="btn btn-info btn-sm">Info</button></td>
                                            <td><button class="btn btn-info disabled">Info</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-danger">Danger</button></td>
                                            <td><button class="btn btn-danger btn-lg">Danger</button></td>
                                            <td><button class="btn btn-danger btn-sm">Danger</button></td>
                                            <td><button class="btn btn-danger disabled">Danger</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-warning">Warning</button></td>
                                            <td><button class="btn btn-warning btn-lg">Warning</button></td>
                                            <td><button class="btn btn-warning btn-sm">Warning</button></td>
                                            <td><button class="btn btn-warning disabled">Warning</button></td>
                                        </tr>
                                    </table>
                                </div><!-- /.box -->
                            </div>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    <div class="row">
                        <div class="col-md-6">
                           <div class="box">
                                <div class="box-title">
                                    <h3>Colors</h3>
                                </div>
                                <div class="box-body">
									<p>
                                        <button class="btn palette-turquoise btn-color">turquoise</button>
                                        <button class="btn palette-green-sea btn-color">green-sea</button>
                                        <button class="btn palette-emerald btn-color">emerald</button>
                                        <button class="btn palette-nephritis btn-color">nephritis</button>
                                        <button class="btn palette-peter-river btn-color">peter-river</button>
                                        <button class="btn palette-belize-hole btn-color">belize-hole</button>
                                        <button class="btn palette-amethyst btn-color">amethyst</button>
                                        <button class="btn palette-wisteria btn-color">wisteria</button>
									</p>
									<p>
                                        <button class="btn palette-wet-asphalt btn-color">wet-asphalt</button>
                                        <button class="btn palette-midnight-blue btn-color">midnight-blue</button>
										<button class="btn palette-orange btn-color">orange</button>
										<button class="btn palette-sun-flower btn-color">sun-flower</button>
										<button class="btn palette-carrot btn-color">carrot</button>
										<button class="btn palette-pumpkin btn-color">pumpkin</button>
										<button class="btn palette-alizarin btn-color">alizarin</button>
										<button class="btn palette-pomegranate btn-color">pomegranate</button>
									</p>
									
										<button class="btn palette-silver btn-color">silver</button>
										<button class="btn palette-concrete btn-color">concrete</button>
                                </div>
                            </div>
								
                            <!-- Horizontal grouping -->
                            <div class="box">
                                <div class="box-title">
                                    <h3>Horizontal Button Group</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Button</th>
                                            <th>Icons</th>
                                            <th>Flat</th>
                                            <th>Dropdown</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">Left</button>
                                                    <button type="button" class="btn btn-default">Middle</button>
                                                    <button type="button" class="btn btn-default">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info">Left</button>
                                                    <button type="button" class="btn btn-info">Middle</button>
                                                    <button type="button" class="btn btn-info">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info">1</button>
                                                    <button type="button" class="btn btn-info">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">Left</button>
                                                    <button type="button" class="btn btn-danger">Middle</button>
                                                    <button type="button" class="btn btn-danger">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">1</button>
                                                    <button type="button" class="btn btn-danger">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning">Left</button>
                                                    <button type="button" class="btn btn-warning">Middle</button>
                                                    <button type="button" class="btn btn-warning">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning">1</button>
                                                    <button type="button" class="btn btn-warning">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">Left</button>
                                                    <button type="button" class="btn btn-success">Middle</button>
                                                    <button type="button" class="btn btn-success">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">1</button>
                                                    <button type="button" class="btn btn-success">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> 
                                    </table>
                                </div>
                            </div><!-- /.box -->
							
							  <div class="box">
                                <div class="box-title">
                                    <h3>Vertical Button Group</h3>
                                </div>
                                <div class="box-body table-responsive">

                                    <table class="table">
                                        <tr>
                                            <th>Button</th>
                                            <th>Icons</th>
                                            <th>Flat</th>
                                            <th>Dropdown</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default">Top</button>
                                                    <button type="button" class="btn btn-default">Middle</button>
                                                    <button type="button" class="btn btn-default">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger">Top</button>
                                                    <button type="button" class="btn btn-danger">Middle</button>
                                                    <button type="button" class="btn btn-danger">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger">1</button>
                                                    <button type="button" class="btn btn-danger">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning">Top</button>
                                                    <button type="button" class="btn btn-warning">Middle</button>
                                                    <button type="button" class="btn btn-warning">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning">1</button>
                                                    <button type="button" class="btn btn-warning">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> 
                                    </table>
                                </div>
                            </div><!-- /.box -->                            
                        </div><!-- /.col -->
						
                        <div class="col-md-6">
							  <div class="box">
                                <div class="box-title">
                                    <h3>Label Buttons</h3>
                                </div>
                                <div class="box-body">
										<p>
                                        <button class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Success</button>
                                        <button class="btn btn-labeled btn-danger"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Cancel</button>
                                        <button class="btn btn-labeled btn-warning"><span class="btn-label"><i class="glyphicon glyphicon-bookmark"></i></span>Bookmark</button>
                                        <button class="btn btn-labeled btn-primary"><span class="btn-label"><i class="glyphicon glyphicon-camera"></i></span>Camera</button>
                                        <button class="btn btn-labeled btn-default"><span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Left </a></button>
                                        <button class="btn btn-labeled btn-default"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> Right</button>
										</p>
										
                                        <button class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Thumbs Up </a></button>
                                        <button class="btn btn-labeled btn-danger"><span class="btn-label"><i class="glyphicon glyphicon-thumbs-down"></i></span>Thumbs Down </a></button>
										<button class="btn btn-labeled btn-info"><span class="btn-label"><i class="glyphicon glyphicon-refresh"></i></span>Refresh</button>
										<button class="btn btn-labeled btn-danger"><span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>Trash</button>
										<button class="btn btn-success btn-labeled"><span class="btn-label"><i class="glyphicon glyphicon-info-sign"></i></span>Info Web</button>
										
                                </div>
                            </div>
							
							<div class="box">
                                <div class="box-title">
                                    <h3>Outline Buttons</h3>
                                </div>
                                <div class="box-body">
										<p>
											<a class="btn btn-primary btn-outline">Primary Button</a>
											<a class="btn btn-success btn-outline">Success Button</a>
											<a class="btn btn-warning btn-outline">Warning Button</a>
											<a class="btn btn-danger btn-outline">Danger Button</a>
											<a class="btn btn-default btn-outline">Default Button</a>
										</p>
                                </div>
                            </div>
							
							<div class="box">
                                <div class="box-title">
                                    <h3>Circle Buttons</h3>
                                </div>
                                <div class="box-body">
										<p>
											<button type="button" class="btn btn-default btn-circle"><i class="glyphicon glyphicon-ok"></i></button>
											<button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-list"></i></button>
											<button type="button" class="btn btn-success btn-circle"><i class="glyphicon glyphicon-link"></i></button>
											<button type="button" class="btn btn-info btn-circle"><i class="glyphicon glyphicon-ok"></i></button>
											<button type="button" class="btn btn-warning btn-circle"><i class="glyphicon glyphicon-remove"></i></button>
											<button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-heart"></i></button>
										</p>
                                </div>
                            </div>
							
							<div class="box">
                                <div class="box-title">
                                    <h3>Outline Circle Buttons</h3>
                                </div>
                                <div class="box-body">
										<p>
											<button type="button" class="btn btn-default btn-circle btn-outline"><i class="glyphicon glyphicon-ok"></i></button>
											<button type="button" class="btn btn-primary btn-circle btn-outline"><i class="glyphicon glyphicon-list"></i></button>
											<button type="button" class="btn btn-success btn-circle btn-outline"><i class="glyphicon glyphicon-link"></i></button>
											<button type="button" class="btn btn-info btn-circle btn-outline"><i class="glyphicon glyphicon-ok"></i></button>
											<button type="button" class="btn btn-warning btn-circle btn-outline"><i class="glyphicon glyphicon-remove"></i></button>
											<button type="button" class="btn btn-danger btn-circle btn-outline"><i class="glyphicon glyphicon-heart"></i></button>
										</p>
                                </div>
                            </div>
							
							<div class="box">
                                <div class="box-title">
                                    <h3>Block Buttons</h3>
                                </div>
                                <div class="box-body">
                                    <button class="btn btn-block btn-success" type="button">Button Block</button>
									<button class="btn btn-block btn-default" type="button">Button Block</button>
									<button class="btn btn-block btn-primary" type="button"><i class="fa fa-cloud-download"></i> Iconic Button Block</button>
									<button class="btn btn-block btn-default" type="button"><i class="fa fa-cloud-download"></i> Iconic Button Block</button>
                                </div>
                            </div>
							
                            <div class="box">
                                <div class="box-title">
                                    <h3>Split buttons</h3>
                                </div>
                                <div class="box-body">
                                    <div class="margin">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Action</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">Action</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="box-title">
                                    <h3>Social Button</h3>
                                </div>
                                <div class="box-body">
									<div class="row">
										<div class="col-md-6">
											<a class="btn btn-block btn-social btn-bitbucket">
												<i class="fa fa-bitbucket"></i> Sign in with Bitbucket
											</a>
											<a class="btn btn-block btn-social btn-dropbox">
												<i class="fa fa-dropbox"></i> Sign in with Dropbox
											</a>
											<a class="btn btn-block btn-social btn-facebook">
												<i class="fa fa-facebook"></i> Sign in with Facebook
											</a>
											<a class="btn btn-block btn-social btn-flickr">
												<i class="fa fa-flickr"></i> Sign in with Flickr
											</a>
											<a class="btn btn-block btn-social btn-foursquare">
												<i class="fa fa-foursquare"></i> Sign in with Foursquare
											</a>
											<a class="btn btn-block btn-social btn-github">
												<i class="fa fa-github"></i> Sign in with GitHub
											</a>
										</div>
										<div class="col-md-6">
											<a class="btn btn-block btn-social btn-google-plus">
												<i class="fa fa-google-plus"></i> Sign in with Google
											</a>
											<a class="btn btn-block btn-social btn-instagram">
												<i class="fa fa-instagram"></i> Sign in with Instagram
											</a>
											<a class="btn btn-block btn-social btn-linkedin">
												<i class="fa fa-linkedin"></i> Sign in with LinkedIn
											</a>
											<a class="btn btn-block btn-social btn-tumblr">
												<i class="fa fa-tumblr"></i> Sign in with Tumblr
											</a>
											<a class="btn btn-block btn-social btn-twitter">
												<i class="fa fa-twitter"></i> Sign in with Twitter
											</a>
											<a class="btn btn-block btn-social btn-vk">
												<i class="fa fa-vk"></i> Sign in with VK
											</a>
										</div>
									</div>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /. row -->
                </div>
            </div>
        </div><!-- /.wrapper -->
		
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