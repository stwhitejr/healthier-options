<?php $conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'fender123', 'db558054145'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = '';
 $sql .= "INSERT INTO restaurant (restName) VALUES ('KFC Chicken'); "; 

 $sql .= "CREATE TABLE `KFC Chicken` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT 'KFC Chicken', `High Protein` int(1) DEFAULT '0',     `Gluten Free` tinyint(1) DEFAULT '0', `Low Calorie` tinyint(1) DEFAULT '0', `Low Carbs` tinyint(1) DEFAULT '0',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Chicken Breast', 'Perfect protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. ', '14', '3', '145', '0', '13', '2', '0', '36', '320', '17'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Thigh', 'Great protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '17', '4', '165', '0', '12', '0', '0', '22', '250', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Crispy Chicken Strips', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is high. ', '18', '2', '78', '0', '15', '0', '2', '30', '348', '12'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Tender Roast Chicken Breast with Skin', 'Very high protein to calorie ratio! Low calories. Fat percentage is not bad. ', '10', '3', '151', '0', '2', '0', '0', '37', '251', '19'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '1', '0', 'Snacker', 'Not a good protein to calorie ratio. Low calorie meal. Fat percentage is good. Carbohdryate percentage is good. ', '11', '1', '25', '0', '29', '2', '3', '13', '320', '17'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Ec Chicken- Drumstick', 'Good protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '10', '2', '56', '0', '5', '0', '0', '12', '153', '12'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Tender Roast Chicken Thigh with Skin', 'Great protein to calorie ratio! Calories are very low. Fat percentage is high. ', '12', '3', '120', '0', '0', '0', '0', '18', '207', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '0', '0', 'Oven Roasted Twister', 'Fat percentage is a bit high. Carbohdryate percentage is good. ', '23', '4', '70', '0', '46', '4', '10', '29', '510', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Ec Chicken- Whole Wing', 'Good protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '11', '2', '55', '0', '6', '1', '0', '12', '170', '12'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Crispy Strips (2 pieces)', 'Good protein to calorie ratio! Low calories. Very high percentage of fat. ', '16', '3', '50', '0', '11', '0', '0', '19', '270', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '0', '0', 'Boneless Fiery Buffalo Wings (6)', 'Fat percentage is high. Carbohdryate percentage is great! ', '25', '4', '35', '0', '44', '1', '1', '30', '520', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '1', '0', 'Kfc Snacker, Buffalo', 'Low calories. Fat percentage is great. ', '8', '2', '25', '0', '32', '2', '4', '14', '260', '17'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Grilled Chicken - Breast ', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is great. ', '7', '2', '135', '0', '0', '0', '0', '40', '220', '22'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '1', '0', 'Kfc Snacker, Fish', 'Not a good protein to calorie ratio. Low calories. Fat percentage is not bad. ', '10', '2', '25', '0', '34', '2', '6', '13', '270', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Original Receipe Chicken Sandwich', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is a bit high. Carbohdryate percentage is low. ', '13', '4', '60', '0', '21', '0', '0', '29', '320', '16'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '0', '0', 'Boneless Hbbq Wings (6)', 'Fat percentage is a bit high. Carbohdryate percentage is great! ', '24', '4', '65', '0', '42', '1', '6', '30', '510', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Tender Roast Sandwich', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is low. ', '19', '4', '70', '0', '24', '1', '0', '31', '390', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Hot &amp; Spicy Whole Chicken Wing', 'Good protein to calorie ratio. Calories are very low. Very high percentage of fat. Carbohdryate percentage is low. ', '11', '3', '60', '0', '9', '0', '0', '11', '180', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Oven Roasted Strips (3 pieces)', 'Very high protein to calorie ratio! Calories are very low. ', '4', '2', '85', '0', '10', '1', '5', '32', '210', '17'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Oven Roasted Strips Meal', 'Great protein to calorie ratio! Low calorie meal. ', '7', '2', '90', '0', '50', '6', '8', '38', '420', '18'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '1', '0', 'Kfc Snacker, Ultimate Cheese', 'Low calories. Fat percentage is not bad. ', '11', '2', '25', '0', '32', '1', '5', '15', '280', '15'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Triple Crunch Zinger Chicken Sandwich', 'Good protein to calorie ratio. Low calorie meal. Fat percentage is high. Carbohdryate percentage is good. ', '23', '6', '70', '0', '34', '1', '0', '28', '460', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Honey Bbq Strips (3 pieces)', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is not bad. Carbohdryate percentage is great! ', '15', '4', '45', '0', '33', '4', '12', '27', '377', '19'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Crispy Caesar Salad without Dressing &amp; Croutons', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is low. ', '19', '7', '65', '0', '20', '3', '3', '29', '370', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Crispy Blt Salad without Dressing', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is low. ', '17', '4', '60', '0', '21', '4', '5', '27', '350', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Chicken Bites', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. ', '9', '1', '60', '0', '7', '1', '0', '22', '200', '18'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Extra Crispy Drumstick', 'Great protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '10', '1', '55', '0', '5', '0', '0', '13', '160', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Grilled Thigh', 'Perfect protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '10', '3', '90', '0', '0', '0', '0', '19', '170', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Blazin Strips (3 pieces)', 'Great protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is low. ', '16', '4', '56', '0', '21', '1', '1', '26', '315', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '0', '0', 'Honey Bbq Crunch Melt', 'Fat percentage is a bit high. Carbohdryate percentage is great! ', '26', '5', '60', '0', '48', '2', '7', '33', '556', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '0', 'Tender Roast Sandwich without Sauce', 'Good protein to calorie ratio! Low calorie meal. Fat percentage is high. Carbohdryate percentage is low. ', '19', '1', '65', '0', '24', '1', '0', '31', '390', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Original Recipe Bites', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. ', '9', '1', '60', '0', '7', '1', '0', '22', '200', '18'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Original Recipe Boneless ', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is a bit high. ', '8', '4', '270', '0', '6', '3', '0', '24', '200', '18'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '1', '0', 'Grilled Thigh Meal', 'Low calorie meal. Fat percentage is high. Carbohdryate percentage is good. ', '25', '5', '90', '0', '34', '2', '0', '23', '460', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Livers', 'Good protein to calorie ratio. Calories are very low. Fat percentage is high. Carbohdryate percentage is low. ', '10', '2', '200', '0', '11', '0', '0', '11', '180', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'KFC Filet', 'Perfect protein to calorie ratio! Calories are very low. Fat percentage is a bit high. ', '9', '1', '55', '0', '8', '1', '0', '22', '200', '18'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Kfc Rib', 'Great protein to calorie ratio! Calories are very low. Fat percentage is high. ', '13', '2', '75', '0', '8', '0', '0', '23', '240', '15'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Grilled Chicken - Breast ', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is great. ', '7', '2', '135', '0', '0', '0', '0', '40', '220', '22'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Chicken, Breast', 'Great protein to calorie ratio! Low calorie meal. Very high percentage of fat. ', '21', '5', '110', '0', '11', '0', '0', '34', '360', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Chicken Thigh, Grilled', 'Perfect protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '10', '3', '90', '0', '0', '0', '0', '19', '170', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '0', '1', '0', 'Chicken Little, Sandwich', 'Not a good protein to calorie ratio. Low calorie meal. Very high percentage of fat. Carbohdryate percentage is good. ', '18', '2', '40', '0', '23', '2', '4', '14', '310', '11'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Original Recipe Boneless Chicken, White', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is a bit high. ', '8', '1', '90', '0', '6', '1', '0', '24', '200', '18'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Boneless Chicken, Dark', 'Great protein to calorie ratio! Calories are very low. Fat percentage is high. ', '14', '2', '95', '0', '11', '1', '0', '21', '250', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Grilled Chicken Thigh', 'Perfect protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '10', '3', '90', '0', '0', '0', '0', '19', '170', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Grilled Chicken Thigh', 'Perfect protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '10', '3', '90', '0', '0', '0', '0', '19', '170', '14'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Extra Crispy Bonless White Meat', 'Good protein to calorie ratio! Low calories. Fat percentage is high. ', '16', '2', '65', '0', '12', '1', '0', '22', '280', '13'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Drumstick, Grilled', 'Very high protein to calorie ratio! Calories are very low. Fat percentage is a bit high. ', '8', '2', '120', '0', '0', '0', '0', '27', '180', '18'); "; 

 $sql .= "INSERT INTO `KFC Chicken` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES ('KFC Chicken', '1', '1', '1', 'Kentucky Grilled Chicken Thigh', 'Perfect protein to calorie ratio! Calories are very low. Very high percentage of fat. ', '10', '3', '90', '0', '0', '0', '0', '19', '170', '14'); "; 

 if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>