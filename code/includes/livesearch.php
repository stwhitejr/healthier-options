<?php
$q=$_GET["q"];

include('../config/config.php');

$sql=$conn->query("SELECT * FROM restaurant ORDER BY popularity DESC");


if (strlen($q)>0) {
	$hint="";
	while($row = $sql->fetch_assoc()) {
		$i++;
		if (stristr($row['restName'], $q)) {
			$hint.='<div class="" onclick="selectRest(this.innerHTML);">' . $row['restName'] . '</div>';
		}
	}
}
if ($hint=="") {
  $response="No Results";
} else {
  $response=$hint;
}

echo $response;

?>