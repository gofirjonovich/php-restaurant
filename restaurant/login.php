<?php 
session_start();
include('./configes/db.php');
if (isset($_POST['send'])) {
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * FROM admins where email='$email' and password='$password' ";
  $query=mysqli_query($connect, $sql);
  $admins=mysqli_fetch_all($query, MYSQLI_ASSOC);
  if(count($admins)>0){
    $_SESSION['send']=true;
    header('Location:../admin/index.php');
  }
}
include('./header.php') ?>
<!-- Start Login Page -->
<div class="card card-info" style="height: 400px">
              <div class="card-body">
                <h2 align="center" class="card-title">Login Page</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" class="form-horizontal">
                <div style="height: 200px" class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-body" align="center">
                  <button style="width:250px" type="submit" name="send" class="btn btn-info" >Log In</button>
                </div>
                <!-- /.card-footer -->
              </form>
</div>
