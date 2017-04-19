<?php
  include('config/config.php'); 

  $sql = $conn->query("SELECT * FROM restaurant ORDER BY popularity DESC LIMIT 20"); //TODO: Add popularity

  $restaurant_list = ''; 
  while ($row = $sql->fetch_assoc()) {

    $restaurant_name = $row['restName'];
    $meal_count = $row['mealCount'];
    $restaurant_list .= '<tr><td class="restCell"><a href="./meal_results.php?restaurant=' . $restaurant_name . '">' . $restaurant_name . '</a></td><td class="linkCell"><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=Low Calorie" class="btnCategory">Low Calorie <span class="white">&#9656;</span></a><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=High Protein" class="btnCategory">High Protein <span class="white">&#9656;</span></a><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=Low Carbs" class="btnCategory">Low Carbs <span class="white">&#9656;</span></a></td><td class="mealCell">' . $meal_count . '</td></tr>';
  }
  $conn->close();
?>
<div class="introTextBox">
  Trying to eat healthy but for whatever reason you found yourself at a fast food chain? <span style="white-space:nowrap;">We've got your back.</span>
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
        <td class="mealCell headCell">Meals</td>
      </tr>
      <?=$restaurant_list?>
    </table>
  </div>
</div>
<div class="footerIntro">
  Eaing healthy is hard. Having a social life at the same time is even harder. We hope we can help you make the healthiest choice when it comes to dining out. Use your common sense and choose the meals that make most sense for your body.
</div>
