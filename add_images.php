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

    <title>Add Images</title>
  </head>
  <body>

        <div class="container" style="margin-top: 36px;">
          <form method="POST" action="#" enctype="multipart/form-data">

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Select Image</label>
        <input type="file" class="form-control" id="galleryImage" name="galleryImage" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image Class</label>
        <select class="form-select" aria-label="Default select example" name="selectCategory">
          <option selected>Select Image Class</option>
          <option value="isotop-item marketing">Marketing</option>
          <option value="isotop-item application">Application</option>
          <option value="isotop-item design">Design</option>
          <option value="isotop-item dev">Dev</option>
          <option value="isotop-item marketing application">Marketing and Application</option>
          <option value="isotop-item marketing design">Marketing and Design</option>
          <option value="isotop-item marketing dev">Marketing and Dev</option>
          <option value="isotop-item application design">Application and Design</option>
          <option value="isotop-item application dev">Application and Dev</option>
          <option value="isotop-item application marketing">Application and Marketing</option>
          <option value="isotop-item design dev">Design and Dev</option>
          <option value="isotop-item design marketing">Design and Marketing</option>
          <option value="isotop-item design application">Design and Application</option>
          <option value="isotop-item dev marketing">Dev and Marketing</option>
          <option value="isotop-item dev application">Dev and Application</option>
          <option value="isotop-item dev design">Dev and Design</option>

        </select>
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image Title</label>
        <input type="text" class="form-control" id="galleryImage" name="imageTitle" aria-describedby="emailHelp">
        </div>

       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image Subtitle</label>
        <input type="text" class="form-control" id="galleryImage" name="imagesubt" aria-describedby="emailHelp">
        </div>

       

        <button type="submit" class="btn btn-primary form-control" name="submit">Submit</button>
        </form>
  
    
        </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>


<?php 

$targetFolder = "uploads/";
$fileOrgName = $_FILES['galleryImage']['name'];
$fileTempName = $_FILES['galleryImage']['tmp_name'];
$imageaddress = $base_url.$targetFolder.$fileOrgName;

$imageCategory = $_POST['selectCategory'];
$imageHeading = $_POST['imageTitle'];
$imageSubHeading = $_POST['imagesubt'];


if(isset($_POST['submit']))
{
  $saveImage = mysqli_query($config,"INSERT INTO image_deck(gallery_image,image_class,image_title,image_subtitle) VALUES('$imageaddress','$imageCategory','$imageHeading','$imageSubHeading')");

  if($saveImage)
  {
    echo "<script>
      alert('Image Uploaded Successfully');
      window.location.href='dashboard.php';
    </script>";
    move_uploaded_file($fileTempName,$targetFolder.$fileOrgName);
  }
  else
  {
    echo "<script>
      alert('Image Upload Failed');
      window.location.href='add_images.php';
    </script>";
  }
}


?>