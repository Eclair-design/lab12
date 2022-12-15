<?php 
	include '../forms/search_delete_db.html';
	$select_equal=$_GET['select_equal'];
	$text_equal=$_GET['text_equal'];
	/* Определяем значения переменным */ 
	$db_hostname="localhost"; 
	$db_username="root"; 
	$db_password="123"; 
	/* Имя базы данных */ 
	$dbName="max_autos"; 
	/* Имя таблицы */ 
	$usertable="autos"; 
	$query = "DELETE FROM $usertable WHERE $select_equal='$text_equal';";
	echo "<br>Sql: " . $query . "<br>";
	$conn = new mysqli($db_hostname, $db_username, $db_password, $dbName);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$result = $conn->query($query);	
	if ($result) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
?>