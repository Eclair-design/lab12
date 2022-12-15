<?php 
	include '../forms/search_change_db.html';
	$select_change=$_GET['select_change'];
	$text_change=$_GET['text_change'];
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
	$query = "UPDATE $usertable SET $select_change='$text_change' WHERE $select_equal='$text_equal';";
	echo "<br>Sql: " . $query . "<br>";
	$conn = new mysqli($db_hostname, $db_username, $db_password, $dbName);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$result = $conn->query($query);	
	if ($result) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record";
	}
?>