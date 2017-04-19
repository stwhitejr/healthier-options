<?
	$conn = new mysqli('db558054145.db.1and1.com', 'dbo558054145', 'lesserEv!l123', 'db558054145');
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>