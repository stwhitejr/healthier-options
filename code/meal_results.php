  <?php
  include('config/config.php');

  if (isset($_GET['restaurant'])) {
    $restaurant_name = $_GET['restaurant'];
  }
  if (isset($_GET['cat'])) {
    $meal_cat = $_GET['cat'];
  } else {
    $meal_cat = 'all';
  }

  //Create the url for pagination
  if ($meal_cat == 'all') {
    $url = '?restaurant=' . $restaurant_name;
  } else {
    $url = '?restaurant=' . $restaurant_name . '&cat=' . $meal_cat;
  }

  //Get page number
  $resultsPerPage = 16;
  if (isset($_GET['p'])) {
    $pageNum = $_GET['p'];
  } else {
    $pageNum = $resultsPerPage;
  }

  //Get table based of selected restaurant name. Get category based of selected meal category selected. Order by rating, highest to lowest.
  //Check to see if category is set, if not show all
  if ($meal_cat == 'all') {
    $sql=$conn->query("SELECT * FROM `$restaurant_name` ORDER BY mealRating DESC"); //show all
  } else {
    $sql=$conn->query("SELECT * FROM `$restaurant_name` WHERE `$meal_cat` = 1 ORDER BY mealRating DESC"); //by meal rating
  }
  if ($meal_cat == 'High Protein') {
    $catDemographic = 'Building Muscle, Body Builders, Lifters, Fitness';
  } elseif ($meal_cat == 'Low Calorie') {
    $catDemographic = 'Losing Weight, Dieting, Healthy People';
  } elseif ($meal_cat == 'Low Carbs') {
    $catDemographic = 'Dieting, Cutting Carbs, Losing Weight';
  }

  if (!$meal_cat) {
    $pageTitle = 'Healthier-Options.com -' . $restaurant_name . ' Options For Staying Healthy, Eating Right, Dieting';
  } else {
    $pageTitle = 'Healthier-Options.com -' . $restaurant_name . ' ' . $meal_cat . ' Options For ' . $catDemographic;
  }
  

  if ($meal_cat == 'all') {
    $meal_cat = 'All';
  }

  $catArray = array('High Protein', 'Low Calorie', 'Low Carbs');
  $meal_cat_links = '<strong>' . $meal_cat . '</strong>';
  foreach ($catArray as $catName) {
    if ($meal_cat != $catName) {
      $meal_cat_links .= ' | <a href="?restaurant=' . $restaurant_name . '&cat=' . $catName .'">' . $catName . '</a>';
    }
  }


  $mealCount = 0;
  $paginationCount = 0;
  $pagination = '';
  $mealsTotal = $sql->num_rows;
  if ($mealsTotal <= $resultsPerPage) {
    $pageNum = $mealsTotal; //fix for single page results
  }
  $results = '';
  $resultCount = 0;
  $adBox = '';
  while ($row = $sql->fetch_assoc()) {
    $mealCount++;
    $mealExclude = $pageNum - $resultsPerPage;
    if ($pageNum % $resultsPerPage != 0) {
      $mealExclude = $pageNum - ($pageNum % $resultsPerPage);
    }
    $mealExcludeText = $mealExclude + 1;
    //Meal Ratings
    if ($row['mealRating'] >= 25) {
      $mealRating = 1;
    } elseif ($row['mealRating'] >= 20) {
      $mealRating = 2;
    } elseif ($row['mealRating'] >= 16) {
      $mealRating = 3;
    } elseif ($row['mealRating'] >= 13) {
      $mealRating = 4;
    } elseif ($row['mealRating'] >= 10) {
      $mealRating = 5;
    }

    if (($mealCount % $resultsPerPage) == 0 || $mealCount == $mealsTotal) {
      $paginationCount++;
      if ($paginationCount != 1) {
        $pagination .= ' | ';
      }
      if ($mealCount == $pageNum) {
        $pagination .= $paginationCount;
      } else {
        $pagination .= '<a href="' . $url . '&p=' . $mealCount . '">' . $paginationCount . '</a>';
      }
    }

    if ($mealCount <= $pageNum && $mealCount > $mealExclude || $pageNum == 'all') { //Limit to 10 results per page
      $resultCount++;
      //Create results view
      $results .= '
        <div class="mealBox">
          <div class="mealName">
            <h2>
              Nutritional Information for:
            </h2>
            <h1>
              '. $row['mealName'] . '
            </h1>
          </div>
          <div class="mealRating">
            <img src="images/meal_ratings_' . $mealRating . '.png" alt="' . $row['mealRating'] . '" />
          </div>
          <div class="mealDesc">
            '. $row['mealDesc'] . '
          </div>
          <div class="mealData">
            <h2>Nutritional Information</h2>
            <div class="mealDataTable">
              <div class="mealDataCell">
                <span class="mealDataName">Calories</span> <span class="mealDataValue">' . $row['nutrCal'] . 'g</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Total Fat</span> <span class="mealDataValue">' . $row['nutrFat'] . 'g</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Saturated Fat</span> <span class="mealDataValue">' . $row['nutrSatFat'] . 'g</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Cholesterol</span> <span class="mealDataValue">' . $row['nutrChol'] . 'mg</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Sodium</span> <span class="mealDataValue">' . $row['nutrSodium'] . 'mg</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Carbohydrates</span> <span class="mealDataValue">' . $row['nutrCarb'] . 'g</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Dietary Fiber</span> <span class="mealDataValue">' . $row['nutrFiber'] . 'g</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Sugar</span> <span class="mealDataValue">' . $row['nutrSugar'] . 'g</span>
                </div>
                <div class="mealDataCell">
                <span class="mealDataName">Protein</span> <span class="mealDataValue">' . $row['nutrProtein'] . 'g</span>
              </div>
            </div>
          </div>
        </div>
      ';

      //Ad Creation
      if ($resultCount == 3 || $resultCount == 7 || $resultCount == 14) {
        $results .= '
        <div class="mealBox adBox">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Healthier Options Top Banner -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-1627926156355773"
               data-ad-slot="5555450119"
               data-ad-format="auto"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        ';
      }
    }
  }

  $conn->close();
