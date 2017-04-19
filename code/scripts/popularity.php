<?
include('../config/config.php');
$restaurants=$conn->query("SELECT * FROM restaurant ORDER BY popularity DESC");
$form = '';
while ($row=$restaurants->fetch_assoc()) {
	$restName = $row['restName'];
	$popularity = $row['popularity'];
	$form .= '
			<tr class="rest">
				<td class="restName">' . $restName . '</td>
				<td><input class="rating" type="text" name="popularity" value="' . $popularity . '"/></td>
			</tr>
	';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<form>
		<table cellpadding="0" cellspacing="0" border="0">
			<?=$form;?>
			<tr>
				<td colspan="2">
					<input type="button" value="submit" onclick="writeSQL();" />
				</td>
			</tr>
		</table>
	</form>
	<div class="debug"></div>
	<script>
	function writeSQL() {
	  //Dynamically move mealBoxs according to positioning.
	  $( "tr.rest" ).each(function( i, el ) {
	    var restName = $('td.restName', this).html();
	    var restRating = $('input.rating', this).val();
	    var sql = "UPDATE restaurant SET `popularity`='"+restRating+"' WHERE restName='"+restName+"'; ";
	    $('div.debug').append(sql);
	  });
	}
</script>
</body>
</html>