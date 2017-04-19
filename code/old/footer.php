	<div class="footer box_md">

  </div>
<script>
//Form validation for search bars
$('.form-search').submit(function( event ) {
  var searchbar = $('.search-bar', this).val();
  var errorHtml = '<div class="home-search-error" style="position:absolute; padding:10px; color:red; font-weight:bold; background-color:#fff; border:solid 1px red; box-shadow: 1px 1px 15px #000;">Uh... I think you forgot to type something.</div>';
  if (searchbar == null || searchbar == '') {
    if (!$('.home-search-error', this).length) {
      $(this).append(errorHtml);
    }
  	event.preventDefault();
	}
});

$('.home-form').submit(function( event ) {

  //Restaurant check
  var restValue = $('input[name="restaurant"]:checked').val();
  var restErrorHtml = '<div class="home-search-error" style="position:absolute; padding:10px; color:red; font-weight:bold; background-color:#fff; border:solid 1px red; box-shadow: 1px 1px 15px #000; bottom: 10px;">Please select a Restaurant.</div>';
  if (restValue == null || restValue == '') {
    if (!$('.home-search-error', this).length) {
      $(this).append(restErrorHtml);
    }
    event.preventDefault();
  }

  //Menu check
  var catValue = $('input[name="cat"]:checked').val();
  var catErrorHtml = '<div class="home-search-error" style="position:absolute; padding:10px; color:red; font-weight:bold; background-color:#fff; border:solid 1px red; box-shadow: 1px 1px 15px #000; bottom: 10px;">Please select a Menu.</div>';
  if (catValue == null || catValue == '') {
    if (!$('.home-search-error', this).length) {
      $(this).append(catErrorHtml);
    }
    event.preventDefault();
  }
});
</script>
</body>
</html>