?>
<?include('includes/header.php');?>
  <div class="wrap">
    <?include('includes/topbar.php');?>
    <?include('includes/ad_banner.php');?>
        <? if (!$sql) { ?>
            Sorry we couldn't find anything for '<?=$restaurant_name;?>'.
        <? } else { ?>
          <div class="restTitleBox clear">
            <div class="restTitle">
              <h2>
                <? if ($meal_cat == 'All') {
                  echo 'Healthiest';
                } else if ($meal_cat == 'Low Carbs') {
                  echo 'Low Carb';
                } else {
                  echo $meal_cat;
                } ?>
                  options for:
              </h2>
              <h1>
                <a href="meal_results.php?restaurant=<?echo $restaurant_name;?>">
                  <?echo $restaurant_name;?>
                </a>
              </h1>
            </div>
            <div class="restTitleCats">
              <div class="pagination">
                <div class="paginationLinks">
                  Page: <?echo $pagination;?>
                </div>
               <div class="paginationResults">Results: <? if ($pageNum != 'all') { echo $mealExcludeText . '-' . $pageNum;} else {echo 'All';}?> | Total: <?echo $mealCount;?></div>
              </div>
              <?echo $meal_cat_links;?>
            </div>
          </div>
          <div class="mealBoxWrap clear">
            <?echo $results;?>
          </div>
          <div class="mealResultsFooter clear">
            <div class="paginationInfoFooter">
              <strong>Results:</strong> <? if ($pageNum != 'all') { echo $mealExcludeText . '-' . $pageNum;} else {echo 'All';}?> | <strong>Total:</strong> <?echo $mealCount;?> 
            </div>
            <div class="paginationLinksFooter">
              <strong>Page:</strong> <?echo $pagination;?>
            </div>
          </div>
        <? } ?>
  </div><!--end wrap-->
<?include('includes/footer.php');?>
<script>

  
  //Dynamically move mealBoxs according to positioning.
  if (screen.width >= 481) {
    $( "div.mealBox" ).each(function( i, el ) {
      var mealBoxNum = i+1;
      var topMargin = parseInt($(this).css("margin-top"));
      if (mealBoxNum != 1) { //skip first row
        if (mealBoxNum%2 != 0) { //odd
          //get the row above current
          var block1 = 'div.mealBoxWrap div.mealBox:nth-child('+(mealBoxNum - 2)+')';
          var block2 = 'div.mealBoxWrap div.mealBox:nth-child('+(mealBoxNum - 1)+')';
          //get the Y position at the bottom of the div
          var block1height = ($(block1).offset().top + $(block1).height());
          var block2height = ($(block2).offset().top + $(block2).height());
          //Move div if necessary
          if (block1height < block2height) {
            var x = (block1height - block2height + topMargin); //factor in top margin
            $(this).css("margin-top", x); //move div with margin-top
          };
        } else { //even
          if (mealBoxNum != 2) { //skip first row
            //get the row above current
            var block1 = 'div.mealBoxWrap div.mealBox:nth-child('+(mealBoxNum - 3)+')';
            var block2 = 'div.mealBoxWrap div.mealBox:nth-child('+(mealBoxNum - 2)+')';
            //get the Y position at the bottom of the div
            var block1height = ($(block1).offset().top + $(block1).height());
            var block2height = ($(block2).offset().top + $(block2).height());
            //Move div if necessary
            if (block1height > block2height) {
              var x = (block2height - block1height + topMargin); //factor in top margin
              $(this).css("margin-top", x); //move div with margin-top
            };
          }
        };
      };
    });
  }

</script>