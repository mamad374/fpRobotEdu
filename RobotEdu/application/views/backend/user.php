<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard RoboEdu</title>

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
    <link href="<?php echo base_url().'assets/css/themify-icons.css'?>" rel="stylesheet">


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
                    <?php foreach ($usr as $s) { ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="<?php echo base_url()."assets/img/background.jpg"?>" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                               
                                  <img class="avatar border-white" src="<?php echo base_url()."upload/".$s['img']; ?>" alt=""/>
                                  <h4 class="title"><td><?php echo $s['username']; ?></td><br />
                                     <a href="#"><small><?php echo $s['email']; ?></small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    <td><?php echo $s['about']; ?></td> 
                                </p>
                            </div>
                            <hr>
                            
                        </div>                       
                    </div>
                    <?php } ?>  
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header table-responsive">
                                <table>
                                    <tr>                                       
                                        <td style="padding-left: 10px">   
                                            <!--                                         
                                             <button type="button" class="btn btn-default btn-md" onclick="">
                                                  <span class="ti-plus" aria-hidden="true" ></span> Add User
                                             </button>
                                             -->
                                             <a class="btn btn-default btn-md" href="<?php echo base_url()."index.php/BackLayar/validateForm";?>"><span class="ti-plus" aria-hidden="true" ></span> Add User</a>
                                        </td>
                                    </tr>                                   
                                </table>                                
                            </div>                        
                            <div class="content table-responsive">
                               <table class="table">
                                   <tr>                                    
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>                                    
                                    <th>Action</th>                                    
                                  </tr>                                
                                    <?php foreach ($usr as $s) { ?>
                                        <tr>
                                            <td><?php echo $s['Id_pengguna']; ?></td>
                                            <td><?php echo $s['firstname']; ?></td>    
                                            <td><?php echo $s['lastname']; ?></td> 
                                            <td><?php echo $s['email']; ?></td>                                           
                                            <td >       
                                              
                                              <a class="btn btn-danger" href="">Delete</a> 
                                            </td>      
                                        </tr>
                                    <?php } ?>                                 
                               </table>
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
