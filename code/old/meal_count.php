 <?php
  mysql_connect('db558054145.db.1and1.com', 'dbo558054145', 'fender123') or die ('I cant connect dude' . mysql_error());
  mysql_select_db('db558054145');

  $restaurants=mysql_query("SELECT * FROM restaurant");

  //cycle through each table based off the master restaurant table/list
  while ($row=mysql_fetch_array($restaurants)) {
    $restName = $row['restName'];
    $restTable = mysql_query("SELECT * FROM `$restName`");
    $meal_count = mysql_num_rows($restTable);
    echo $mealCount;
    echo 'test';
    mysql_query("UPDATE restaurant SET `mealCount`='$meal_count' WHERE restName='$restName'");

  }
 ?>