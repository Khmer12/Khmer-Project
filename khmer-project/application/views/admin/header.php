<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Dashboard</title>
		
		<!-- Maniac stylesheets -->
        <link rel="stylesheet" href="<?=base_url()?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=base_url()?>/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?=base_url()?>/css/gritter/jquery.gritter.css" />
        <link rel="stylesheet" href="<?=base_url()?>/css/bootstrap-tagsinput/bootstrap-tagsinput.css" />
        <link rel="stylesheet" href="<?=base_url()?>/css/jquery-jvectormap/jquery-jvectormap-1.2.2.css" />
        <link rel="stylesheet" href="<?=base_url()?>/css/animate/animate.min.css" />
        <link rel="stylesheet" href="<?=base_url()?>/css/iCheck/all.css" />
        <link rel="stylesheet" href="<?=base_url()?>/css/style.css" />
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
			<script src="<?=base_url()?>/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="<?=base_url()?>/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
         <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
			
			<script type="text/javascript">
			tinymce.init({
			    selector: "textarea",
			    theme: "modern",
			    plugins: [
			        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
			        "searchreplace wordcount visualblocks visualchars code fullscreen",
			        "insertdatetime media nonbreaking save table contextmenu directionality",
			        "emoticons template paste textcolor colorpicker textpattern"
			    ],
			    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			    toolbar2: "print preview media | forecolor backcolor emoticons",
			    image_advtab: true,
			    templates: [
			        {title: 'Test template 1', content: 'Test 1'},
			        {title: 'Test template 2', content: 'Test 2'}
			    ]
			});
			</script>
        
	</head>
	<body class="fixed">

        <!-- Header -->
        <header>
			<a href="<?=base_url()?>/index-2.php" class="logo"><i class="fa fa-bolt"></i> <span>Maniac</span></a>
            <nav class="navbar navbar-static-top">
                <a href="<?=base_url()?>/#" class="navbar-btn sidebar-toggle">
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
                            <a href="<?=base_url()?>/#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i><span class="label label-warning">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-bell"></i>  You have 5 new notifications</li>
                                <li>
                                    <ul>
                                        <li><a href="<?=base_url()?>/#"><i class="fa fa-users success"></i> New user registered</a></li>
                                        <li><a href="<?=base_url()?>/#"><i class="fa fa-heart info"></i> Jane liked your post</a></li>
                                        <li><a href="<?=base_url()?>/#"><i class="fa fa-envelope warning"></i> You got a message from Jean</a></li>
										<li><a href="<?=base_url()?>/#"><i class="fa fa-info success"></i> Privacy settings have been changed</a></li>
										<li><a href="<?=base_url()?>/#"><i class="fa fa-comments danger"></i> New comments waiting approval</a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="<?=base_url()?>/#">View all notification</a></li>
                            </ul>
                        </li>
						
                        <li class="dropdown dropdown-messages">
                            <a href="<?=base_url()?>/#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i><span class="label label-success">6</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-envelope"></i> You have 6 messages</li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="<?=base_url()?>/#">
                                                <div class="pull-left"><img src="<?=base_url()?>/img/avatar2.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>Jill Doe<small><i class="fa fa-clock-o"></i> 1 mins</small></h4>
                                                <p>Can we meet somewhere?</p>
                                            </a>
                                        </li>
										
                                        <li>
                                            <a href="<?=base_url()?>/#">
                                                <div class="pull-left"><img src="<?=base_url()?>/img/avatar.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>John Doe<small><i class="fa fa-clock-o"></i> 2 mins</small></h4>
                                                <p>Please send me a new email.</p>
                                            </a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>/#">
                                                <div class="pull-left"><img src="<?=base_url()?>/img/avatar3.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>Jeremy Doe<small><i class="fa fa-clock-o"></i> 30 mins</small></h4>
                                                <p>Don't forget to subscribe to...</p>
                                            </a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>/#">
                                                <div class="pull-left"><img src="<?=base_url()?>/img/avatar4.jpg" class="img-rounded" alt="image"/></div>
                                                <h4>Jean Doe<small><i class="fa fa-clock-o"></i> 2 hours</small></h4>
                                                <p>I sent you a mail about me.</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="<?=base_url()?>/#">View all messages</a></li>
                            </ul>
                        </li>
						
                        <li class="dropdown dropdown-tasks">
                            <a href="<?=base_url()?>/#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i><span class="label label-danger">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-tasks"></i>  You have 1 new task</li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="<?=base_url()?>/#">
                                                <h3>PHP Developing<small class="pull-right">32%</small></h3>
                                                <div class="progress">
													<div class="progress-bar progress-bar-success" style="width: 32%" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>/#">
                                                <h3>Database Repair<small class="pull-right">14%</small></h3>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" style="width: 14%" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>/#">
                                                <h3>Backup Create<small class="pull-right">65%</small></h3>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 65%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>/#">
                                                <h3>Create New Modules<small class="pull-right">80%</small></h3>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="<?=base_url()?>/#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
						
                        <li class="dropdown widget-user">
                            <a href="<?=base_url()?>/#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?=base_url()?>/img/avatar.jpg" class="pull-left" alt="image" />
                                <span>John Doe <i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul class="dropdown-menu">
								<li>
									<a href="<?=base_url()?>/#"><i class="fa fa-cog"></i>Settings</a>
								</li>
								<li>
									<a href="<?=base_url()?>/profile.php"><i class="fa fa-user"></i>Profile</a>
								</li>
								<li class="footer">
									<a href="<?=base_url()?>/#"><i class="fa fa-power-off"></i>Logout</a>
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
                            <img src="<?=base_url()?>/img/avatar.jpg" alt="" />
                        </div>
                        <div class="details">
                            <p>John Doe</p>
                            <span class="position">Superadmin</span>
                        </div>
						<div class="button">
							<a href="<?=base_url()?>/login.php"><i class="fa fa-power-off"></i></a>
						</div>
                    </div>
                    <ul class="sidebar-menu">
						<li class="title">Navigation</li>
                        <li class="active">
                            <a href="<?=site_url()?>/admin">
                                <i class="fa fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-briefcase"></i>
                                <span>User</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=site_url()?>/admin/page_list_user">All users</a></li>
                                <li><a href="<?=site_url()?>/admin/page_add_user">Add user</a></li>
                            </ul>
                        </li>
                        
                         <li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-briefcase"></i>
                                <span>Posts</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=site_url()?>/admin/view_all_posts">All posts</a></li>
                                <li><a href="<?=site_url()?>/admin/add_new_post">Add new post</a></li>
                            </ul>
                        </li>
                        
                        <li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-briefcase"></i>
                                <span>Categories</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=site_url()?>/admin/page_list_category">All categories</a></li>
                                <li><a href="<?=site_url()?>/admin/page_add_category">Add new category</a></li>
                            </ul>
                        </li>
                        
                        <li> <a ></a></li>  <li><a ></a></li>  <li><a ></a></li>
                        
                        <li>
                            <a href="<?=base_url()?>/inbox.php">
                                <i class="fa fa-envelope"></i> <span>Inbox</span>
                                <small class="label pull-right">10</small>
                            </a>
                        </li>
                        <li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-briefcase"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=base_url()?>/typography.php">Typography</a></li>
                                <li><a href="<?=base_url()?>/icons.php">Icons</a></li>
                                <li><a href="<?=base_url()?>/buttons.php">Buttons</a></li>
                                <li><a href="<?=base_url()?>/sliders.php">Sliders</a></li>
                            </ul>
                        </li>
                        <li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-pencil"></i> <span>Forms</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=base_url()?>/form-elements.php">Form Elements</a></li>
                                <li><a href="<?=base_url()?>/form-validation.php">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=base_url()?>/basic-tables.php">Basic tables</a></li>
                                <li><a href="<?=base_url()?>/data-tables.php">Data tables</a></li>
                            </ul>
                        </li>
						<li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-signal"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=base_url()?>/flot.php">Flot</a></li>
                                <li><a href="<?=base_url()?>/morris.php">Morris</a></li>
                            </ul>
                        </li>
						 <li>
                            <a href="<?=base_url()?>/widgets.php">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label label-success pull-right">new</small>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                            </a>
                        </li>
                        <li class="sub-nav">
                            <a href="<?=base_url()?>/#">
                                <i class="fa fa-folder"></i> <span>Other Pages</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?=base_url()?>/404.php">404 Error</a></li>
                                <li><a href="<?=base_url()?>/blank.php">Blank Page</a></li>
                                <li><a href="<?=base_url()?>/invoice.php">Invoice</a></li>
                                <li><a href="<?=base_url()?>/index.php">Login</a></li>
                                <li><a href="<?=base_url()?>/register.php">Register</a></li>
                                <li><a href="<?=base_url()?>/lockscreen.php">Lockscreen</a></li>
                                <li><a href="<?=base_url()?>/timeline.php">Timeline</a></li>
                            </ul>
                        </li>
                    </ul>
					<div class="sidebar-widget online-users">&nbsp;
						<div class="body">
							<div class="title">Online Admins <a href="<?=base_url()?>/#" class="pull-right"><i class="fa fa-cog"></i></a></div>
							
							<a href="<?=base_url()?>/#" class="full-width">
								<div class="img online pull-left"><img src="<?=base_url()?>/img/avatar2.jpg" alt="User" /></div>
								<div class="info pull-left">
									<div class="name">Jill Doe</div>
									<div class="status">News Writer</div>
								</div>
								<div class="pull-right activity">
									<i class="fa fa-clock-o"></i> now
								</div>
							</a>
							
							<a href="<?=base_url()?>/#" class="full-width">
								<div class="img away pull-left"><img src="<?=base_url()?>/img/avatar3.jpg" alt="User" /></div>
								<div class="info pull-left">
									<div class="name">Jeremy Doe</div>
									<div class="status">Moderator</div>
								</div>
								<div class="pull-right activity">
									<i class="fa fa-clock-o"></i> 5 m
								</div>
							</a>
							
							<a href="<?=base_url()?>/#" class="full-width">
								<div class="img inactive pull-left"><img src="<?=base_url()?>/img/avatar2.jpg" alt="User" /></div>
								<div class="info pull-left">
									<div class="name">Jill Doe</div>
									<div class="status">Uploader</div>
								</div>
								<div class="pull-right activity">
									<i class="fa fa-clock-o"></i> 1 h
								</div>
							</a>
							
							<a href="<?=base_url()?>/#" class="full-width">
								<div class="img online pull-left"><img src="<?=base_url()?>/img/avatar4.jpg" alt="User" /></div>
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