<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard RobotEdu</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url().'assets/css/animate.min.css'?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url().'assets/css/paper-dashboard.css'?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url().'assets/css/demo.css'?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/themify-icons.css')?>" rel="stylesheet">


     <!--   Core JS Files   -->
    <script src="<?php echo base_url()."assets/js/jquery-1.10.2.js"?>" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url()."assets/js/bootstrap-checkbox-radio.js"?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url()."assets/js/chartist.min.js"?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()."assets/js/bootstrap-notify.js"?>"></script>

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    RobotEdu
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url()."index.php/BackLayar/index"?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url()."index.php/BackLayar/post"?>">
                        <i class="ti-pencil-alt2"></i>
                        <p>Post</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url()."index.php/BackLayar/usrList"?>">
                        <i class="ti-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url()."index.php/BackLayar/kategori"?>">
                        <i class="ti-flag-alt"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url()."index.php/BackLayar/subscribeShow"?>">
                        <i class="ti-email"></i>
                        <p>Subscribe</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class = "navbar navbar-default" role = "navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-col">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse" id="nav-col">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p class="notification">5</p>
                                <p>Notifications</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Login_con/logout' ?>">
                                <i class="ti-user"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">    
                    <div class="col-lg-1 col-md-12"></div>                
                    <div class="col-lg-10 col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add User</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="<?php echo base_url()."index.php/BackLayar/validateForm"; ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Company" value="RobotEdu">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input name="Username" type="text" class="form-control border-input" placeholder="Username" value="">
                                                <?php echo form_error('Username','<div class="alert alert-danger">','</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input name="Email" type="email" class="form-control border-input" placeholder="Email">
                                                <?php echo form_error('Email','<div class="alert alert-danger">','</div>'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>FirstName</label>
                                                <input name="Firstname" type="text" class="form-control border-input" placeholder="FirstName" value="">
                                                <?php echo form_error('Firstname','<div class="alert alert-danger">','</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>LastName</label>
                                                <input name="Lastname" type="text" class="form-control border-input" placeholder="LastName" value="">
                                                <?php echo form_error('Lastname','<div class="alert alert-danger">','</div>'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input name="Address" type="text" class="form-control border-input" placeholder="Home Address" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="Password" type="password" class="form-control border-input" placeholder="password" value="">
                                                <?php echo form_error('Password','<div class="alert alert-danger">','</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Re-Type Password</label>
                                                <input name="Repass" type="password" class="form-control border-input" placeholder="Re-Type password" value="">
                                                <?php echo form_error('Repass','<div class="alert alert-danger">','</div>'); ?>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input name="img" type="file" class="form-control border-input" placeholder="Country" value="">
                                                    
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea name="About" class="form-control border-input" value="">
                                                    
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add User</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url()."assets/js/paper-dashboard.js"?>"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url()."assets/js/demo.js"?>"></script>

</html>
