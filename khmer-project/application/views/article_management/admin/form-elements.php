<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Form Elements</title>
		
		<!-- Maniac stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/animate/animate.min.css" />
        <link rel="stylesheet" href="css/iCheck/all.css" />
        <link rel="stylesheet" href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"  />
        <link rel="stylesheet" href="css/bootstrap-tagsinput/bootstrap-tagsinput.css" />
        <link rel="stylesheet" href="css/colorpicker/bootstrap-colorpicker.min.css"/>
        <link rel="stylesheet" href="css/timepicker/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="css/datepicker/datepicker.css" />
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
                        <li class="active sub-nav">
                            <a href="#">
                                <i class="fa fa-pencil"></i> <span>Forms</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li class="active"><a href="form-elements.php">Form Elements</a></li>
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
                    <h1>Form Elements  <small>small text goes here</small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li>Forms</li>
                        <li class="active">Form Elements</li>
                    </ol>
                </div>

                <div class="content">
                <!-- Main row -->
				<div class="row label-normal">
					<div class="col-md-6">
                        <div class="box">
                            <div class="box-title">
                               <h3>Basic Form</h3>
                            </div>
                            <div class="box-body">
								<form role="form">
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="file" class="btn btn-info file-inputs" title="Search for a file to add">
										<p class="help-block">Example block-level help text here.</p>
									</div>
									<button type="submit" class="btn btn-success">Submit</button>
								</form>
                            </div>
						</div>
					</div><!-- ./col -->
					
					<div class="col-md-6">
                        <div class="box">
                            <div class="box-title">
                               <h3>Horizontal Form</h3>
                            </div>
                            <div class="box-body">
								<form class="form-horizontal" role="form">
								  <div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									  <p class="help-block">Example block-level help text here.</p>
									</div>
								  </div>
								  <div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
									</div>
								  </div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <div class="checkbox">
										<label>
										  <input type="checkbox"> Remember me
										</label>
									  </div>
									</div>
								  </div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-primary">Sign in</button>
									</div>
								  </div>
								</form>
                            </div>
						</div>
					</div><!-- ./col -->
					
					<div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                               <h3>Inline Form</h3>
                            </div>
                            <div class="box-body">
								<form class="form-inline" role="form">
								  <div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
								  </div>
								  <div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox"> Remember me
									</label>
								  </div>
								  <button type="submit" class="btn btn-warning">Sign in</button>
								</form>
                            </div>
						</div>
					</div><!-- ./col -->
					
					<div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                               <h3>Form Elements</h3>
                            </div>
                            <div class="box-body">
								<form class="form-horizontal" role="form">
									
									<!-- Text input -->
									<div class="form-group">
										<label for="input-text" class="col-sm-2 control-label">Input text</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="input-text" placeholder="Input text">
										</div>
									</div>
									
									<!-- Input text with help -->
									<div class="form-group">
										<label for="input-text-help" class="col-sm-2 control-label">Input text with help</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="input-text-help" placeholder="Input text placeholder">
										<p class="help-block">Example block-level help text here.</p>
										</div>
									</div>
									
									<!-- Input password -->
									<div class="form-group">
										<label for="inputPassword" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
									
									<!-- Disabled input -->
									<div class="form-group">
										<label for="input-text-disabled" class="col-sm-2 control-label">Disabled</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="input-text-disabled" placeholder="Input text" disabled>
										</div>
									</div>
									
									<!-- Static control -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Static Control</label>
										<div class="col-sm-10">
										<p class="form-control-static">email@example.com</p>
										</div>
									</div>
									
									<!-- Radio -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Radio</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												Option one is this and that&mdash;be sure to include why it's great
												</label>
											</div>
											<div class="radio">
												<label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												Option two can be something else and selecting it will deselect option one
												</label>
											</div>
										</div>
									</div>
									
									<!-- Checkbox -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Checkbox</label>
										<div class="col-sm-10">
											<div class="checkbox">
												<label>
												<input type="checkbox" value="">
												Option one is this and that&mdash;be sure to include why it's great
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" value="">
												Option one is this and that&mdash;be sure to include why it's great
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" value="">
												Option one is this and that&mdash;be sure to include why it's great
												</label>
											</div>
										</div>
									</div>
									
									<!-- Inline checkbox -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Inline Checkbox</label>
										<div class="col-sm-10">
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
											</label>
										</div>
									</div>
									
									<!-- Single Select -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Select</label>
										<div class="col-sm-10">
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									
									<!-- Multiple select -->
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<select multiple class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									
									<!-- Input success -->
									<div class="form-group has-success">
										<label for="input-text-has-success" class="col-sm-2 control-label">Input Success</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="input-text-has-success">
										</div>
									</div>
									
									<!-- Input warning -->	
									<div class="form-group has-warning">
										<label for="input-text-has-warning" class="col-sm-2 control-label">Input Warning</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="input-text-has-warning">
										</div>
									</div>
									
									<!-- Input error -->
									<div class="form-group has-error">
										<label for="input-text-has-error" class="col-sm-2 control-label">Input Error</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="input-text-has-error">
										</div>
									</div>
									
									<!-- Input sm -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Input Size</label>
										<div class="col-sm-10">
											<input type="text" class="form-control input-sm" placeholder="input-sm">
										</div>
									</div>
									
									<!-- Input normal -->
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="default">
										</div>
									</div>
									
									<!-- Input lg -->
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<input type="text" class="form-control input-lg" placeholder="input-lg">
										</div>
									</div>
									
									<!-- Input column -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Column</label>
										<div class="col-sm-10">
											<div class="row">
												<div class="col-xs-2">
													<input type="text" class="form-control" placeholder=".col-xs-2">
												</div>
												<div class="col-xs-3">
													<input type="text" class="form-control" placeholder=".col-xs-3">
												</div>
												<div class="col-xs-4">
													<input type="text" class="form-control" placeholder=".col-xs-4">
												</div>
											</div>
										</div>
									</div>
									
									<!-- Input group -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Input group</label>
										<div class="col-sm-10">
											<div class="input-group">
												<span class="input-group-addon">@</span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<div class="input-group">
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<div class="input-group">
												<span class="input-group-addon">$</span>
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<div class="row">
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-addon">
														<input type="checkbox">
														</span>
														<input type="text" class="form-control">
													</div><!-- /input-group -->
												</div><!-- /.col-lg-6 -->
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-addon">
														<input type="radio">
														</span>
														<input type="text" class="form-control">
													</div><!-- /input-group -->
												</div><!-- /.col-lg-6 -->
											</div><!-- /.row -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<div class="row">
												<div class="col-lg-6">
													<div class="input-group">
														<span class="input-group-btn">
														<button class="btn btn-default" type="button">Go!</button>
														</span>
														<input type="text" class="form-control">
													</div><!-- /input-group -->
												</div><!-- /.col-lg-6 -->
												<div class="col-lg-6">
													<div class="input-group">
														<input type="text" class="form-control">
														<span class="input-group-btn">
														<button class="btn btn-default" type="button">Go!</button>
														</span>
													</div><!-- /input-group -->
												</div><!-- /.col-lg-6 -->
											</div><!-- /.row -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label"></label>
										<div class="col-sm-10">
											<div class="row">
												<div class="col-lg-6">
													<div class="input-group">
														<div class="input-group-btn">
															<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
															<ul class="dropdown-menu">
																<li><a href="#fakelink">Action</a></li>
																<li><a href="#fakelink">Another action</a></li>
																<li><a href="#fakelink">Something else here</a></li>
															</ul>
														</div><!-- /btn-group -->
													<input type="text" class="form-control">
													</div><!-- /input-group -->
												</div><!-- /.col-lg-6 -->
											<div class="col-lg-6">
												<div class="input-group">
												<input type="text" class="form-control">
													<div class="input-group-btn">
														<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
														<ul class="dropdown-menu pull-right">
															<li><a href="#fakelink">Action</a></li>
															<li><a href="#fakelink">Another action</a></li>
															<li><a href="#fakelink">Something else here</a></li>
														</ul>
													</div><!-- /btn-group -->
												</div><!-- /input-group -->
											</div><!-- /.col-lg-6 -->
											</div><!-- /.row -->
										</div>
									</div>

									
									<!-- File input -->
									<div class="form-group">
										<label class="col-sm-2 control-label">File Input</label>
										<div class="col-sm-10">
											<input type="file" class="btn btn-info file-inputs" title="Select file">
										</div>
									</div>
									
									<!-- Date picker -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Datepicker</label>
										<div class="col-sm-3">
											<input type="text" class="form-control datepicker-input">
										</div>
									</div>
									
									<!-- Color picker -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Colorpicker</label>
										<div class="col-sm-3">
											<input type="text" class="form-control colorpicker">
										</div>
									</div>
									
									
									<!-- Input mask -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Input mask</label>
										<div class="col-sm-10">
											<div class="row">
												<div class="col-sm-3">
													<input type="text" class="form-control" data-inputmask="'mask': '9999999'" placeholder="999999">
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control input" data-inputmask="'mask': 'aaaaaa'" placeholder="******">
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control input" data-inputmask="'mask': '999.999.999'"  placeholder="999.999.999">
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control input" data-inputmask="'mask': '99:99:99'" placeholder="99:99:99">
												</div>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-2 control-label">Tags Input</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" value="post, article, tags, put" data-toggle="tags" />
										</div>
									</div>
									
									<!-- Bootstrap WYSIHTML5 -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Bootstrap WYSIHTML5</label>
										<div class="col-sm-10">
											<textarea class="bs-texteditor form-control" rows="6"></textarea>
										</div>
									</div>
									</form>
                            </div>
						</div>
					</div><!-- ./col -->
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
        <script src="js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script src="js/plugins/bootstrap-file-input/bootstrap-file-input.js" type="text/javascript"></script>
        <script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js" type="text/javascript"></script>
        <script src="js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <script src="js/plugins/datepicker/datepicker.js" type="text/javascript"></script>
        <script src="js/plugins/daterangepicker/daterangepicker.php" type="text/javascript"></script>
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
		
		 <script type="text/javascript">
			$(document).ready(function(){
				//Inputmask
				$(":input").inputmask();	
				
				//Date picker
				$('.datepicker-input').datepicker();
				
				//Bootstrap WYSIHTML5
				 $(".bs-texteditor").wysihtml5();
				 
				//TagsInput
				$("[data-toggle='tags']").tagsinput({ 
					tagClass: function(item) { 
						return 'label label-primary';
					} 
				});
				
				//Colorpicker
                $(".colorpicker").colorpicker();
			
				//File Input
				$('.file-inputs').bootstrapFileInput();
				
				//iCheck
				$("input[type='checkbox'], input[type='radio']").iCheck({
					checkboxClass: 'icheckbox_minimal',
					radioClass: 'iradio_minimal'
				});
			});
		</script>
    </body>
</html>