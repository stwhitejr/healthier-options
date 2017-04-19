<?
$files = scandir('../data');
if (!$files) {
	echo 'scandir didnt work';
}
foreach($files as $file) {
	echo '<a style="padding:10px; display:block;" href="http://s221005795.onlinehome.us/healthieroptions/data/' . $file . '" target="_blank">' . $file .'</a><br/>';
}

?>