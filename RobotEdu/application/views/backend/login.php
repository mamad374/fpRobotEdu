<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Dashboard</title>
  
   
   <link href="<?php echo base_url()."assets/css/style_login.css"?>" rel="stylesheet" />
   <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet" />
  
</head>

<body>
  <div class="login-page container-fluid">
  <div class="form">
    <h2 style="padding-bottom: 20px">RobotEdu</h2>
    <form class="login-form" action="<?php echo base_url("index.php/Login_con/doLogin"); ?>" method="POST">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password" />
      <input type="submit" id="btnSubmit" value="Login" />   
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="assets/js/index.js"></script>

</body>
</html>
