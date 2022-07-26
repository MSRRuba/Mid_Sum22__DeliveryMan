<?php 



include('connect-to-database.php');
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "UPDATE deliveryman_db.deliveryman
SET bio='$username',
location_d = '$password'

WHERE id='$id';";
     
$res = mysqli_query($link,$sql);

if($res){
    echo " successs"; 
}
else {
    echo " failed";
}

?>