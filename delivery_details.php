<?php require('scripts/connect-to-database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Delivery Details</title>


</head>
<body>
<?php $sql= "SELECT * FROM deliverydb.delivery_list";

$res = mysqli_query($link,$sql);
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