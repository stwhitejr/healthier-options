<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'fender123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT INTO restaurant (restName) VALUES ('Jack in the Box'); "; 

 $sql .= "CREATE TABLE `Jack in the Box` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'Jack in the Box', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '0', 'Chicken Fajita Pita', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is good. Carbohdryate percentage is not bad. ', '11', '5', '5', '0', '35', '4', '4', '24', '330', '17'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Breakfast Jack', 'Low calories. Fat percentage is not bad. Carbohdryate percentage is not bad. ', '11', '4', '239', '0', '30', '1', '4', '16', '283', '15'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '0', 'Southwest Chicken Salad', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '15', '6', '91', '0', '27', '7', '6', '35', '353', '19'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Chicken Club Salad', 'Great protein to calorie ratio! Low calories. Fat percentage is high. ', '15', '6', '65', '0', '13', '4', '7', '27', '300', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Jumbo Jack', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is great! ', '23', '8', '61', '0', '44', '3', '7', '26', '489', '14'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '0', 'Chicken Breast Pieces', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is low. ', '17', '3', '80', '0', '24', '1', '0', '27', '360', '15'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '0', '0', 'Bruschetta Chicken Ciabatta Sandwich', 'Good protein to calorie ratio. Fat percentage is not bad. Carbohdryate percentage is not bad. ', '24', '7', '85', '0', '67', '4', '6', '42', '640', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Hamburger with Cheese', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '17', '8', '50', '0', '31', '1', '7', '18', '350', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Cheese Sticks, 3 pieces', 'Not a good protein to calorie ratio. Calories are very low. Fat percentage is high. Carbohdryate percentage is great! ', '12', '5', '25', '0', '21', '1', '1', '11', '240', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '14', '6', '40', '0', '30', '1', '6', '16', '310', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '0', '0', 'Ultimate Breakfast Sandwich', 'Good protein to calorie ratio. Fat percentage is a bit high. Carbohdryate percentage is great! ', '27', '11', '540', '0', '46', '2', '5', '36', '573', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '0', '0', 'Philly Cheesesteak', 'Good protein to calorie ratio. Fat percentage is not bad. Carbohdryate percentage is good. ', '22', '11', '90', '0', '55', '3', '6', '35', '580', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '0', 'Breaded Chicken Strips, regular', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is good. ', '25', '6', '80', '0', '36', '3', '1', '35', '500', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '14', '6', '40', '0', '30', '1', '6', '16', '310', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Taquitos, 3 pieces', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '17', '7', '40', '0', '28', '3', '1', '14', '320', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Hamburger deluxe', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '21', '7', '45', '0', '31', '2', '6', '17', '370', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Bacon Chicken Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '24', '6', '40', '0', '39', '2', '4', '19', '440', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Spicy Chicken Biscuit', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '22', '5', '40', '0', '44', '2', '2', '21', '460', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Junior Bacon Cheeseburger', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '21', '8', '46', '0', '32', '1', '6', '19', '387', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Grilled Chicken Salad', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is not bad. Carbohdryate percentage is low. ', '9', '4', '70', '0', '14', '4', '6', '28', '250', '20'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Cheese Sticks, 5 pieces', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '21', '8', '40', '0', '35', '2', '2', '18', '400', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '0', '0', 'Ham &amp; Turkey Pannido', 'Fat percentage is a bit high. Carbohdryate percentage is great! ', '29', '7', '110', '0', '54', '2', '3', '36', '610', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '0', 'Southwestern Chicken Salad', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '14', '6', '83', '0', '26', '5', '6', '33', '350', '19'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Grilled Chicken Salad', 'Perfect protein to calorie ratio! Low calories. Fat percentage is a bit high. Carbohdryate percentage is low. ', '11', '4', '71', '0', '13', '0', '0', '28', '257', '18'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '0', '0', 'Turkey Bacon Cheddar Grilled Sandwich', 'Good protein to calorie ratio. Under 700 calories. Fat percentage is a bit high. Carbohdryate percentage is great! ', '31', '11', '97', '0', '54', '5', '4', '41', '663', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Jr. Bacon Cheeseburger', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is great! ', '16', '7', '48', '0', '29', '1', '3', '19', '347', '14'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Grilled Chicken Strips', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is perfect! ', '6', '1', '115', '0', '5', '0', '3', '43', '240', '22'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Jr. Jack', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '15', '5', '29', '0', '33', '2', '6', '14', '324', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '0', '0', 'Turkey Bacon Cheddar Grilled Sandwich', 'Good protein to calorie ratio. Fat percentage is not bad. Carbohdryate percentage is great! ', '23', '10', '87', '0', '53', '5', '3', '41', '600', '17'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Grilled Chicken Club Salad', 'Perfect protein to calorie ratio! Low calorie meal. Fat percentage is high. ', '20', '8', '95', '0', '12', '4', '5', '37', '360', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Sourdough Cheese Steak Melt', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '26', '9', '65', '0', '41', '3', '6', '28', '484', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Chicken Club Salad', 'Perfect protein to calorie ratio! Low calorie meal. Fat percentage is high. ', '19', '8', '95', '0', '12', '3', '5', '37', '370', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Breakfast Jack', 'Low calories. Fat percentage is not bad. Carbohdryate percentage is not bad. ', '11', '4', '239', '0', '30', '1', '4', '16', '283', '15'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '0', '0', 'Grilled Breakfast Sandwich', 'Fat percentage is a bit high. Carbohdryate percentage is great! ', '28', '10', '487', '0', '53', '4', '4', '35', '599', '12'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '0', '0', 'Chicken Club Salad', 'Good protein to calorie ratio. Fat percentage is high. Carbohdryate percentage is good. ', '28', '9', '65', '0', '36', '5', '4', '32', '510', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '0', 'Egg White and Turkey Sandwich', 'Good protein to calorie ratio! Calories are very low. ', '6', '3', '22', '0', '31', '1', '4', '18', '248', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '0', '0', 'Ultimate Breakfast Sandwich', 'Good protein to calorie ratio. Fat percentage is a bit high. Carbohdryate percentage is great! ', '27', '11', '540', '0', '46', '2', '5', '36', '573', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Grilled Chicken Salad', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is not bad. Carbohdryate percentage is low. ', '9', '4', '72', '0', '14', '1', '6', '28', '245', '19'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Ham Sourdough Melt', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '21', '8', '249', '0', '35', '2', '4', '20', '409', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Cheeseburger', 'Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is not bad. ', '14', '6', '35', '0', '32', '1', '6', '16', '320', '11'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '0', '0', 'Crispy Chicken Strips', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '24', '3', '60', '0', '53', '3', '0', '33', '560', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '1', '0', 'Fish Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is not bad. ', '13', '2', '29', '0', '47', '2', '5', '17', '370', '13'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '1', '1', '1', 'Grilled Chicken Salad ', 'Perfect protein to calorie ratio! Low calories. Fat percentage is a bit high. Carbohdryate percentage is low. ', '11', '4', '72', '0', '18', '4', '9', '28', '274', '18'); "; 

 $sql .= "INSERT INTO `Jack in the Box` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('Jack in the Box', '0', '0', '0', 'Jacks Blazin Bacon Chicken Sandwich', 'Under 700 calories. Fat percentage is a bit high. Carbohdryate percentage is great! ', '33', '8', '80', '0', '62', '3', '7', '36', '691', '11'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>