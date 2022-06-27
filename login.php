<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: homePage.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $query = "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'";
  $sth = $conn->query($query);
  $result = $sth->fetchAll();
  if(count($result) > 0){
    foreach($result as $res){
    if($password == $res['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $res["id"];
      header("Location: homePage.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  } }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
      <div class="col-md-9 col-lg-6 col-xl-5 mt-5">
        <img src="https://th.bing.com/th/id/R.5ec8e0e1a0da5dc68aa2d555be350c46?rik=ZJSo39B7eQIh6Q&pid=ImgRaw&r=0"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 ">
        <form  action="" method="post">
          
            

          <!-- Email input -->
          <div class="form-outline">
          <label class="form-label mt-2" for="form3Example3" >Email address</label>  
          <input type="email" id="form3Example3" name="usernameemail" class="form-control form-control-lg "
              placeholder="Enter a valid email address" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4" >Password</label>  
          <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
              placeholder="Enter password" />
           
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg mb-2" name="submit"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary mt-5">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
