<?php 



include('connect-to-database.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO deliverydb.deliveryman_details(p_name,id) VALUES('$username', '$password');";
     
$res = mysqli_query($link,$sql);

if($res){
    echo " successs"; 
}
else {
    echo " failed";
}

?>