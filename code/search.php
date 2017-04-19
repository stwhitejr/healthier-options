  <?php
  include('config/config.php');

  $search_term = $_GET[restaurant];

  //Get page number
  $resultsPerPage = 20;
  if (isset($_GET['p'])) {
    $pageNum = $_GET['p'];
  } else {
    $pageNum = $resultsPerPage;
  }

  //Create the url for pagination
  if (!$search_term) {
    $url = '?';
  } else {
    $url = '?restaurant=' . $search_term;
  }

  if (!$search_term) {
    $sql=$conn->query("SELECT * FROM restaurant ORDER BY popularity DESC");
  } else {
    $sql=$conn->query("SELECT * FROM restaurant WHERE restName LIKE '%$search_term%'");
  }

  $pageTitle = 'Healthier-Options.com - Fast Food Restaurants with Healthy Meals and Options.';

  $restTotal = $sql->num_rows;
  if ($restTotal <= $resultsPerPage) {
    $pageNum = $restTotal; //fix for single page results
  }
  $results = '';
  $i=0;
  $paginationCount=0;
  $resultsExclude = $pageNum - $resultsPerPage;
  if ($pageNum % $resultsPerPage != 0) {
    $resultsExclude = $pageNum - ($pageNum % $resultsPerPage);
  }
  while ($row = $sql->fetch_assoc()) {
    $i++;
    $restaurant_name = $row['restName'];
    $meal_count = $row['mealCount'];

    if (($i % $resultsPerPage) == 0 || $i == $restTotal) {
      $paginationCount++;
      if ($paginationCount != 1) {
        $pagination .= ' | ';
      }
      if ($i == $pageNum) {
        $pagination .= $paginationCount;
      } else {
        $pagination .= '<a href="' . $url . '&p=' . $i . '">' . $paginationCount . '</a>';
      }
    }

    if ($i <= $pageNum && $i > $resultsExclude || $pageNum == 'all') {
     //Create results view
     $results .= '<tr><td class="restCell"><a href="./meal_results.php?restaurant=' . $restaurant_name . '">' . $restaurant_name . '</a></td><td class="linkCell"><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=Low Calorie" class="btnCategory">Low Calorie &#9654;</a><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=High Protein" class="btnCategory">High Protein &#9654;</a><a href="./meal_results.php?restaurant=' . $restaurant_name . '&cat=Low Carbs" class="btnCategory">Low Carbs &#9654;</a></td><td class="mealCell">' . $meal_count . '</td></tr>';
    }
  }

  //If empty search
  if ($search_term == '') {
    $results_header = 'Uh... you didn\'t search for anything so here\'s everything:';
  } else {
    $results_header = 'You searched for "' . $search_term . '". This is what we\'ve got for you:';
  }
$conn->close();
?>
<?include('includes/header.php');?>
<div class="wrap">
  <?include('includes/topbar.php');?>
  <div class="mainBox">
    <div class="topRestBox">
      <div class="borderBotBox h1">
        <? if (!$search_term) { ?>
          Showing All Restaurants
        <?} else {?>
          Results for: <span class="searchTerm"><?=$search_term;?></span>
        <?}?>
      </div>
      <table class="dataTable">
        <tr>
          <td class="restCell headCell">Restaurant Name</td>
          <td class="linkCell headCell">Category</td>
          <td class="mealCell headCell">Meals</td>
        </tr>
        <?=$results?>
      </table>
      <? if (!$results) { ?>
        <div style="font-size:150%; text-align:center; padding:20px;">Sorry we couldn't find any results for '<?=$search_term;?>'</div>
      <?}?>
    </div>
    <div class="searhResultsPagination">
      Page: <?=$pagination;?>
    </div>
  </div>
<?include('includes/footer.php');?>
</div><!--end wrap-->

