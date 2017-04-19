 <?php
  $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'fender123', 'db558054145');
  if ($conn->connect_error) {
  	die("connection failed:" . $conn->connect_error);
  }

  $sql = "INSERT INTO %tablename (mealName, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal)
  VALUES (mealName, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal)";

  if ($conn->query($sql) === TRUE) {
    echo "Table X created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$conn->close();
 ?>