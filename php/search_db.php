<?php
	$search=$_GET['_search'];
	/* Определяем значения переменным */ 
	$db_hostname="localhost"; 
	$db_username="root"; 
	$db_password="123"; 
	/* Имя базы данных */ 
	$dbName="max_autos"; 
	/* Имя таблицы */ 
	$usertable="autos"; 
	$query = "select * from autos where email like '%$search%' or url like '%$search%' or city like '%$search%' or description like '%$search%' or phone like '%$search%'";
	// echo $query;
	echo "<br>Searched:" . $search . "<br>";
	$conn = new mysqli($db_hostname, $db_username, $db_password, $dbName);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$result = $conn->query($query);
	include '../forms/search_db.php';
	// data, email, url, phone, age, color, public_key, city, password, description
	if ($result->num_rows > 0) {
		echo "<table><tr><th>Data</th><th>Email</th><th>Url</th><th>Phone</th><th>Age</th><th>Color</th><th>Public_key</th><th>City</th><th>Password</th><th>Description</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["data"]."</td><td>".$row["email"]."</td><td>".$row["url"]."</td><td>".$row["phone"]."</td><td>".$row["age"]."</td><td>".$row["color"]."</td><td>".$row["public_key"]."</td><td>".$row["city"]."</td><td>".$row["password"]."</td><td>".$row["description"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
?>