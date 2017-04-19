 <?php
  include('../config/config.php');

  $restaurants=$conn->query("SELECT * FROM restaurant");

  //cycle through each table based off the master restaurant table/list
  while ($row=$restaurants->fetch_assoc()) {
    $restName = $row['restName'];
    $restTable = $conn->query("SELECT * FROM `$restName`");
    $meal_count = $restTable->num_rows;
    echo $mealCount;
    echo $restName;
    $conn->query("UPDATE restaurant SET `mealCount`='$meal_count' WHERE restName='$restName'");
  }
  $conn->close();
 ?>