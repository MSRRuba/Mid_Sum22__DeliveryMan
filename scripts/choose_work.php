<?php
session_start();
require("connect-to-database.php");



$username = $_POST['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Choose Work</title>


</head>
<body>
<?php

$sql_query= "SELECT * FROM deliverydb.delivery_list WHERE id = $username";

$result = mysqli_query($link,$sql_query);
echo " <table>
    <tr>
      <th>ID</th>
      <th>Delivery Location</th>
      <th>Delivery Contact</th>
      <th>Delivery Itemname</th>
    </tr>";
echo "<p>".$res."</p>";
while($prow = mysqli_fetch_array($res)){
                      
      echo "<tr>
      <td>".$prow[id]."</td>
      <td>".$prow[delivery_location]."</td>
      <td>".$prow[delivery_contact]."</td>
      <td>".$prow[delivery_itemname]."</td>
    </tr>
  </table>";
  
   
   
}

?>

</body>
</html>
