 <?php
  include('../config/config.php');

  if (isset($_GET['restaurant'])) {
    $restaurant_name = $_GET['restaurant']; //add restaurant to url so we only update that one table
  }
  /*Don't run this till we update the rating system from python
  function createRatings() {
		//Create ratings
	    $proteinRating = 0;
	    $calorieRating = 0;
	    $satfatRating = 0;
	    $sugarRating = 0;
	    $fiberRating = 0;
	    $sodiumRating = 0;

	    if ($row['nutrCal'] * .10 <= $row['nutrProtein']) {
	      $proteinRating = 7;
	    } else if ($row['nutrCal'] * .09 <= $row['nutrProtein'] ) {
	      $proteinRating = 6;
	    } else if ($row['nutrCal'] * .08 <= $row['nutrProtein'] ) {
	      $proteinRating = 5;
	    } else if ($row['nutrCal'] * .07 <= $row['nutrProtein'] ) {
	      $proteinRating = 4;
	    } else if ($row['nutrCal'] * .06 <= $row['nutrProtein'] ) {
	      $proteinRating = 3;
	    } else if ($row['nutrCal'] * .05 <= $row['nutrProtein'] ) {
	      $proteinRating = 2;
	    } else if ($row['nutrCal'] * .04 <= $row['nutrProtein'] ) {
	      $proteinRating = 1;
	    } else if ($row['nutrCal'] * .02 <= $row['nutrProtein'] ) {
	      $proteinRating = -1;
	    } else if ($row['nutrCal'] * .01 <= $row['nutrProtein'] ) {
	      $proteinRating = -2;
	    } else if ($row['nutrProtein'] == 0 ) {
	      $proteinRating = -3;
	    }

	    if ($row['nutrCal'] <= 200 ) {
	      $calorieRating = 7;
	    } else if ($row['nutrCal'] <= 300 ) {
	      $calorieRating = 6;
	    } else if ($row['nutrCal'] <= 400 ) {
	      $calorieRating = 5;
	    } else if ($row['nutrCal'] <= 500 ) {
	      $calorieRating = 4;
	    } else if ($row['nutrCal'] <= 600 ) {
	      $calorieRating = 3;
	    } else if ($row['nutrCal'] <= 650 ) {
	      $calorieRating = 2;
	    } else if ($row['nutrCal'] <= 700 ) {
	      $calorieRating = 1;
	    } else if ($row['nutrCal'] <= 900 ) {
	      $calorieRating = -1;
	    } else if ($row['nutrCal'] <= 1000 ) {
	      $calorieRating = -2;
	    } else if ($row['nutrCal'] <= 1100 ) {
	      $calorieRating = -3;
	    } else if ($row['nutrCal'] >= 1200 ) {
	      $calorieRating = -4;
	    }

	    if ($row['nutrSatFat'] == 0 ) {
	      $satfatRating = 4;
	    } else if ($row['nutrSatFat'] <= 2 ) {
	      $satfatRating = 3;
	    } else if ($row['nutrSatFat'] <= 4 ) {
	      $satfatRating = 2;
	    } else if ($row['nutrSatFat'] <= 6 ) {
	      $satfatRating = 1;
	    } else if ($row['nutrSatFat'] <= 8 ) {
	      $satfatRating = -1;
	    } else if ($row['nutrSatFat'] <= 11 ) {
	      $satfatRating = -2;
	    } else if ($row['nutrSatFat'] <= 15 ) {
	      $satfatRating = -3;
	    }

	    if ($row['nutrSodium'] <= 200 ) {
	      $sodiumRating = 2;
	    } else if ($row['nutrSodium'] <= 500 ) {
	      $sodiumRating = 1;
	    } else if ($row['nutrSodium'] >= 1500 ) {
	      $sodiumRating = -2;
	    } else if ($row['nutrSodium'] >= 1000 ) {
	      $sodiumRating = -1;
	    }

	    if ($row['nutrFiber'] <= 4 ) {
	      $fiberRating = 3;
	    } else if ($row['nutrSodium'] <= 2 ) {
	      $fiberRating = 1;
	    } else if ($row['nutrSodium'] == 0 && $row["nutrCarb"] >= 20 ) {
	      $fiberRating = -1;
	    }

	    //add up overall rating
	    $mealRating = $proteinRating + $calorieRating + $satfatRating + $sodiumRating + $fiberRating;

	    //Set meal category
	    $proteinCat = 0;
	    $calorieCat = 0;
	    if ($proteinRating > $calorieRating) {
	    	$proteinCat = 2;
	    	if ($calorieRating >= 4) {
	    		$calorieCat = 1;
	    	}
	    } else if ($proteinRating == $calorieRating) {
	    	$calorieCat = 1;
	    	$proteinCat = 1;
	    } else {
	    	$calorieCat = 2;
	    	if ($proteinRating >= 4) {
	    		$proteinCat = 1;
	    	}
	    }

	    //Create descriptions
	    $mealDesc = '';
	    //Protein descriptions
	    if ($row['nutrCal'] * .10 <= $row['nutrProtein'] ) {
	      $mealDesc .= 'Amazing protein to calorie ratio! ';
	    } else if ($row['nutrCal'] * .08 <= $row['nutrProtein'] ) {
	      $mealDesc .= 'Great protein to calorie ratio! ';
	    } else if ($row['nutrCal'] * .06 <= $row['nutrProtein'] ) {
	      $mealDesc .= 'Good protein to calorie ratio. ';
	    } else if ($row['nutrCal'] * .05 <= $row['nutrProtein'] ) {
	      $mealDesc .= 'Not a good protein to calorie ratio. ';
	    }
	    //Calorie Descriptions
	    if ($row['nutrCal'] <= 200) {
	      $mealDesc .= 'Calories so low this is a borderline snack. ';
	    } else if ($row['nutrCal'] <= 480) {
	      $mealDesc .= 'Low calorie meal. ';
	    } else if ($row['nutrCal'] <= 699) {
	      $mealDesc .= 'Under 700 calories. ';
	    } else if ($row['nutrCal'] <= 899) {
	      $mealDesc .= 'Pretty high in calories. ';
	    } else if ($row['nutrCal'] >= 900) {
	      $mealDesc .= 'High in calories! ';
	    }
	    //Other descriptions
	    if ($row['nutrSugar'] >= 20) {
	      $mealDesc .= 'High in sugar! ';
	    }
	    if ($row['nutrSatFat'] >= 15) {
	      $mealDesc .= 'High in saturated fat! ';
	    }
	    if ($row['nutrSodium'] <= 200 ) {
	      $mealDesc .= 'Low in sodium. ';
	    } else if ($row['nutrSodium'] >= 1500 ) {
	      $mealDesc .= 'Very high in sodium! ';
	    } else if ($row['nutrSodium'] >= 1000 ) {
	      $mealDesc .= 'High in sodium. ';
	    }
	    if ($row['nutrFiber'] <= 4 ) {
	      $mealDesc .= 'High in fiber. ';
	    } else if ($row['nutrSodium'] <= 2 ) {
	      $mealDesc .= 'Some fiber is better than none. ';
	    }
	    $queryRest=$row['restName'];
	    $queryMeal=$row['mealName'];
	    mysql_query("UPDATE `$queryRest` SET `High Protein`='$proteinCat', `Low Calorie`='$calorieCat', mealDesc='$mealDesc', mealRating='$mealRating' WHERE mealName='$queryMeal'");
	  }

  if (!$restaurant_name) {//if resturant not set, loop through all restaurants
	  $restaurants=$conn->query("SELECT * FROM restaurant");
	  //cycle through each table based off the master restaurant table/list
		while ($row=$restaurants->fetch_assoc()) {
	 		$restName = $row['restName'];
		  $restTable = $conn->query("SELECT * FROM `$restName`");
		  while ($row=$restTable->fetch_assoc()) {
		  	createRatings();
		  }
		}
	} else {//if restaurant is set only update that single restaurant
		$restTable = $conn->query("SELECT * FROM `$restaurant_name`");
		while ($row=$restTable->fetch_assoc()) {
		  	createRatings();
		  }
	}
	*/
	$conn->close();
 ?>