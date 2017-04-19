<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'lesserEv!l123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT IGNORE INTO restaurant (restName) VALUES ('Sonic'); "; 

 $sql .= "CREATE TABLE `Sonic` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'Sonic', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL UNIQUE, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '1', '1', '0', 'Grilled Chicken Wrap', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is great. Carbohdryate percentage is good. ', '12', '3', '72', '0', '37', '1', '3', '27', '386', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '1', '1', '0', 'Grilled Chicken Sandwich', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is good. ', '17', '2', '80', '0', '44', '3', '7', '32', '450', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '1', '1', '1', 'Grilled Chicken Salad', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is low. ', '14', '6', '95', '0', '19', '4', '8', '28', '310', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '1', '1', '0', 'Grilled Chicken Wrap without Ranch dressing', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is great. Carbohdryate percentage is good. ', '12', '3', '65', '0', '38', '2', '1', '29', '393', '20'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '0', '1', '0', 'Jumbo Popcorn Chicken - Snack', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is good. ', '22', '4', '45', '0', '27', '3', '1', '18', '380', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '1', '1', '0', 'Santa Fe Chicken Salad', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '15', '6', '95', '0', '29', '6', '8', '30', '370', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '1', '1', '1', 'Chicken Strips (2)', 'Good protein to calorie ratio. Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '11', '2', '35', '0', '13', '1', '0', '14', '210', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '1', '1', '0', 'Chicken Strip Snack', 'Good protein to calorie ratio. Low calories. Fat percentage is a bit high. Carbohdryate percentage is great! ', '13', '2', '35', '0', '22', '0', '0', '19', '272', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '0', '1', '0', 'Chicken Strip Wrap without Ranch dressing', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is great. ', '13', '2', '23', '0', '53', '2', '1', '20', '428', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '0', '1', '0', 'Breakfast Bistro - Ham, Egg &amp; Cheese', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '21', '7', '325', '0', '35', '2', '6', '25', '430', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Sonic` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Sonic', '0', '1', '0', 'Jr. Breakfast Burrito', 'Not a good protein to calorie ratio. Low calories. Fat percentage is high. Carbohdryate percentage is great! ', '15', '7', '140', '0', '23', '0', '0', '13', '280', '12'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>