<?php 

include('configuration/base_url.php');
include('configuration/db_config.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Snapshots Registration</title>
  </head>
  <body>
    
    <div class="container" style="margin-top: 36px;">

        <form method="POST" action="#" enctype="multipart/form-data">

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><strong>Username:</strong></label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><strong>Email:</strong></label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><strong>Contact:</strong></label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="contact" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><strong>Password:</strong></label>
        <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><strong>Profile Pic:</strong></label>
        <input type="file" class="form-control" id="exampleInputEmail1" name="avatar" aria-describedby="emailHelp">
        </div>

        

        <button type="submit" class="btn btn-primary form-control" name="register">Register Here</button>
        </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


<?php

    if(isset($_POST['register']))
    {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $contact = $_POST['contact'];
      $password = $_POST['password'];
      $role = "user";
      $avatar = $_POST['avatar'];

      $targetFolder = "uploads/";
      $fileOrgName = $_FILES['avatar']['name'];
      $fileTempName = $_FILES['avatar']['tmp_name'];
      $imageAddress = $base_url.$targetFolder.$fileOrgName;

      $registerUser = mysqli_query($config,"INSERT INTO user_registration(admin_name,admin_email,admin_contact,admin_password,admin_role,admin_avatar) VALUES('$username','$email','$contact','$password','$role',' $imageAddress')");

      $checkmail = mysqli_query($config,"SELECT admin_email FROM user_registration");


      if(mysqli_num_rows($checkmail)>0)
      {
        echo "<script>alert('Email already exist. Please Login to Access Dashboard')</script>";
      }

      
      elseif($registerUser)
      {
         echo "<script>alert('User Registration Successful')
            window.location.href='registration.php';
        </script>";
        move_uploaded_file($fileTempName,$targetFolder.$fileOrgName);
        

      }
      else
      {
        echo "<script>alert('Nothing Found')</script>";
      }
      



    }

?>