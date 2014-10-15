<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Icons</title>
		
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
                                <li class="active"><a href="icons.php">Icons</a></li>
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
                    <h1>Icons  <small>small text goes here</small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li>UI Elements</li>
                        <li class="active">Icons</li>
                    </ol>
                </div>

                <div class="content">
                    <!-- Main row -->
                   <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Font Awesome Icons</h3>
                                </div>
                                <div class="box-body table-responsive">
								<h3 class="no-margin-top">71 New Icons in 4.1</h3>
									<p>
										Vendroid using the latest version of the most popular icon font: Font Awesome with more than 300 icons available.
										For more information go to Font Awesome Site.
									</P>
									
								  <div class="row icon-list">
									

									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw  fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bank"></i> fa-bank <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-behance"></i> fa-behance</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-behance-square"></i> fa-behance-square</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bomb"></i> fa-bomb</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-building"></i> fa-building</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cab"></i> fa-cab <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-car"></i> fa-car</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-child"></i> fa-child</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-circle-o-notch"></i> fa-circle-o-notch</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-circle-thin"></i> fa-circle-thin</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-codepen"></i> fa-codepen</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cube"></i> fa-cube</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cubes"></i> fa-cubes</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-database"></i> fa-database</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-delicious"></i> fa-delicious</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-deviantart"></i> fa-deviantart</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-digg"></i> fa-digg</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-drupal"></i> fa-drupal</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-empire"></i> fa-empire</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-envelope-square"></i> fa-envelope-square</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-fax"></i> fa-fax</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-archive-o"></i> fa-file-archive-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-audio-o"></i> fa-file-audio-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-code-o"></i> fa-file-code-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-excel-o"></i> fa-file-excel-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-image-o"></i> fa-file-image-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-pdf-o"></i> fa-file-pdf-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-powerpoint-o"></i> fa-file-powerpoint-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-video-o"></i> fa-file-video-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-word-o"></i> fa-file-word-o</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ge"></i> fa-ge <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-git"></i> fa-git</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-git-square"></i> fa-git-square</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-google"></i> fa-google</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-graduation-cap"></i> fa-graduation-cap</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-hacker-news"></i> fa-hacker-news</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-header"></i> fa-header</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-history"></i> fa-history</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-institution"></i> fa-institution <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-joomla"></i> fa-joomla</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-jsfiddle"></i> fa-jsfiddle</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-language"></i> fa-language</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-life-ring"></i> fa-life-ring</a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span></a></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-openid"></i> fa-openid</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-paper-plane"></i> fa-paper-plane</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-paper-plane-o"></i> fa-paper-plane-o</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-paragraph"></i> fa-paragraph</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-paw"></i> fa-paw</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pied-piper"></i> fa-pied-piper</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pied-piper-square"></i> fa-pied-piper-square <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-qq"></i> fa-qq</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ra"></i> fa-ra <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rebel"></i> fa-rebel</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-recycle"></i> fa-recycle</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-reddit"></i> fa-reddit</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-reddit-square"></i> fa-reddit-square</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-send"></i> fa-send <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-share-alt"></i> fa-share-alt</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-share-alt-square"></i> fa-share-alt-square</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-slack"></i> fa-slack</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sliders"></i> fa-sliders</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-soundcloud"></i> fa-soundcloud</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-space-shuttle"></i> fa-space-shuttle</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-spoon"></i> fa-spoon</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-spotify"></i> fa-spotify</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-steam"></i> fa-steam</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-steam-square"></i> fa-steam-square</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-stumbleupon"></i> fa-stumbleupon</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-support"></i> fa-support <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-taxi"></i> fa-taxi</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tencent-weibo"></i> fa-tencent-weibo</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tree"></i> fa-tree</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-university"></i> fa-university</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-vine"></i> fa-vine</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span></div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-weixin"></i> fa-weixin</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-wordpress"></i> fa-wordpress</div>
									
									  <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-yahoo"></i> fa-yahoo</div>
									
								  </div>
            
                                  <section id="web-application">
                                  <h3 class="page-header">Web Application Icons</h3>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-adjust"></i> fa-adjust</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-anchor"></i> fa-anchor</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-archive"></i> fa-archive</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows"></i> fa-arrows</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows-h"></i> fa-arrows-h</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows-v"></i> fa-arrows-v</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-asterisk"></i> fa-asterisk</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ban"></i> fa-ban</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bar-chart-o"></i> fa-bar-chart-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-barcode"></i> fa-barcode</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bars"></i> fa-bars</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-beer"></i> fa-beer</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bell"></i> fa-bell</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bell-o"></i> fa-bell-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bolt"></i> fa-bolt</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-book"></i> fa-book</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bookmark"></i> fa-bookmark</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bookmark-o"></i> fa-bookmark-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-briefcase"></i> fa-briefcase</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bug"></i> fa-bug</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-building-o"></i> fa-building-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bullhorn"></i> fa-bullhorn</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bullseye"></i> fa-bullseye</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-calendar"></i> fa-calendar</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-calendar-o"></i> fa-calendar-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-camera"></i> fa-camera</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-camera-retro"></i> fa-camera-retro</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-certificate"></i> fa-certificate</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-check"></i> fa-check</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-check-circle"></i> fa-check-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-check-circle-o"></i> fa-check-circle-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-check-square"></i> fa-check-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-check-square-o"></i> fa-check-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-circle"></i> fa-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-circle-o"></i> fa-circle-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-clock-o"></i> fa-clock-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cloud"></i> fa-cloud</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cloud-download"></i> fa-cloud-download</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cloud-upload"></i> fa-cloud-upload</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-code"></i> fa-code</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-code-fork"></i> fa-code-fork</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-coffee"></i> fa-coffee</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cog"></i> fa-cog</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cogs"></i> fa-cogs</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-comment"></i> fa-comment</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-comment-o"></i> fa-comment-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-comments"></i> fa-comments</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-comments-o"></i> fa-comments-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-compass"></i> fa-compass</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-credit-card"></i> fa-credit-card</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-crop"></i> fa-crop</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-crosshairs"></i> fa-crosshairs</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cutlery"></i> fa-cutlery</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-desktop"></i> fa-desktop</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-dot-circle-o"></i> fa-dot-circle-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-download"></i> fa-download</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ellipsis-h"></i> fa-ellipsis-h</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ellipsis-v"></i> fa-ellipsis-v</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-envelope"></i> fa-envelope</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-envelope-o"></i> fa-envelope-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-eraser"></i> fa-eraser</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-exchange"></i> fa-exchange</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-exclamation"></i> fa-exclamation</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-exclamation-circle"></i> fa-exclamation-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-external-link"></i> fa-external-link</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-external-link-square"></i> fa-external-link-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-eye"></i> fa-eye</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-eye-slash"></i> fa-eye-slash</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-female"></i> fa-female</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-fighter-jet"></i> fa-fighter-jet</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-film"></i> fa-film</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-filter"></i> fa-filter</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-fire"></i> fa-fire</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-flag"></i> fa-flag</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-flag-checkered"></i> fa-flag-checkered</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-flag-o"></i> fa-flag-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-flask"></i> fa-flask</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-folder"></i> fa-folder</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-folder-o"></i> fa-folder-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-folder-open"></i> fa-folder-open</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-folder-open-o"></i> fa-folder-open-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-frown-o"></i> fa-frown-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-gamepad"></i> fa-gamepad</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-gavel"></i> fa-gavel</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-gift"></i> fa-gift</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-glass"></i> fa-glass</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-globe"></i> fa-globe</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-group"></i> fa-group <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-hdd-o"></i> fa-hdd-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-headphones"></i> fa-headphones</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-heart"></i> fa-heart</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-heart-o"></i> fa-heart-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-home"></i> fa-home</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-inbox"></i> fa-inbox</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-info"></i> fa-info</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-info-circle"></i> fa-info-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-key"></i> fa-key</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-keyboard-o"></i> fa-keyboard-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-laptop"></i> fa-laptop</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-leaf"></i> fa-leaf</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-lemon-o"></i> fa-lemon-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-level-down"></i> fa-level-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-level-up"></i> fa-level-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-lightbulb-o"></i> fa-lightbulb-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-location-arrow"></i> fa-location-arrow</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-lock"></i> fa-lock</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-magic"></i> fa-magic</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-magnet"></i> fa-magnet</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-mail-reply-all"></i> fa-mail-reply-all</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-male"></i> fa-male</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-map-marker"></i> fa-map-marker</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-meh-o"></i> fa-meh-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-microphone"></i> fa-microphone</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-microphone-slash"></i> fa-microphone-slash</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-minus"></i> fa-minus</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-minus-circle"></i> fa-minus-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-minus-square"></i> fa-minus-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-minus-square-o"></i> fa-minus-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-mobile"></i> fa-mobile</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-money"></i> fa-money</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-moon-o"></i> fa-moon-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-music"></i> fa-music</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pencil"></i> fa-pencil</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pencil-square"></i> fa-pencil-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pencil-square-o"></i> fa-pencil-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-phone"></i> fa-phone</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-phone-square"></i> fa-phone-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-picture-o"></i> fa-picture-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plane"></i> fa-plane</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plus"></i> fa-plus</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plus-circle"></i> fa-plus-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plus-square"></i> fa-plus-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plus-square-o"></i> fa-plus-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-power-off"></i> fa-power-off</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-print"></i> fa-print</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-puzzle-piece"></i> fa-puzzle-piece</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-qrcode"></i> fa-qrcode</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-question"></i> fa-question</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-question-circle"></i> fa-question-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-quote-left"></i> fa-quote-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-quote-right"></i> fa-quote-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-random"></i> fa-random</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-refresh"></i> fa-refresh</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-reply"></i> fa-reply</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-reply-all"></i> fa-reply-all</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-retweet"></i> fa-retweet</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-road"></i> fa-road</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rocket"></i> fa-rocket</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rss"></i> fa-rss</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rss-square"></i> fa-rss-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-search"></i> fa-search</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-search-minus"></i> fa-search-minus</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-search-plus"></i> fa-search-plus</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-share"></i> fa-share</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-share-square"></i> fa-share-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-share-square-o"></i> fa-share-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-shield"></i> fa-shield</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-shopping-cart"></i> fa-shopping-cart</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sign-in"></i> fa-sign-in</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sign-out"></i> fa-sign-out</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-signal"></i> fa-signal</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sitemap"></i> fa-sitemap</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-smile-o"></i> fa-smile-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort"></i> fa-sort</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-asc"></i> fa-sort-asc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-desc"></i> fa-sort-desc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-spinner"></i> fa-spinner</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-square"></i> fa-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-square-o"></i> fa-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-star"></i> fa-star</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-star-half"></i> fa-star-half</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-star-half-o"></i> fa-star-half-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-star-o"></i> fa-star-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-subscript"></i> fa-subscript</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-suitcase"></i> fa-suitcase</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-sun-o"></i> fa-sun-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-superscript"></i> fa-superscript</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tablet"></i> fa-tablet</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tachometer"></i> fa-tachometer</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tag"></i> fa-tag</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tags"></i> fa-tags</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tasks"></i> fa-tasks</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-terminal"></i> fa-terminal</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-thumb-tack"></i> fa-thumb-tack</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-thumbs-down"></i> fa-thumbs-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-thumbs-up"></i> fa-thumbs-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ticket"></i> fa-ticket</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-times"></i> fa-times</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-times-circle"></i> fa-times-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-times-circle-o"></i> fa-times-circle-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tint"></i> fa-tint</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-trash-o"></i> fa-trash-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-trophy"></i> fa-trophy</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-truck"></i> fa-truck</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-umbrella"></i> fa-umbrella</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-unlock"></i> fa-unlock</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-unlock-alt"></i> fa-unlock-alt</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-upload"></i> fa-upload</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-user"></i> fa-user</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-users"></i> fa-users</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-video-camera"></i> fa-video-camera</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-volume-down"></i> fa-volume-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-volume-off"></i> fa-volume-off</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-volume-up"></i> fa-volume-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-wheelchair"></i> fa-wheelchair</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-wrench"></i> fa-wrench</div>
                                    
                                  </div>
                                
                                </section>
                                
                                  <section id="form-control">
                                  <h3 class="page-header">Form Control Icons</h3>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-check-square"></i> fa-check-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-check-square-o"></i> fa-check-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-circle"></i> fa-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-circle-o"></i> fa-circle-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-dot-circle-o"></i> fa-dot-circle-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-minus-square"></i> fa-minus-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-minus-square-o"></i> fa-minus-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plus-square"></i> fa-plus-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plus-square-o"></i> fa-plus-square-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-square"></i> fa-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-square-o"></i> fa-square-o</div>
                                    
                                  </div>
                                </section>
                                
                                  <section id="currency">
                                  <h3 class="page-header">Currency Icons</h3>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-btc"></i> fa-btc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-eur"></i> fa-eur</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-gbp"></i> fa-gbp</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-inr"></i> fa-inr</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-jpy"></i> fa-jpy</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-krw"></i> fa-krw</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-money"></i> fa-money</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rub"></i> fa-rub</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-try"></i> fa-try</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-usd"></i> fa-usd</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-won"></i> fa-won <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></div>
                                    
                                  </div>
                                
                                </section>
                                
                                  <section id="text-editor">
                                  <h3 class="page-header">Text Editor Icons</h3>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-align-center"></i> fa-align-center</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-align-justify"></i> fa-align-justify</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-align-left"></i> fa-align-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-align-right"></i> fa-align-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bold"></i> fa-bold</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chain-broken"></i> fa-chain-broken</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-clipboard"></i> fa-clipboard</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-columns"></i> fa-columns</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-eraser"></i> fa-eraser</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file"></i> fa-file</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-o"></i> fa-file-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-text"></i> fa-file-text</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-file-text-o"></i> fa-file-text-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-files-o"></i> fa-files-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-floppy-o"></i> fa-floppy-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-font"></i> fa-font</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-indent"></i> fa-indent</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-italic"></i> fa-italic</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-link"></i> fa-link</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-list"></i> fa-list</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-list-alt"></i> fa-list-alt</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-list-ol"></i> fa-list-ol</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-list-ul"></i> fa-list-ul</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-outdent"></i> fa-outdent</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-paperclip"></i> fa-paperclip</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-repeat"></i> fa-repeat</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-save"></i> fa-save <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-scissors"></i> fa-scissors</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-strikethrough"></i> fa-strikethrough</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-table"></i> fa-table</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-text-height"></i> fa-text-height</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-text-width"></i> fa-text-width</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-th"></i> fa-th</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-th-large"></i> fa-th-large</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-th-list"></i> fa-th-list</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-underline"></i> fa-underline</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-undo"></i> fa-undo</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></div>
                                    
                                  </div>
                                
                                </section>
                                
                                  <section id="directional">
                                  <h3 class="page-header">Directional Icons</h3>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-double-down"></i> fa-angle-double-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-double-left"></i> fa-angle-double-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-double-right"></i> fa-angle-double-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-double-up"></i> fa-angle-double-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-down"></i> fa-angle-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-left"></i> fa-angle-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-right"></i> fa-angle-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-angle-up"></i> fa-angle-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-down"></i> fa-arrow-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-left"></i> fa-arrow-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-right"></i> fa-arrow-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrow-up"></i> fa-arrow-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows"></i> fa-arrows</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows-alt"></i> fa-arrows-alt</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows-h"></i> fa-arrows-h</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows-v"></i> fa-arrows-v</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-down"></i> fa-caret-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-left"></i> fa-caret-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-right"></i> fa-caret-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-caret-up"></i> fa-caret-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-down"></i> fa-chevron-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-left"></i> fa-chevron-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-right"></i> fa-chevron-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-chevron-up"></i> fa-chevron-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-hand-o-down"></i> fa-hand-o-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-hand-o-left"></i> fa-hand-o-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-hand-o-right"></i> fa-hand-o-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-hand-o-up"></i> fa-hand-o-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-long-arrow-down"></i> fa-long-arrow-down</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-long-arrow-left"></i> fa-long-arrow-left</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-long-arrow-right"></i> fa-long-arrow-right</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-long-arrow-up"></i> fa-long-arrow-up</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                                    
                                  </div>
                                
                                </section>
                                
                                  <section id="video-player">
                                  <h3 class="page-header">Video Player Icons</h3>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-arrows-alt"></i> fa-arrows-alt</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-backward"></i> fa-backward</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-compress"></i> fa-compress</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-eject"></i> fa-eject</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-expand"></i> fa-expand</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-fast-backward"></i> fa-fast-backward</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-fast-forward"></i> fa-fast-forward</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-forward"></i> fa-forward</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pause"></i> fa-pause</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-play"></i> fa-play</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-play-circle"></i> fa-play-circle</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-play-circle-o"></i> fa-play-circle-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-step-backward"></i> fa-step-backward</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-step-forward"></i> fa-step-forward</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-stop"></i> fa-stop</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-youtube-play"></i> fa-youtube-play</div>
                                    
                                  </div>
                                
                                </section>
                                
                                  <section id="brand">
                                  <h3 class="page-header">Brand Icons</h3>
                                
                                  <div class="alert alert-success">
                                    All brand icons are trademarks of their respective owners.
									The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.
                                  </div>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-adn"></i> fa-adn</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-android"></i> fa-android</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-apple"></i> fa-apple</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bitbucket"></i> fa-bitbucket</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bitbucket-square"></i> fa-bitbucket-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-btc"></i> fa-btc</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-css3"></i> fa-css3</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-dribbble"></i> fa-dribbble</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-dropbox"></i> fa-dropbox</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-facebook"></i> fa-facebook</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-facebook-square"></i> fa-facebook-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-flickr"></i> fa-flickr</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-foursquare"></i> fa-foursquare</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-github"></i> fa-github</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-github-alt"></i> fa-github-alt</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-github-square"></i> fa-github-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-gittip"></i> fa-gittip</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-google-plus"></i> fa-google-plus</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-google-plus-square"></i> fa-google-plus-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-html5"></i> fa-html5</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-instagram"></i> fa-instagram</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-linkedin"></i> fa-linkedin</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-linkedin-square"></i> fa-linkedin-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-linux"></i> fa-linux</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-maxcdn"></i> fa-maxcdn</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pagelines"></i> fa-pagelines</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pinterest"></i> fa-pinterest</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-pinterest-square"></i> fa-pinterest-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-renren"></i> fa-renren</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-skype"></i> fa-skype</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-stack-exchange"></i> fa-stack-exchange</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-stack-overflow"></i> fa-stack-overflow</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-trello"></i> fa-trello</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tumblr"></i> fa-tumblr</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-tumblr-square"></i> fa-tumblr-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-twitter"></i> fa-twitter</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-twitter-square"></i> fa-twitter-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-vimeo-square"></i> fa-vimeo-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-vk"></i> fa-vk</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-weibo"></i> fa-weibo</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-windows"></i> fa-windows</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-xing"></i> fa-xing</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-xing-square"></i> fa-xing-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-youtube"></i> fa-youtube</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-youtube-play"></i> fa-youtube-play</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-youtube-square"></i> fa-youtube-square</div>
                                    
                                  </div>
                                </section>
                                
                                  <section id="medical">
                                  <h3 class="page-header">Medical Icons</h3>
                                
                                  <div class="row icon-list">
                                    
                                
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-ambulance"></i> fa-ambulance</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-h-square"></i> fa-h-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-hospital-o"></i> fa-hospital-o</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-medkit"></i> fa-medkit</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-plus-square"></i> fa-plus-square</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-stethoscope"></i> fa-stethoscope</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-user-md"></i> fa-user-md</div>
                                    
                                      <div class=" col-md-3 col-sm-4"><i class="fa fa-fw fa-wheelchair"></i> fa-wheelchair</div>
                                    
                                  </div>
                                
                                </section>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    <div class="row">
                        <div class="col-md-12">
                           <div class="box">
                                <div class="box-title">
                                    <h3>Glyphicon</h3>
                                </div>
                                <div class="box-body">
									  <p>
										Vendroid also using the latest version of the most popular icon font: Glyphicon with more than 300 icons available.For more information go to twitter bootstrap.
									  </p>
								      <div class="row icon-list">
									  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-adjust"></i> glyphicon glyphicon-adjust</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-center"></i> glyphicon glyphicon-align-center</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-justify"></i> glyphicon glyphicon-align-justify</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-left"></i> glyphicon glyphicon-align-left</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-right"></i> glyphicon glyphicon-align-right</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-down"></i> glyphicon glyphicon-arrow-down</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-left"></i> glyphicon glyphicon-arrow-left</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-right"></i> glyphicon glyphicon-arrow-right</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-up"></i> glyphicon glyphicon-arrow-up</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-asterisk"></i> glyphicon glyphicon-asterisk</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-backward"></i> glyphicon glyphicon-backward</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ban-circle"></i> glyphicon glyphicon-ban-circle</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-barcode"></i> glyphicon glyphicon-barcode</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bell"></i> glyphicon glyphicon-bell</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bold"></i> glyphicon glyphicon-bold</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-book"></i> glyphicon glyphicon-book</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bookmark"></i> glyphicon glyphicon-bookmark</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-briefcase"></i> glyphicon glyphicon-briefcase</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bullhorn"></i> glyphicon glyphicon-bullhorn</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-calendar"></i> glyphicon glyphicon-calendar</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-camera"></i> glyphicon glyphicon-camera</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-certificate"></i> glyphicon glyphicon-certificate</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-check"></i> glyphicon glyphicon-check</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-down"></i> glyphicon glyphicon-chevron-down</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-left"></i> glyphicon glyphicon-chevron-left</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-right"></i> glyphicon glyphicon-chevron-right</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-up"></i> glyphicon glyphicon-chevron-up</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-down"></i> glyphicon glyphicon-circle-arrow-down</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-left"></i> glyphicon glyphicon-circle-arrow-left</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-right"></i> glyphicon glyphicon-circle-arrow-right</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-up"></i> glyphicon glyphicon-circle-arrow-up</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cloud"></i> glyphicon glyphicon-cloud</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cloud-download"></i> glyphicon glyphicon-cloud-download</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cloud-upload"></i> glyphicon glyphicon-cloud-upload</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cog"></i> glyphicon glyphicon-cog</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-collapse-down"></i> glyphicon glyphicon-collapse-down</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-collapse-up"></i> glyphicon glyphicon-collapse-up</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-comment"></i> glyphicon glyphicon-comment</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-compressed"></i> glyphicon glyphicon-compressed</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-copyright-mark"></i> glyphicon glyphicon-copyright-mark</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-credit-card"></i> glyphicon glyphicon-credit-card</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cutlery"></i> glyphicon glyphicon-cutlery</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-dashboard"></i> glyphicon glyphicon-dashboard</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-download"></i> glyphicon glyphicon-download</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-download-alt"></i> glyphicon glyphicon-download-alt</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-earphone"></i> glyphicon glyphicon-earphone</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-edit"></i> glyphicon glyphicon-edit</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-eject"></i> glyphicon glyphicon-eject</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-envelope"></i> glyphicon glyphicon-envelope</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-euro"></i> glyphicon glyphicon-euro</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-exclamation-sign"></i> glyphicon glyphicon-exclamation-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-expand"></i> glyphicon glyphicon-expand</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-export"></i> glyphicon glyphicon-export</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-eye-close"></i> glyphicon glyphicon-eye-close</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-eye-open"></i> glyphicon glyphicon-eye-open</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-facetime-video"></i> glyphicon glyphicon-facetime-video</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fast-backward"></i> glyphicon glyphicon-fast-backward</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fast-forward"></i> glyphicon glyphicon-fast-forward</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-file"></i> glyphicon glyphicon-file</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-film"></i> glyphicon glyphicon-film</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-filter"></i> glyphicon glyphicon-filter</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fire"></i> glyphicon glyphicon-fire</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-flag"></i> glyphicon glyphicon-flag</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-flash"></i> glyphicon glyphicon-flash</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-disk"></i> glyphicon glyphicon-floppy-disk</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-open"></i> glyphicon glyphicon-floppy-open</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-remove"></i> glyphicon glyphicon-floppy-remove</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-save"></i> glyphicon glyphicon-floppy-save</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-saved"></i> glyphicon glyphicon-floppy-saved</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-folder-close"></i> glyphicon glyphicon-folder-close</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-folder-open"></i> glyphicon glyphicon-folder-open</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-font"></i> glyphicon glyphicon-font</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-forward"></i> glyphicon glyphicon-forward</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fullscreen"></i> glyphicon glyphicon-fullscreen</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-gbp"></i> glyphicon glyphicon-gbp</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-gift"></i> glyphicon glyphicon-gift</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-glass"></i> glyphicon glyphicon-glass</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-globe"></i> glyphicon glyphicon-globe</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-down"></i> glyphicon glyphicon-hand-down</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-left"></i> glyphicon glyphicon-hand-left</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-right"></i> glyphicon glyphicon-hand-right</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-up"></i> glyphicon glyphicon-hand-up</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hd-video"></i> glyphicon glyphicon-hd-video</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hdd"></i> glyphicon glyphicon-hdd</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-header"></i> glyphicon glyphicon-header</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-headphones"></i> glyphicon glyphicon-headphones</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-heart"></i> glyphicon glyphicon-heart</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-heart-empty"></i> glyphicon glyphicon-heart-empty</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-home"></i> glyphicon glyphicon-home</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-import"></i> glyphicon glyphicon-import</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-inbox"></i> glyphicon glyphicon-inbox</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-indent-left"></i> glyphicon glyphicon-indent-left</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-indent-right"></i> glyphicon glyphicon-indent-right</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-info-sign"></i> glyphicon glyphicon-info-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-italic"></i> glyphicon glyphicon-italic</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-leaf"></i> glyphicon glyphicon-leaf</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-link"></i> glyphicon glyphicon-link</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-list"></i> glyphicon glyphicon-list</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-list-alt"></i> glyphicon glyphicon-list-alt</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-lock"></i> glyphicon glyphicon-lock</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-log-in"></i> glyphicon glyphicon-log-in</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-log-out"></i> glyphicon glyphicon-log-out</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-magnet"></i> glyphicon glyphicon-magnet</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-map-marker"></i> glyphicon glyphicon-map-marker</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-minus"></i> glyphicon glyphicon-minus</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-minus-sign"></i> glyphicon glyphicon-minus-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-move"></i> glyphicon glyphicon-move</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-music"></i> glyphicon glyphicon-music</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-new-window"></i> glyphicon glyphicon-new-window</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-off"></i> glyphicon glyphicon-off</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ok"></i> glyphicon glyphicon-ok</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ok-circle"></i> glyphicon glyphicon-ok-circle</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ok-sign"></i> glyphicon glyphicon-ok-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-open"></i> glyphicon glyphicon-open</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-paperclip"></i> glyphicon glyphicon-paperclip</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-pause"></i> glyphicon glyphicon-pause</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-pencil"></i> glyphicon glyphicon-pencil</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-phone"></i> glyphicon glyphicon-phone</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-phone-alt"></i> glyphicon glyphicon-phone-alt</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-picture"></i> glyphicon glyphicon-picture</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-plane"></i> glyphicon glyphicon-plane</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-play"></i> glyphicon glyphicon-play</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-play-circle"></i> glyphicon glyphicon-play-circle</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-plus"></i> glyphicon glyphicon-plus</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-plus-sign"></i> glyphicon glyphicon-plus-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-print"></i> glyphicon glyphicon-print</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-pushpin"></i> glyphicon glyphicon-pushpin</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-qrcode"></i> glyphicon glyphicon-qrcode</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-question-sign"></i> glyphicon glyphicon-question-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-random"></i> glyphicon glyphicon-random</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-record"></i> glyphicon glyphicon-record</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-refresh"></i> glyphicon glyphicon-refresh</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-registration-mark"></i> glyphicon glyphicon-registration-mark</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-remove"></i> glyphicon glyphicon-remove</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-remove-circle"></i> glyphicon glyphicon-remove-circle</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-remove-sign"></i> glyphicon glyphicon-remove-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-repeat"></i> glyphicon glyphicon-repeat</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-full"></i> glyphicon glyphicon-resize-full</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-horizontal"></i> glyphicon glyphicon-resize-horizontal</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-small"></i> glyphicon glyphicon-resize-small</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-vertical"></i> glyphicon glyphicon-resize-vertical</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-retweet"></i> glyphicon glyphicon-retweet</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-road"></i> glyphicon glyphicon-road</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-save"></i> glyphicon glyphicon-save</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-saved"></i> glyphicon glyphicon-saved</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-screenshot"></i> glyphicon glyphicon-screenshot</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sd-video"></i> glyphicon glyphicon-sd-video</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-search"></i> glyphicon glyphicon-search</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-send"></i> glyphicon glyphicon-send</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-share"></i> glyphicon glyphicon-share</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-share-alt"></i> glyphicon glyphicon-share-alt</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-shopping-cart"></i> glyphicon glyphicon-shopping-cart</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-signal"></i> glyphicon glyphicon-signal</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort"></i> glyphicon glyphicon-sort</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-alphabet"></i> glyphicon glyphicon-sort-by-alphabet</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-alphabet-alt"></i> glyphicon glyphicon-sort-by-alphabet-alt</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-attributes"></i> glyphicon glyphicon-sort-by-attributes</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-attributes-alt"></i> glyphicon glyphicon-sort-by-attributes-alt</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-order"></i> glyphicon glyphicon-sort-by-order</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-order-alt"></i> glyphicon glyphicon-sort-by-order-alt</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-5-1"></i> glyphicon glyphicon-sound-5-1</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-6-1"></i> glyphicon glyphicon-sound-6-1</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-7-1"></i> glyphicon glyphicon-sound-7-1</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-dolby"></i> glyphicon glyphicon-sound-dolby</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-stereo"></i> glyphicon glyphicon-sound-stereo</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-star"></i> glyphicon glyphicon-star</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-star-empty"></i> glyphicon glyphicon-star-empty</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-stats"></i> glyphicon glyphicon-stats</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-step-backward"></i> glyphicon glyphicon-step-backward</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-step-forward"></i> glyphicon glyphicon-step-forward</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-stop"></i> glyphicon glyphicon-stop</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-subtitles"></i> glyphicon glyphicon-subtitles</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tag"></i> glyphicon glyphicon-tag</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tags"></i> glyphicon glyphicon-tags</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tasks"></i> glyphicon glyphicon-tasks</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-text-height"></i> glyphicon glyphicon-text-height</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-text-width"></i> glyphicon glyphicon-text-width</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-th"></i> glyphicon glyphicon-th</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-th-large"></i> glyphicon glyphicon-th-large</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-th-list"></i> glyphicon glyphicon-th-list</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-thumbs-down"></i> glyphicon glyphicon-thumbs-down</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-thumbs-up"></i> glyphicon glyphicon-thumbs-up</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-time"></i> glyphicon glyphicon-time</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tint"></i> glyphicon glyphicon-tint</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tower"></i> glyphicon glyphicon-tower</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-transfer"></i> glyphicon glyphicon-transfer</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-trash"></i> glyphicon glyphicon-trash</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tree-conifer"></i> glyphicon glyphicon-tree-conifer</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tree-deciduous"></i> glyphicon glyphicon-tree-deciduous</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-unchecked"></i> glyphicon glyphicon-unchecked</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-upload"></i> glyphicon glyphicon-upload</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-usd"></i> glyphicon glyphicon-usd</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-user"></i> glyphicon glyphicon-user</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-volume-down"></i> glyphicon glyphicon-volume-down</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-volume-off"></i> glyphicon glyphicon-volume-off</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-volume-up"></i> glyphicon glyphicon-volume-up</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-warning-sign"></i> glyphicon glyphicon-warning-sign</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-wrench"></i> glyphicon glyphicon-wrench</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-zoom-in"></i> glyphicon glyphicon-zoom-in</div>
                                      <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-zoom-out"></i> glyphicon glyphicon-zoom-out</div>
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