
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()."assets/img/apple-icon.png"?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()."assets/img/favicon.png"?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard RoboEdu</title>
	<!-- tinymce -->
	<script src="<?php echo base_url()."assets/js/tinymce/tinymce.min.js"?>"></script>
    <script>tinymce.init({ selector: 'textarea#Mce',
            menubar: false,
            relative_urls: false,
            remove_script_host:false,

            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste responsivefilemanager code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager ',
            external_filemanager_path: "<?php echo base_url()."filemanager/"?>" ,
            filemanager_title:"Responsive Filemanager" ,
            external_plugins: { "filemanager" : "<?php echo base_url()."filemanager/plugin.min.js"?>"}
        });</script>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url().'assets/css/animate.min.css'?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url().'assets/css/paper-dashboard.css'?>" rel="stylesheet"/>



    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/themify-icons.css')?>" rel="stylesheet">



    
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    RobotEdu
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url()."index.php/BackLayar/index"?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard </p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url()."index.php/BackLayar/post"?>">
                        <i class="ti-pencil-alt2"></i>
                        <p>Post</p>
                    </a>
                </li>
                <li>
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
                    <a class="navbar-brand" href="#">Dashboard,  <?php echo $this->session->userdata("username"); ?> </a>
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
            
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Post Baru</h4>
                                <p class="category">untuk website</p>
                            </div>
                            <div class="content table-responsive">
                                <form method="POST" action="<?php echo base_url()."index.php/BackLayar/doPost"; ?>" enctype="multipart/form-data">
								<table class="table">
									 <tr>
                                            <td><label>Judul</label></td>
                                            <td>: </td>
                                            <td><input type="text" name="Judul" class="form-control border-input"></td>

									 </tr>
									 <tr>
										<td><label>Kategori</label></td>
										<td>: </td>
										<td>                                            
                                            <input type="text"  name="Kategori" list="ktg" value="" class="form-control border-input">
                                            <datalist id="ktg">      
                                            <?php foreach ($ktg as $k) {?>              
                                                <option><?php echo $k['nama_kategori'];?></option>     
                                            <?php } ?>                                   
                                            </datalist>                                          
                                        </td>
									 </tr>
									 <tr>
										<td><label>Image</label></td>
										<td>: </td>
										<td><input type="file" name="image"></td>
									 </tr>
                                    <tr>
                                        <td><label>Sinopsis</label></td>
                                        <td>: </td>
                                        <td><input name="Sinopsis"  value="" class="form-control border-input"></td>
                                    </tr>
									 <tr>
                                         <td><label>Isi Artikel</label></td>
										<td>: </td>
										<td><textarea name="Artikel" id="Mce"></textarea></td>
									 </tr>
									 <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input type="submit" name="btnSubmit" value="Post" class="btn btn-success"/></td>	
									 </tr>
								</table>
                                </form>
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
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">Mamad & Gamal</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url()."assets/js/bootstrap-checkbox-radio.js"?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url()."assets/js/chartist.min.js"?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()."assets/js/bootstrap-notify.js"?>"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url()."assets/js/paper-dashboard.js"?>"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url()."assets/js/demo.js"?>"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();
        	$.notify({
            	icon: 'ti-user',
            	message: "Selamat Datang di <b>Dashboard RobotEdu</b>"

            },{
                type: 'success',
                timer: 4000
            });
				
    	});
	</script>

</html>
