  <?php
  mysql_connect('db558054145.db.1and1.com', 'dbo558054145', 'fender123') or die ('I cant connect dude' . mysql_error());
  mysql_select_db('db558054145');

  $search_term = $_GET[term];

  $sql=mysql_query("SELECT * FROM restaurant WHERE restName LIKE '%$search_term%'");

  $results = ''; 
  while ($row=mysql_fetch_array($sql)) {

    $restaurant_name = $row['restName'];

    //Check to see which categories each restaurant has for meals.
    $cat_1 = ''; $cat_2 = ''; $cat_3 = '';
    if ($row['catGF'] == 1) {
      $cat_1 = 'Gluten Free';
    }
    if ($row['catProtein'] == 1) {
      $cat_2 = 'High Protein';
    }
    if ($row['catLowCal'] == 1) {
      $cat_3 = 'Low calorie';
    }

    //Create an array that returns each category as a link.
    $cat_array = array($cat_1, $cat_2, $cat_3);
    $meal_cats = '';
    foreach ($cat_array as $cat) {
      if ($cat != '') {
        $meal_cat_link = 'meal_results.php?restaurant=' . $restaurant_name . '&cat=' . $cat;
        $meal_cats .= '<a class="inline_block box_sm cat_btn centertext" href="' . $meal_cat_link . '">' . $cat . '</a>';
      }
    }

    //Create results view
    $results .= '<li class="block divider box_sm marginbot_sm"><a class="inline_block box_sm restaurant_btn ltext" href="meal_results.php?restaurant=' . $restaurant_name . '">' . $restaurant_name . '</a>'  . $meal_cats . '</li>';
  }


  //If empty search
  if ($search_term == '') {
    $results_header = 'Uh... you didn\'t search for anything so here\'s everything:';
  } else {
    $results_header = 'You searched for "' . $search_term . '". This is what we\'ve got for you:';
  }

?>
<?include('header.php');?>
  <div id="shell" class="centerbox">
    <?include('topbar.php');?>
    <div class="content_wrap clear">
      <div class="content_main bg_primary white box_lg fl">
        <? if (!$results) { ?>
          <div class="centertext box_sm">
            Sorry we couldn't find anything for '<?=$search_term;?>'.
          </div>
        <? } else { ?>
          <div class="marginbot_sm"><?=$results_header;?></div>
          <ul>
            <li class="box_sm clear">
              <div class="ltext emphasis width_50 fl">Restaurant Name</div>
              <div class="ltext emphasis width_50 fl centertext">Menu Preference</div>
            </li>
            <?=$results;?>
          </ul>
        <? } ?>
      </div>
      <div class="content_side bg_primary_fade white box_md fl">
        <?include('sidebar_main.php');?>
      </div>
    </div>
  </div><!--end shell-->
<?include('footer.php');?>
