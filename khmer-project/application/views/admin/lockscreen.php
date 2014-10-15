<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Maniac - Register</title>
		
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
	<body class="login fixed">
		<div class="wrapper animated flipInY">
			<div class="logo"><a href="#"><i class="fa fa-bolt"></i> <span>Maniac</span></a></div>
			<div class="lock-image">
				<div class="name">YAKUZI</div>
				<img src="img/avatar.jpg" alt="image" class="img-circle" />
				<div class="action"><a href="#">Logout</a></div>
			</div>
			<div class="box">
				<div class="header clearfix">
					<div class="pull-left"><i class="fa fa-sign-in"></i> Lockscreen</div>
					<div class="pull-right"><a href="#"><i class="fa fa-times"></i></a></div>
				</div>
				<form action="index.php" method="post">
					<div class="box-body padding-md">
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password"/>
						</div>          
						<div class="box-footer">                                                               
							<button type="submit" class="btn btn-warning btn-block">Login</button>  
						</div>
					</div>
				</form>
			</div>
			<div class="box-extra clearfix">
				<a href="login.php" class="pull-left btn btn-xs">Login with outher user</a>
			</div>
			
			<footer>
				Copyright &copy; 2014 by YAKUZI.
				
				<ul class=" list-unstyled list-inline">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">UI Elements</a></li>
					<li><a href="#">Charts</a></li>
					<li><a href="#">Mobile Apps</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</footer>
		</div>
		
		<!-- Bootstrap -->
        <script src="js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
		
		<!-- Interface -->
        <script src="js/plugins/pace/pace.min.js" type="text/javascript"></script>
    </body>
</html>