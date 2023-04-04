<?php 

include('configuration/base_url.php');
include('configuration/db_config.php');

session_destroy();
unset($_SESSION['loggedinUser']);

 echo "<script>alert('User Successfully Logged Out');
    window.location.href='index.php';
    </script>";

?>


