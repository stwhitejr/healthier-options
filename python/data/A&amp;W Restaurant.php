<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'lesserEv!l123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT IGNORE INTO restaurant (restName) VALUES ('A&amp;W Restaurant'); "; 

 $sql .= "CREATE TABLE `A&amp;W Restaurant` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'A&amp;W Restaurant', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL UNIQUE, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '22', '7', '55', '0', '35', '1', '8', '21', '409', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Perfect protein to calorie ratio! Low calorie meal. Fat percentage is perfect! Carbohdryate percentage is good. ', '9', '2', '85', '0', '32', '2', '9', '36', '351', '24'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is good. Carbohdryate percentage is great! ', '13', '3', '90', '0', '32', '1', '9', '35', '380', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '22', '7', '55', '0', '32', '1', '6', '20', '400', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '0', '0', 'Crispy Chicken Sandwich', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '4', '65', '0', '52', '2', '8', '30', '531', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '1', 'Extra Chicken Strip', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '10', '1', '20', '0', '11', '1', '1', '9', '170', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Dlx Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '25', '8', '75', '0', '39', '4', '8', '24', '470', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is great! ', '8', '2', '85', '0', '29', '1', '7', '35', '330', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is great! ', '17', '3', '100', '0', '41', '3', '14', '36', '460', '17'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Crispy Chicken Sandwich', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is not bad. High in saturated fat! ', '18', '35', '57', '0', '49', '2', '6', '30', '480', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '0', '0', 'Crispy Chicken Sandwich', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '4', '65', '0', '54', '3', '9', '31', '549', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '24', '8', '72', '0', '36', '1', '7', '23', '440', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Dlx Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '24', '8', '70', '0', '38', '2', '7', '23', '451', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is good. Carbohdryate percentage is great! ', '13', '3', '90', '0', '34', '2', '10', '35', '399', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '0', '0', 'Crispy Chicken Sandwich', 'Good protein to calorie ratio. Fat percentage is not bad. Carbohdryate percentage is not bad. ', '19', '3', '55', '0', '52', '3', '7', '31', '501', '14'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Little Burger Buddy with Cheese', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is good. ', '16', '7', '45', '0', '34', '2', '8', '17', '350', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '1', 'Hand Breaded Chicken Tenders', 'Very high protein to calorie ratio! Low calories. Fat percentage is good. ', '9', '2', '125', '0', '5', '1', '0', '40', '260', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '22', '7', '55', '0', '35', '1', '8', '21', '409', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Perfect protein to calorie ratio! Low calorie meal. Fat percentage is perfect! Carbohdryate percentage is good. ', '9', '2', '85', '0', '32', '2', '9', '36', '351', '24'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is good. Carbohdryate percentage is great! ', '13', '3', '90', '0', '32', '1', '9', '35', '380', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '22', '7', '55', '0', '32', '1', '6', '20', '400', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '0', '0', 'Crispy Chicken Sandwich', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '4', '65', '0', '52', '2', '8', '30', '531', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '1', 'Extra Chicken Strip', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '10', '1', '20', '0', '11', '1', '1', '9', '170', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Dlx Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '25', '8', '75', '0', '39', '4', '8', '24', '470', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is great! ', '8', '2', '85', '0', '29', '1', '7', '35', '330', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is great! ', '17', '3', '100', '0', '41', '3', '14', '36', '460', '17'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Crispy Chicken Sandwich', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is not bad. High in saturated fat! ', '18', '35', '57', '0', '49', '2', '6', '30', '480', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '0', '0', 'Crispy Chicken Sandwich', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '4', '65', '0', '54', '3', '9', '31', '549', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '24', '8', '72', '0', '36', '1', '7', '23', '440', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Dlx Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '24', '8', '70', '0', '38', '2', '7', '23', '451', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '22', '7', '55', '0', '35', '1', '8', '21', '409', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Perfect protein to calorie ratio! Low calorie meal. Fat percentage is perfect! Carbohdryate percentage is good. ', '9', '2', '85', '0', '32', '2', '9', '36', '351', '24'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is good. Carbohdryate percentage is great! ', '13', '3', '90', '0', '32', '1', '9', '35', '380', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '22', '7', '55', '0', '32', '1', '6', '20', '400', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '0', '0', 'Crispy Chicken Sandwich', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '4', '65', '0', '52', '2', '8', '30', '531', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '1', 'Extra Chicken Strip', 'Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '10', '1', '20', '0', '11', '1', '1', '9', '170', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Dlx Hamburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '25', '8', '75', '0', '39', '4', '8', '24', '470', '12'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Perfect protein to calorie ratio! Low calorie meal. Carbohdryate percentage is great! ', '8', '2', '85', '0', '29', '1', '7', '35', '330', '21'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Grilled Chicken Sandwich', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is great! ', '17', '3', '100', '0', '41', '3', '14', '36', '460', '17'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '1', '1', '0', 'Crispy Chicken Sandwich', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is not bad. High in saturated fat! ', '18', '35', '57', '0', '49', '2', '6', '30', '480', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '0', '0', 'Crispy Chicken Sandwich', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '4', '65', '0', '54', '3', '9', '31', '549', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '24', '8', '72', '0', '36', '1', '7', '23', '440', '11'); "; 

 $sql .= "INSERT IGNORE INTO `A&amp;W Restaurant` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('A&amp;W Restaurant', '0', '1', '0', 'Dlx Cheeseburger', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is great! ', '24', '8', '70', '0', '38', '2', '7', '23', '451', '12'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>