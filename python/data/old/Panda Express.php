<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'fender123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT INTO restaurant (restName) VALUES ('Panda Express'); "; 

 $sql .= "CREATE TABLE `Panda Express` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'Panda Express', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kung Pao Chicken', 'Good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '14', '2', '55', '0', '13', '1', '5', '15', '240', '11'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '0', 'Sweet &amp; Sour Chicken', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '14', '3', '50', '0', '28', '2', '0', '18', '310', '15'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '1', 'Chicken Egg Roll', 'Not a good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is great! ', '12', '4', '20', '0', '16', '2', '2', '8', '200', '13'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Black Pepper Chicken', 'Good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '12', '2', '80', '0', '11', '2', '4', '13', '200', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Spicy Chicken with Peanuts', 'Great protein to calorie ratio! Calories are very low. Fat percentage is great. Carbohdryate percentage is great! ', '5', '1', '57', '0', '13', '3', '1', '14', '162', '25'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Beef with String Beans', 'Good protein to calorie ratio! Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '9', '2', '20', '0', '11', '2', '0', '12', '170', '16'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '1', 'String Beans with Fried Tofu', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '11', '2', '0', '0', '11', '3', '3', '10', '180', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kung Pao Chicken', 'Good protein to calorie ratio. Calories are very low. Fat percentage is high. ', '9', '1', '42', '0', '7', '3', '1', '10', '156', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken Breast', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken Breast', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Mushroom Chicken', 'Good protein to calorie ratio! Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '9', '1', '55', '0', '10', '1', '4', '14', '180', '13'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '0', 'Samurai Surf &amp; Turf', 'Great protein to calorie ratio! Calories are very low. Fat percentage is not bad. Carbohdryate percentage is good. ', '9', '2', '85', '0', '21', '2', '7', '19', '230', '21'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kobari Beef ', 'Good protein to calorie ratio. Calories are very low. Fat percentage is perfect! Carbohdryate percentage is good. ', '6', '1', '20', '0', '19', '2', '10', '13', '210', '21'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '0', 'Panda Bowl Chicken String Bean with Mixed Veggies ', 'Great protein to calorie ratio! Calories are very low. Fat percentage is perfect! Carbohdryate percentage is not bad. ', '6', '1', '35', '0', '25', '7', '0', '19', '230', '26'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '0', 'Golden Szechuan Fish', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '15', '2', '35', '0', '32', '2', '13', '14', '320', '11'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Shiitake Kale Chicken', 'Great protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '8', '1', '40', '0', '11', '3', '3', '14', '170', '18'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '0', 'Kale and Chicken with Veggies', 'Good protein to calorie ratio! Calories are very low. Fat percentage is good. ', '8', '1', '40', '0', '27', '8', '8', '18', '240', '21'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Shiitaki Kale Chicken', 'Great protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '8', '1', '40', '0', '11', '3', '3', '14', '170', '18'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Shiitake Kale Chicken Breast', 'Great protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '8', '0', '40', '0', '11', '3', '3', '14', '170', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kung Pao Chicken', 'Good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '14', '2', '55', '0', '13', '1', '5', '15', '240', '11'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '0', 'Sweet &amp; Sour Chicken', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '14', '3', '50', '0', '28', '2', '0', '18', '310', '15'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '1', 'Chicken Egg Roll', 'Not a good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is great! ', '12', '4', '20', '0', '16', '2', '2', '8', '200', '13'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Black Pepper Chicken', 'Good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '12', '2', '80', '0', '11', '2', '4', '13', '200', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Spicy Chicken with Peanuts', 'Great protein to calorie ratio! Calories are very low. Fat percentage is great. Carbohdryate percentage is great! ', '5', '1', '57', '0', '13', '3', '1', '14', '162', '25'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Beef with String Beans', 'Good protein to calorie ratio! Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '9', '2', '20', '0', '11', '2', '0', '12', '170', '16'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '1', 'String Beans with Fried Tofu', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '11', '2', '0', '0', '11', '3', '3', '10', '180', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kung Pao Chicken', 'Good protein to calorie ratio. Calories are very low. Fat percentage is high. ', '9', '1', '42', '0', '7', '3', '1', '10', '156', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken Breast', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken Breast', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Mushroom Chicken', 'Good protein to calorie ratio! Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '9', '1', '55', '0', '10', '1', '4', '14', '180', '13'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '0', 'Samurai Surf &amp; Turf', 'Great protein to calorie ratio! Calories are very low. Fat percentage is not bad. Carbohdryate percentage is good. ', '9', '2', '85', '0', '21', '2', '7', '19', '230', '21'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kobari Beef ', 'Good protein to calorie ratio. Calories are very low. Fat percentage is perfect! Carbohdryate percentage is good. ', '6', '1', '20', '0', '19', '2', '10', '13', '210', '21'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kung Pao Chicken', 'Good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '14', '2', '55', '0', '13', '1', '5', '15', '240', '11'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '0', 'Sweet &amp; Sour Chicken', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '14', '3', '50', '0', '28', '2', '0', '18', '310', '15'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '1', 'Chicken Egg Roll', 'Not a good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is great! ', '12', '4', '20', '0', '16', '2', '2', '8', '200', '13'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Black Pepper Chicken', 'Good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '12', '2', '80', '0', '11', '2', '4', '13', '200', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Spicy Chicken with Peanuts', 'Great protein to calorie ratio! Calories are very low. Fat percentage is great. Carbohdryate percentage is great! ', '5', '1', '57', '0', '13', '3', '1', '14', '162', '25'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Beef with String Beans', 'Good protein to calorie ratio! Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '9', '2', '20', '0', '11', '2', '0', '12', '170', '16'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '0', '1', '1', 'String Beans with Fried Tofu', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '11', '2', '0', '0', '11', '3', '3', '10', '180', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kung Pao Chicken', 'Good protein to calorie ratio. Calories are very low. Fat percentage is high. ', '9', '1', '42', '0', '7', '3', '1', '10', '156', '12'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken Breast', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken Breast', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Firecracker Chicken', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. Carbohdryate percentage is low. ', '10', '2', '65', '0', '12', '3', '5', '25', '240', '19'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Mushroom Chicken', 'Good protein to calorie ratio! Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '9', '1', '55', '0', '10', '1', '4', '14', '180', '13'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '0', 'Samurai Surf &amp; Turf', 'Great protein to calorie ratio! Calories are very low. Fat percentage is not bad. Carbohdryate percentage is good. ', '9', '2', '85', '0', '21', '2', '7', '19', '230', '21'); "; 

 $sql .= "INSERT INTO `Panda Express` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Panda Express', '1', '1', '1', 'Kobari Beef ', 'Good protein to calorie ratio. Calories are very low. Fat percentage is perfect! Carbohdryate percentage is good. ', '6', '1', '20', '0', '19', '2', '10', '13', '210', '21'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>