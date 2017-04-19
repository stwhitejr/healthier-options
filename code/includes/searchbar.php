<div class="searchBox">
  <script>
    function validateSearchbar(restName) {
      var livesearchFirst = document.getElementById('livesearch').firstChild;
      var searchbar = document.getElementById('searchbar');
      showResult(restName, 0);
      if (searchbar.value==livesearchFirst.innerHTML) {
        document.topbar_search.action = "meal_results.php";
      };
       if (searchbar.value==livesearchFirst.innerHTML.toLowerCase()) {
        searchbar.value=livesearchFirst.innerHTML;
        document.topbar_search.action = "meal_results.php";
      };
    }
    function selectRest(restName) {
     searchbar.value=restName;
     document.getElementById("mealOptions").style.display="block";
     showResult(restName, 1);
    }
  </script>
  <form  method="GET" class="form-search" name="topbar_search" id="topbar_search" action="search.php" onsubmit="return validateSearchbar(this.restaurant.value)">
    <input type="text" id="searchbar" class="searchBar" name="restaurant" autocomplete="off" onkeyup="showResult(this.value, 0)" />
    <input type="submit" class="searchBarSubmit" value="Search" />
    <div id="livesearch" class="searchBar" style="display:none;"></div>
    <div id="mealOptions" class="mealOptions" style="display:none;">
      <span class="callout">Pick an Option:</span>&#160;
      <input type="radio" class="radioBox" name="cat" value="Low Calorie" /> <label>Low Calorie</label>
      <input type="radio" class="radioBox" name="cat" value="High Protein" /> <label>High Protein</label>
      <input type="radio" class="radioBox" name="cat" value="Low Carbs" /> <label>Low Carbohydrates</label>
      <input type="radio" class="radioBox" name="cat" value="all" /> <label>Show All</label>
    </div>
  </form>
</div>