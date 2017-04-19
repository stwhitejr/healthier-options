<?php
  mysql_connect('db558054145.db.1and1.com', 'dbo558054145', 'fender123') or die ('I cant connect dude' . mysql_error());
  mysql_select_db('db558054145');



  $sql=mysql_query("SELECT * FROM restaurant WHERE popularity>0 ORDER BY popularity DESC LIMIT 20");
  $restaurant_list = ''; 
  while ($row=mysql_fetch_array($sql)) {

    $restaurant_name = $row['restName'];
    $meal_count = $row['mealCount'];
    $restaurant_list .= '<tr><td class="restCell"><a href="./meal_results.php?restaurant=' . $restaurant_name . '">' . $restaurant_name . '</a></td><td class="linkCell"><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=Low Calorie" class="btnCategory">Low Calorie &#9654;</a><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=High Protein" class="btnCategory">High Protein &#9654;</a><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=Low Carbs" class="btnCategory">Low Carbs &#9654;</a></td><td class="mealCell">' . $meal_count . '</td></tr>';
  }

?>
<div class="introTextBox fontSec">
  Trying to eat healthy but for whatever reason you found yourself at a fast food chain? <em>We got your back</em>.
</div>
<?php include('searchbar.php');?>
<div class="mainBox">
  <div class="topRestBox">
    <div class="borderBotBox h1">
        Top Restaurants <span class="viewAllRest">| <a href="search.php">View All</a></span>
    </div>
    <table class="dataTable">
      <tr>
        <td class="restCell headCell">Restaurant Name</td>
        <td class="linkCell headCell">Category</td>
        <td class="mealCell headCell">Meal Count</td>
      </tr>
      <?=$restaurant_list?>
    </table>
  </div>
</div>