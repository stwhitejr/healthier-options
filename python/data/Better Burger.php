<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'lesserEv!l123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT IGNORE INTO restaurant (restName) VALUES ('Better Burger'); "; 

 $sql .= "CREATE TABLE `Better Burger` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'Better Burger', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL UNIQUE, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '70', '0', '34', '2', '0', '30', '345', '19'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef hot dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is good. ', '10', '3', '30', '0', '21', '2', '0', '14', '220', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Chicken burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '8', '1', '45', '0', '33', '2', '0', '28', '325', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef burger', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '20', '8', '110', '0', '33', '2', '0', '34', '445', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Beef burger', 'Great protein to calorie ratio! Low calories. Very high percentage of fat. ', '17', '8', '110', '0', '1', '0', '0', '26', '265', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is not bad. ', '7', '2', '35', '0', '21', '2', '0', '11', '180', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Ostrich burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '85', '0', '32', '2', '0', '36', '340', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy burger', 'Good protein to calorie ratio! Low calories. Lots of carbohdyrates. ', '4', '0', '0', '0', '44', '7', '0', '23', '300', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Tuna burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '6', '1', '62', '0', '33', '2', '0', '36', '330', '20'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Ostrich Burger', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is good. ', '5', '2', '85', '0', '0', '0', '0', '28', '155', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy dog', 'Perfect protein to calorie ratio! Calories are very low. ', '3', '0', '0', '0', '28', '4', '0', '22', '210', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '70', '0', '34', '2', '0', '30', '345', '19'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef hot dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is good. ', '10', '3', '30', '0', '21', '2', '0', '14', '220', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Chicken burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '8', '1', '45', '0', '33', '2', '0', '28', '325', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef burger', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '20', '8', '110', '0', '33', '2', '0', '34', '445', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Beef burger', 'Great protein to calorie ratio! Low calories. Very high percentage of fat. ', '17', '8', '110', '0', '1', '0', '0', '26', '265', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is not bad. ', '7', '2', '35', '0', '21', '2', '0', '11', '180', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Ostrich burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '85', '0', '32', '2', '0', '36', '340', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy burger', 'Good protein to calorie ratio! Low calories. Lots of carbohdyrates. ', '4', '0', '0', '0', '44', '7', '0', '23', '300', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Tuna burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '6', '1', '62', '0', '33', '2', '0', '36', '330', '20'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Ostrich Burger', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is good. ', '5', '2', '85', '0', '0', '0', '0', '28', '155', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy dog', 'Perfect protein to calorie ratio! Calories are very low. ', '3', '0', '0', '0', '28', '4', '0', '22', '210', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '70', '0', '34', '2', '0', '30', '345', '19'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef hot dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is good. ', '10', '3', '30', '0', '21', '2', '0', '14', '220', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Chicken burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '8', '1', '45', '0', '33', '2', '0', '28', '325', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef burger', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '20', '8', '110', '0', '33', '2', '0', '34', '445', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Beef burger', 'Great protein to calorie ratio! Low calories. Very high percentage of fat. ', '17', '8', '110', '0', '1', '0', '0', '26', '265', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is not bad. ', '7', '2', '35', '0', '21', '2', '0', '11', '180', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Ostrich burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '85', '0', '32', '2', '0', '36', '340', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy burger', 'Good protein to calorie ratio! Low calories. Lots of carbohdyrates. ', '4', '0', '0', '0', '44', '7', '0', '23', '300', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Tuna burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '6', '1', '62', '0', '33', '2', '0', '36', '330', '20'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Ostrich Burger', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is good. ', '5', '2', '85', '0', '0', '0', '0', '28', '155', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy dog', 'Perfect protein to calorie ratio! Calories are very low. ', '3', '0', '0', '0', '28', '4', '0', '22', '210', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '70', '0', '34', '2', '0', '30', '345', '19'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef hot dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is good. ', '10', '3', '30', '0', '21', '2', '0', '14', '220', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Chicken burger', 'Great protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '8', '1', '45', '0', '33', '2', '0', '28', '325', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Beef burger', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '20', '8', '110', '0', '33', '2', '0', '34', '445', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Beef burger', 'Great protein to calorie ratio! Low calories. Very high percentage of fat. ', '17', '8', '110', '0', '1', '0', '0', '26', '265', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Turkey dog', 'Good protein to calorie ratio. Calories are very low. Fat percentage is not bad. ', '7', '2', '35', '0', '21', '2', '0', '11', '180', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Ostrich burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is good. ', '8', '2', '85', '0', '32', '2', '0', '36', '340', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy burger', 'Good protein to calorie ratio! Low calories. Lots of carbohdyrates. ', '4', '0', '0', '0', '44', '7', '0', '23', '300', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Tuna burger', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is not bad. ', '6', '1', '62', '0', '33', '2', '0', '36', '330', '20'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '1', 'Ostrich Burger', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is good. ', '5', '2', '85', '0', '0', '0', '0', '28', '155', '21'); "; 

 $sql .= "INSERT IGNORE INTO `Better Burger` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Better Burger', '1', '1', '0', 'Soy dog', 'Perfect protein to calorie ratio! Calories are very low. ', '3', '0', '0', '0', '28', '4', '0', '22', '210', '18'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>