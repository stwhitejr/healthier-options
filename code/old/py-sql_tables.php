 <?php
  $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'fender123', 'db558054145');
  if ($conn->connect_error) {
  	die("connection failed:" . $conn->connect_error);
  }
  $sql = '';
 $sql .= "CREATE TABLE test (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'test', `High Protein` int(1) DEFAULT '0',	  `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL, `mealDesc` varchar(100) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT INTO test (mealName, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal) 
 VALUES (1, 1, 1, 1, 1, 1, 1, 1, 1, 1); "; 

  if (!$conn->multi_query($sql)) {
	    echo "Error creating table: " . $conn->error;
	} else {
		echo 'it worked';
	}

	$conn->close();
 ?>