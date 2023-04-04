<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'snapshots';

$config = mysqli_connect($hostname,$username,$password,$dbname);

if(!$config)
{
	echo "Snapshot Connection to Database Failed with Error:" . mysqli_connect_error();
}
else
{
	echo "";
}

?>