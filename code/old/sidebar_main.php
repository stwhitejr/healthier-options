<?//This calls the restaurant table to get a list of restaurants. Then it merges all the restaurant tables into one

  //Get list of Restaurants from Restaurant table
  $get_tables=mysql_query("SELECT restName FROM restaurant");

  //Count the restaurants
  $table_count = mysql_num_rows($get_tables);

  //Start SQL Select Loop (this is looping through the restaurant names)
  $i=0;
  while ($row=mysql_fetch_array($get_tables)) {
    $i++;
    $table = '`' . $row['restName'] . '`';
    $sql_select .= 'SELECT * FROM ' . $table . ' ';
    if ($table_count != $i) {
      $sql_select .= 'UNION ';
    }
  }

  //Union query with ALL restaurants! Check this when the database is filled out. Is it worth it?
 $sql=mysql_query("$sql_select ORDER BY time DESC LIMIT 4") or die("Cannot get results " . mysql_error());
  while ($row=mysql_fetch_array($sql)) {
    //Create results view
    $mealCat = '';
    if ($row['High Protein'] == 1) {
      $mealCat = 'High Protein';
    }
    if ($row['Gluten Free'] == 1) {
      $mealCat = 'Gluten Free';
    }
    if ($row['Low Calorie'] == 1) {
      $mealCat = 'Low Calorie';
    }
    $latest_results .= '<li class="box_sm_tb"><a href="meal_results.php&?cat=' . $mealCat . '&restaurant=' . $row['restName'] . '">New ' . $mealCat . ' meal added for ' . $row['restName'] . '</a></li>';
  }

?>

<div class="bg_secondary primary emphasis box_sm mdtext">
  Latest News
</div>
<div class="box_md">
  <ul class="list_2col clear">
    <?=$latest_results;?>
  </ul>
</div>
<div style="width:100%; height: 300px; background-color:#ddd; margin:15px 0;">
  AD
</div>
<div class="bg_secondary primary emphasis box_sm mdtext">
  Suggestions
</div>
<div class="box_md">
  Are we missing your favorite restaurants and fast food chains? Send us an email with suggestions!
  <div class="centertext margintop_md">
    <a href="mailto:" class="primary_btn inline_block">Email Us</a>
  </div>
</div>