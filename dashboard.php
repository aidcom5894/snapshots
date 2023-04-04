<?php 
include('configuration/db_config.php');
include('configuration/base_url.php');



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Snapshots|Dashboard</title>
  </head>
  <body>

    <?php 

        $fetchDetails = mysqli_query($config,"SELECT * from user_registration WHERE admin_name='{$_SESSION['loggedinUser']}'");

        while ($row = mysqli_fetch_assoc($fetchDetails))
        {
          $loggedinuser = $row['admin_name'];
          $image = $row['admin_avatar'];
          $regDate = $row['registration_date'];
        }


    ?>

    <div class="container">
          
          <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
          <div class="col-md-4">
          <img src="<?php echo $image; ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
          <div class="card-body">
          <h5 class="card-title"><?php echo  $loggedinuser; ?></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted"><?php echo $regDate; ?></small></p>
          </div>
          </div>
           <a href="logout.php" class="btn btn-danger">Logout</a>
          </div>
          </div>      


    </div>
    
   


    <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="add_images.php">Add Images</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Update Images</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Delete Images</a>
  </li>

</ul>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>