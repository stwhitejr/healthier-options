<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'lesserEv!l123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT IGNORE INTO restaurant (restName) VALUES ('Long John Silvers'); "; 

 $sql .= "CREATE TABLE `Long John Silvers` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'Long John Silvers', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL UNIQUE, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '0', 'Shrimp &amp; Seafood Salad', 'Good protein to calorie ratio. Low calories. Fat percentage is a bit high. Carbohdryate percentage is great! ', '12', '4', '85', '0', '22', '4', '6', '18', '260', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Chicken Sandwich', 'Not a good protein to calorie ratio. Low calories. Fat percentage is not bad. ', '11', '2', '20', '0', '38', '3', '2', '14', '300', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Snack Box Parmesan Fish Bites', 'Low calories. Fat percentage is high. Carbohdryate percentage is low. ', '15', '3', '40', '0', '17', '2', '0', '14', '260', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Clam Chowder Bowl', 'Not a good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '10', '4', '25', '0', '23', '1', '8', '9', '220', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Ultimate Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '1', 'Shrimp Scampi ', 'Great protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '13', '2', '135', '0', '3', '0', '1', '17', '200', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Battered Alaskan Pollock Fish', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '15', '3', '40', '0', '14', '1', '0', '12', '230', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '0', 'Shrimp &amp; Seafood Salad', 'Good protein to calorie ratio. Low calories. Fat percentage is a bit high. Carbohdryate percentage is great! ', '12', '4', '85', '0', '22', '4', '6', '18', '260', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Chicken Sandwich', 'Not a good protein to calorie ratio. Low calories. Fat percentage is not bad. ', '11', '2', '20', '0', '38', '3', '2', '14', '300', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Snack Box Parmesan Fish Bites', 'Low calories. Fat percentage is high. Carbohdryate percentage is low. ', '15', '3', '40', '0', '17', '2', '0', '14', '260', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Clam Chowder Bowl', 'Not a good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '10', '4', '25', '0', '23', '1', '8', '9', '220', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Ultimate Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '1', 'Shrimp Scampi ', 'Great protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '13', '2', '135', '0', '3', '0', '1', '17', '200', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Battered Alaskan Pollock Fish', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '15', '3', '40', '0', '14', '1', '0', '12', '230', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '0', 'Shrimp &amp; Seafood Salad', 'Good protein to calorie ratio. Low calories. Fat percentage is a bit high. Carbohdryate percentage is great! ', '12', '4', '85', '0', '22', '4', '6', '18', '260', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Chicken Sandwich', 'Not a good protein to calorie ratio. Low calories. Fat percentage is not bad. ', '11', '2', '20', '0', '38', '3', '2', '14', '300', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Snack Box Parmesan Fish Bites', 'Low calories. Fat percentage is high. Carbohdryate percentage is low. ', '15', '3', '40', '0', '17', '2', '0', '14', '260', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Clam Chowder Bowl', 'Not a good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '10', '4', '25', '0', '23', '1', '8', '9', '220', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Ultimate Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '1', 'Shrimp Scampi ', 'Great protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '13', '2', '135', '0', '3', '0', '1', '17', '200', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Battered Alaskan Pollock Fish', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '15', '3', '40', '0', '14', '1', '0', '12', '230', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '0', 'Shrimp &amp; Seafood Salad', 'Good protein to calorie ratio. Low calories. Fat percentage is a bit high. Carbohdryate percentage is great! ', '12', '4', '85', '0', '22', '4', '6', '18', '260', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Chicken Sandwich', 'Not a good protein to calorie ratio. Low calories. Fat percentage is not bad. ', '11', '2', '20', '0', '38', '3', '2', '14', '300', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Snack Box Parmesan Fish Bites', 'Low calories. Fat percentage is high. Carbohdryate percentage is low. ', '15', '3', '40', '0', '17', '2', '0', '14', '260', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Clam Chowder Bowl', 'Not a good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '10', '4', '25', '0', '23', '1', '8', '9', '220', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '0', 'Ultimate Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '18', '4', '40', '0', '46', '3', '2', '17', '420', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '1', '1', '1', 'Shrimp Scampi ', 'Great protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '13', '2', '135', '0', '3', '0', '1', '17', '200', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Long John Silvers` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Long John Silvers', '0', '1', '1', 'Battered Alaskan Pollock Fish', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '15', '3', '40', '0', '14', '1', '0', '12', '230', '11'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>