  <?php
  mysql_connect('db558054145.db.1and1.com', 'dbo558054145', 'fender123') or die ('I cant connect dude' . mysql_error());
  mysql_select_db('db558054145');

  if (isset($_GET['term'])) {
    //if we have a search term, search in restaurant table.
    //TODO: What if we have multiple results for possible restaurant names? Currently it returns the first one.
    $search_term = $_GET['term'];
    $search_sql=mysql_query("SELECT * FROM restaurant WHERE restName LIKE '%$search_term%'");
    $search_row=mysql_fetch_array($search_sql);
    $restaurant_name = $search_row['restName'];
  } else if (isset($_GET['restaurant'])) {
    $restaurant_name = $_GET['restaurant'];
  }
  if (isset($_GET['cat'])) {
    $meal_cat = $_GET['cat'];
  } else {
    $meal_cat = false;
  }

  //Get table based of selected restaurant name. Get category based of selected meal category selected. Order by rating, highest to lowest.
  //Check to see if category is set, if not show all
  if ($meal_cat == false) {
    $sql=mysql_query("SELECT * FROM `$restaurant_name` ORDER BY mealRating DESC"); //show all
  } else {
    $sql=mysql_query("SELECT * FROM `$restaurant_name` WHERE `$meal_cat` = 2 OR `$meal_cat` = 1 ORDER BY `$meal_cat` DESC, mealrating DESC"); //by cat
  }

  while ($row=mysql_fetch_array($sql)) {
    $mealCatArray = array('High Protein'=>$row['High Protein'], 'Gluten Free'=>$row['Gluten Free'], 'Low Calorie'=>$row['Low Calorie']);
    $mealCategories = '';
    //First check for the main category (2)
    foreach ($mealCatArray as $catName => $value) {
      if ($value == 2) {
        $mealCategories .= $catName;
      }
    }
    //Then check for the secondary category (1)
    foreach ($mealCatArray as $catName => $value) {
      if ($value == 1) {
        $mealCategories .= ' | ' . $catName;
      }
    }
    
    
    //Create results view
    $results .= '
    <ul class="box_md bg_white primary marginbot_md list_2col clear">
      <li>
        <p class="marginbot_sm">' . $mealCategories . '</p>
        <p class="emphasis ltext">' . $row['mealName'] . '</p>
        <p class="marginbot_sm xstext">' . $row['mealDesc'] . '</p>
        <p>' . $row['mealRating'] . '</p>
      </li>
      <li class="emphasis bg_secondary mdtext"><p class="box_sm">Nutritional Information:</p></li>
      <li><table class="box_sm block ni_table">
      <tr><td class="emphasis">Calories:</td><td class="ni_value">' . $row['nutrCal'] . '</td></tr>
      <tr><td class="emphasis">Total Fat:</td><td class="ni_value">' . $row['nutrFat'] . 'g</td></tr>
      <tr><td class="emphasis">Saturated Fat:</td><td class="ni_value">' . $row['nutrSatFat'] . 'g</td></tr>
      <tr><td class="emphasis">Cholesterol:</td><td class="ni_value">' . $row['nutrChol'] . 'mg</td></tr>
      <tr><td class="emphasis">Sodium:</td><td class="ni_value">' . $row['nutrSodium'] . 'mg</td></tr>
      <tr><td class="emphasis">Carbohydrates:</td><td class="ni_value">' . $row['nutrCarb'] . 'g</td></tr>
      <tr><td class="emphasis">Dietary Fiber:</td><td class="ni_value">' . $row['nutrFiber'] . 'g</td></tr>
      <tr><td class="emphasis">Sugar:</td><td class="ni_value">' . $row['nutrSugar'] . 'g</td></tr>
      <tr><td class="emphasis">Protein:</td><td class="ni_value">' . $row['nutrProtein'] . 'g</td></tr>
      </table></li>
    </ul>
    ';
  } 

  $results_header = '
    <div class="marginbot_lg">
      <div class="xltext">' . $restaurant_name . '</div><div class="emphasis">' . $meal_cat . '</div>
    </div>';

?>
<?include('header.php');?>
  <div id="shell" class="centerbox">
    <?include('topbar.php');?>
    <div class="content_wrap clear">
      <div class="content_main bg_primary white box_lg fl">
        <? if (!$sql) { ?>
          <div class="centertext box_sm">
            Sorry we couldn't find anything for '<?=$restaurant_name;?>'.
          </div>
        <? } else { ?>
          <?=$results_header;?>
          <?=$results;?>
        <? } ?>
      </div>
      <div class="content_side bg_primary_fade white box_md fl">
        <?include('sidebar_main.php');?>
      </div>
    </div>
  </div><!--end shell-->
<?include('footer.php');?>
