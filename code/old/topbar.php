<script>
$(document).ready(function() {
// Function to change form action.
$("#topbar_search").submit(function() {
var checked = $('#menucat input').is(':checked');
if (checked) {
$("#topbar_search").attr('action', 'meal_results.php');
} else {
$("#topbar_search").attr('action', 'search.php');
}
});
});
</script>

<div class="header bg_white box_md clear">
  <div class="logo fl">
    <a href="index.php">
      Logo
    </a>
  </div>
  <div class="fl topbar_meal_form">
    <form method="GET" class="form-search" name="topbar_search" id="topbar_search">
      <div class="topbar_meal_form_options box_sm" id="menucat">
        <span class="primary font_2">Meal Options:</span>
        <input type="radio" name="cat" value="Gluten Free" /> Gluten Free
        <input type="radio" name="cat" value="High Protein" /> High Protein
        <input type="radio" name="cat" value="Low Calorie" /> Low Calorie
      </div>
      <div class="topbar_meal_form_searchbar box_sm">
        <input type="text" class="searchbar search-bar" name="term" placeholder="Quick Search: Search for restaurants" />
        <input type="submit" class="primary_btn" value="Search" />
      </div>
    </form>
  </div>
</div>