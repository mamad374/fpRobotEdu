<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Dashboard</title>
  
   
   <link href="<?php echo base_url()."assets/css/style_login.css"?>" rel="stylesheet" />
   <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet" />
    <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>


  
</head>

<body>
  <div class="login-page container-fluid">
      <div id="notifications">
          <?php echo $this->session->flashdata('msg'); ?>
      </div>
  <div class="form">
    <h2 style="padding-bottom: 20px">RobotEdu</h2>
    <form class="login-form" action="<?php echo base_url("index.php/Login_con/doLogin"); ?>" method="POST">
      <input type="text" placeholder="username" name="username" required/>
      <input type="password" placeholder="password" name="password" required/>
      <input type="submit" id="btnSubmit" value="Login" />   
    </form>
  </div>
</div>
  <script src="<?php echo base_url()."assets/js/index.js"?>"></script>
  <script>
      $('#notifications').slideDown('slow').delay(1500).slideUp('slow');
  </script>
</body>
</html>
