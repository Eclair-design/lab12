<?php 
	/* Получаем данные из формы*/
	$data=$_GET['_data'];
	$email=$_GET['_email'];
	$url=$_GET['_url'];
	$phone=$_GET['_phone'];
	$age=$_GET['_age'];
	$color=$_GET['_color'];
	$public_key=$_GET['_public_key'];
	$city=$_GET['_city'];
	$password=$_GET['_password'];
	$description=$_GET['_description'];
	/* Определяем значения переменным */ 
	$db_hostname="localhost"; 
	$db_username="root"; 
	$db_password="123"; 
	/* Имя базы данных */ 
	$dbName="max_autos"; 
	/* Имя таблицы */ 
	$usertable="autos"; 
	// http://192.168.43.144/itvib/11/php/add_db.php?_data=1111-11-11T11%3A11&_email=test%40gmail.com&_url=http%3A%2F%2F192.168.43.144%2Fitvib%2F11%2Fforms%2Fadd_db.html&_phone=84848484484&_age=10&_color=%23000000&_public_key=10&_city=%D0%98%D0%B6%D0%B5%D0%B2%D1%81%D0%BA&_password=123&_description=test&Submit=Submit
	$query="INSERT INTO autos (data, email, url, phone, age, color, public_key, city, password, description) VALUES ('$data', '$email', '$url', '$phone', '$age', '$color', '$public_key', '$city', '$password', '$description')"; 
	// echo $query;
	/* Создать соединение с MySql*/ 
	// Create connection
	$conn = new mysqli($db_hostname, $db_username, $db_password, $dbName);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$result = $conn->query($query);
	echo "Запись введена в БД! <br>"; 
?>