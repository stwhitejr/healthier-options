<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'lesserEv!l123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT IGNORE INTO restaurant (restName) VALUES ('Taco Del Mar'); "; 

 $sql .= "CREATE TABLE `Taco Del Mar` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'Taco Del Mar', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL UNIQUE, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '1', 'taco, hard, beef', 'Good protein to calorie ratio. Low calories. Fat percentage is high. Carbohdryate percentage is low. ', '15', '6', '30', '0', '17', '1', '1', '17', '270', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'taco, soft, beef', 'Good protein to calorie ratio. Low calories. Fat percentage is not bad. Carbohdryate percentage is not bad. ', '11', '5', '30', '0', '28', '4', '1', '18', '280', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Egg &amp; Cheese breakfast burrito, refried', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is not bad. ', '19', '6', '235', '0', '59', '6', '3', '22', '490', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'taco, soft, chicken', 'Good protein to calorie ratio! Low calories. Fat percentage is good. Carbohdryate percentage is not bad. ', '9', '3', '45', '0', '27', '3', '1', '19', '260', '19'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'taco, soft, fish', 'Not a good protein to calorie ratio. Low calories. Fat percentage is a bit high. ', '11', '3', '30', '0', '34', '3', '1', '12', '270', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '1', 'taco, hard, chicken', 'Good protein to calorie ratio. Low calories. Fat percentage is high. Carbohdryate percentage is low. ', '13', '4', '45', '0', '16', '1', '1', '17', '260', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'taco, soft, pork', 'Good protein to calorie ratio. Low calories. Fat percentage is not bad. Carbohdryate percentage is not bad. ', '10', '4', '45', '0', '28', '3', '1', '16', '260', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '0', '0', 'almost super, chicken, refried', 'Not a good protein to calorie ratio. Fat percentage is not bad. ', '21', '7', '50', '0', '72', '6', '4', '28', '590', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '0', '0', 'almost super, pork, refried', 'Not a good protein to calorie ratio. Fat percentage is not bad. ', '21', '7', '50', '0', '73', '6', '4', '26', '590', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '1', 'Chicken', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is a bit high. ', '7', '2', '60', '0', '1', '0', '0', '24', '170', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'almost jumbo, pork, refried', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is perfect! Lots of carbohdyrates. ', '13', '3', '30', '0', '70', '6', '3', '22', '490', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '1', 'taco, hard, pork', 'Low calories. Fat percentage is high. Carbohdryate percentage is low. ', '14', '4', '45', '0', '17', '1', '1', '15', '260', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'carb modified almost burrito, chicken', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '15', '6', '50', '0', '25', '11', '4', '29', '320', '19'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'almost jumbo, beef, refried', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is perfect! Lots of carbohdyrates. ', '14', '4', '20', '0', '70', '6', '3', '24', '500', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '0', '0', 'quesadilla, beef', 'Good protein to calorie ratio. Fat percentage is a bit high. Carbohdryate percentage is great! High in saturated fat! ', '37', '16', '95', '0', '66', '6', '5', '49', '800', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'carb modifed almost burrito, pork', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '16', '6', '50', '0', '26', '11', '4', '27', '320', '18'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '1', 'Egg &amp; Cheese taco, flour, refried', 'Not a good protein to calorie ratio. Calories are very low. Fat percentage is high. Carbohdryate percentage is great! ', '10', '3', '125', '0', '17', '1', '1', '9', '200', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '0', '0', 'almost super, beef, refried', 'Not a good protein to calorie ratio. Fat percentage is not bad. ', '23', '8', '40', '0', '73', '7', '4', '28', '610', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Bean and Cheese Burrito', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is great. ', '12', '5', '22', '0', '53', '7', '1', '16', '382', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '1', 'Beef', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is high. ', '11', '5', '35', '0', '4', '1', '1', '24', '200', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'carb modified almost burrito, beef', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is good. ', '17', '7', '40', '0', '26', '12', '4', '29', '340', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '1', 'Chicken Taco', 'Calories are very low. Fat percentage is high. Carbohdryate percentage is good. ', '12', '4', '45', '0', '17', '2', '1', '13', '227', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '1', 'Pork Taco', 'Calories are very low. Fat percentage is high. Carbohdryate percentage is good. ', '11', '4', '40', '0', '17', '2', '1', '12', '227', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Shred Beef Mondito Burrito', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is great. Lots of carbohdyrates. ', '14', '5', '35', '0', '65', '5', '3', '21', '460', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Pork Mondito Burrito', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is great. Lots of carbohdyrates. ', '13', '5', '35', '0', '65', '5', '3', '20', '450', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Chicken Mondito Burrito', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is great. Lots of carbohdyrates. ', '14', '5', '40', '0', '65', '5', '3', '21', '460', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Carne Asada Steak Mondito Burrito', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is great. Lots of carbohdyrates. ', '13', '5', '25', '0', '65', '5', '3', '19', '440', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Veggie Taco Refried Beans', 'Not a good protein to calorie ratio. Calories are very low. Fat percentage is not bad. ', '7', '3', '10', '0', '25', '4', '2', '8', '180', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'Shredded Beef Taco', 'Good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is good. ', '9', '4', '35', '0', '20', '2', '2', '14', '210', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '1', 'Pork Taco', 'Good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is good. ', '9', '4', '35', '0', '19', '2', '2', '13', '200', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Ground Beef Taco', 'Calories are very low. Fat percentage is high. Carbohdryate percentage is great! ', '12', '6', '30', '0', '20', '2', '2', '12', '230', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'Chicken Taco', 'Good protein to calorie ratio. Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is good. ', '9', '4', '40', '0', '20', '2', '2', '14', '210', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Carne Asada Steak Taco', 'Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '8', '3', '25', '0', '20', '2', '2', '11', '190', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'Shredded Beef Cabo Salad', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is great! ', '19', '7', '70', '0', '36', '5', '8', '26', '420', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'Pork Cabo Salad', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '18', '6', '70', '0', '36', '5', '7', '25', '400', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Ground Beef Cabo Salad', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is good. ', '26', '10', '65', '0', '37', '6', '8', '24', '470', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'Chicken Cabo Salad', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is great! ', '19', '6', '80', '0', '36', '5', '8', '26', '420', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Carne Asada Steak Cabo Salad', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '18', '6', '55', '0', '36', '5', '7', '22', '380', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '0', '0', 'Carne Asada Steak Taco Salad', 'Not a good protein to calorie ratio. Fat percentage is a bit high. Carbohdryate percentage is good. ', '29', '8', '55', '0', '59', '7', '5', '29', '610', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '0', '0', 'Baja Bowl Mondo Shredded Beef', 'Fat percentage is good. ', '17', '6', '70', '0', '62', '6', '3', '31', '520', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Baja Bowl Mondo Pork', 'Low calorie meal. Fat percentage is great. ', '15', '6', '70', '0', '61', '6', '2', '29', '500', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '0', '0', 'Baja Bowl Mondo Fish', 'Not a good protein to calorie ratio. Very high percentage of fat. Carbohdryate percentage is great! ', '34', '8', '75', '0', '46', '9', '4', '24', '570', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '0', '0', 'Baja Bowl Mondo Chicken', 'Fat percentage is good. ', '17', '6', '80', '0', '62', '6', '3', '31', '520', '14'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Baja Bowl Mondo Carne Asada', 'Low calorie meal. Fat percentage is great. ', '15', '6', '55', '0', '62', '6', '2', '26', '490', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Baja Bowl Mondito Shredded Beef', 'Low calories. Fat percentage is great. ', '8', '3', '35', '0', '31', '3', '1', '15', '260', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '0', 'Baja Bowl Mondito Pork', 'Good protein to calorie ratio. Calories are very low. Fat percentage is good. ', '8', '3', '35', '0', '31', '3', '1', '15', '250', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Baja Bowl Mondito Ground Beef', 'Low calories. Fat percentage is a bit high. ', '12', '5', '30', '0', '31', '3', '1', '14', '280', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Baja Bowl Mondito Fish', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '17', '4', '35', '0', '27', '6', '2', '13', '310', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Baja Bowl Mondito Chicken', 'Low calories. Fat percentage is great. ', '8', '3', '40', '0', '31', '3', '1', '15', '260', '17'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Baja Bowl Mondito Carne Asada', 'Calories are very low. Fat percentage is great. ', '7', '3', '25', '0', '31', '3', '1', '13', '240', '16'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '1', 'Extra Fish ', 'Calories are very low. Fat percentage is high. Carbohdryate percentage is good. ', '8', '0', '35', '0', '12', '1', '0', '9', '160', '15'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '1', 'Taco Carne Asada Steak', 'Calories are very low. Fat percentage is high. Carbohdryate percentage is good. ', '10', '3', '25', '0', '15', '2', '1', '10', '190', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '1', '1', '1', 'Breakfast Taco', 'Good protein to calorie ratio. Calories are very low. Fat percentage is high. Carbohdryate percentage is good. ', '9', '3', '220', '0', '13', '1', '1', '11', '180', '13'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Breakfast Quesadila', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '23', '9', '320', '0', '37', '3', '2', '22', '440', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Breakfast Quesadila', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '16', '6', '310', '0', '36', '2', '2', '18', '350', '12'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '0', 'Breakfast Burrito', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. ', '20', '7', '310', '0', '51', '6', '3', '21', '460', '11'); "; 

 $sql .= "INSERT IGNORE INTO `Taco Del Mar` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Taco Del Mar', '0', '1', '1', 'Shredded Beef Taco', 'Calories are very low. Fat percentage is high. Carbohdryate percentage is good. ', '11', '4', '35', '0', '15', '2', '1', '12', '210', '13'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>