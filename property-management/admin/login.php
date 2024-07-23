<?php
 require("conection.php");
 $obj=new Config();
 $msg="";

  if (isset($_SESSION['admin_id'])) 
  {
    $obj->redirect("index.php");
  }

  if (isset($_POST['login'])) 
  {
    $name=trim($_POST['admin_email']);
    $pass=trim($_POST['password']);


    $result=$obj->myQuery("SELECT * FROM `tbl_admin` WHERE email='{$name}' AND password='{$pass}' ");

    if($result->num_rows ==1)
    {
      $adminData=$result->fetch_assoc();    
      // $obj->showArray($adminData);
      $_SESSION['admin_id']=$adminData['admin_id'];
      $_SESSION['admin']=$adminData['admin_name'];
      
      $obj->redirect("index.php");
    } 
    else
    {
      $msg="Please Enter Valid Email-Id and Password.";
    } 
  }
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <center><p style="color: red;"><?php echo @$msg; ?></p></center>
      <form method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="admin_email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-8">
            <p class="mb-1">
              <a href="#">I forgot my password</a>
            </p>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>

      </form>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
