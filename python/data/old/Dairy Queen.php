<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'fender123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT INTO restaurant (restName) VALUES ('Dairy Queen'); "; 

 $sql .= "CREATE TABLE `Dairy Queen` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'Dairy Queen', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '1', 'Grilled Chicken Salad', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '5', '65', '0', '12', '4', '7', '26', '240', '17'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '0', 'BBQ Pork Sandwich', 'Good protein to calorie ratio. Low calories. Fat percentage is perfect! ', '8', '2', '55', '0', '36', '2', '8', '17', '280', '19'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '0', 'Crispy Chicken Salad', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is low. ', '20', '6', '40', '0', '21', '6', '9', '21', '350', '12'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '0', '1', '0', 'DQ Homestyle Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '17', '8', '55', '0', '29', '2', '5', '20', '340', '13'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '0', '1', '0', 'DQ Homestyle Hamburger', 'Low calories. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '12', '5', '45', '0', '29', '2', '5', '17', '290', '13'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '0', '1', '0', 'BBQ Beef Sandwich', 'Low calories. Fat percentage is great. ', '9', '3', '35', '0', '37', '2', '15', '16', '300', '13'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '0', '1', '0', 'Original Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '19', '8', '90', '0', '34', '1', '8', '21', '380', '12'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '1', 'Chicken Strips', 'Good protein to calorie ratio. Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '13', '2', '40', '0', '16', '3', '0', '14', '230', '15'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '0', 'Iron Grilled Turkey Sandwich', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is perfect! Carbohdryate percentage is good. ', '12', '5', '75', '0', '43', '0', '0', '34', '440', '18'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '0', '0', '0', 'Dq Iron Grilled Turkey Sandwich', 'Fat percentage is high. Carbohdryate percentage is great! ', '25', '7', '65', '0', '42', '2', '2', '29', '520', '11'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '0', '0', '0', 'Iron Grill Classic Club', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '26', '0', '90', '0', '42', '2', '3', '32', '560', '14'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '0', 'Popcorn Chicken', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is good. ', '19', '3', '61', '0', '27', '9', '0', '25', '384', '16'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '1', 'Chicken BLT Salad', 'Perfect protein to calorie ratio! Low calorie meal. Fat percentage is high. ', '19', '9', '100', '0', '11', '3', '6', '42', '380', '12'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '1', '0', 'Grilled Chicken Sandwich', 'Great protein to calorie ratio! Low calories. ', '3', '0', '40', '0', '32', '1', '5', '25', '260', '17'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '0', '0', 'Iron Grilled Turkey Sandwich', 'Good protein to calorie ratio. Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '7', '85', '0', '43', '2', '2', '34', '550', '12'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '1', '0', '0', 'Iron Grilled Turkey BLT', 'Good protein to calorie ratio. Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '7', '85', '0', '43', '2', '2', '34', '550', '12'); "; 

 $sql .= "INSERT INTO `Dairy Queen` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Dairy Queen', '0', '1', '0', 'Asian Peanut Salad with Crispy Chicken', 'Low calories. Fat percentage is high. Carbohdryate percentage is good. ', '14', '2', '40', '0', '27', '5', '8', '16', '290', '16'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>