

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Navbar with Social Media Icons</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	
	body {
		background: #eeeeee;
		font-family: 'Varela Round', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar {		
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.nav img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
		font-family: 'Raleway', sans-serif;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #eb5844;
	}
	.navbar ul.nav li a:hover, .navbar ul.nav li a:focus {
		color: #f08373 !important;
	}
	.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
		color: #eb5844 !important;
		background: transparent !important;
	}
	.search-box {
        position: relative;
    }	
    .search-box input.form-control {		
        padding-right: 35px;
        border-radius: 0;
		padding-left: 0;
		border-width: 0 0 1px 0;
		box-shadow: none;
    }
	.search-box input.form-control:focus {		
		border-color: #f08373;		
	}
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px 0 7px 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar ul li i {
		font-size: 18px;
	}
	.navbar .dropdown-menu i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .dropdown.open  a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .navbar-form {
		margin-right: 0;
		margin-left: 0;
		border: 0;
	}
	@media (min-width: 992px){
		.form-inline .input-group {
			width: 250px;
			margin-right: 30px;
		}
	}
	@media (max-width: 991px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
			margin-top: 0;
		}
		.input-group {
			width: 100%;
		}
	}

</style>

</head> 
<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header">
		<img src="" alt="">		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
						
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Categories <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#">Network Security</a></li>
					<li><a href="#">Wireless Access Points</a></li>
					<li><a href="#">Ethernet Switches</a></li>
					<li><a href="#">HD CCTV</a></li>
					
				</ul>
			</li>
			<li><a href="#">Portfolio</a></li>
			
			<li><a href="#">Contact</a></li>
			<li><a href="logout.php">Logout</a></li>
			
        
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li class="navbar-form-wrapper">
				<form class="navbar-form form-inline navbar-right">
					<div class="input-group search-box">								
						<input type="text" id="search" class="form-control" placeholder="Search Here...">
						<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
					</div>
					
				</form>
			
		</ul>
		
	</div>
</nav>
</body>
</html>  