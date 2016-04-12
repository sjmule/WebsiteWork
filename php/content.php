<?php
	$servername = "localhost";
	$username = "senior";
	$password = "design";
	$dbname = "senior_design";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) 
	{
		die("Connection failed: ".$conn->connect_error);
	}

	$request = "SELECT title,content FROM content WHERE page = '".$_GET['page']."'";
	$result = $conn->query($request);
	$resultArr = $result->fetch_assoc();

	$conn->close();
	echo json_encode(array("title"=>$resultArr['title'],"content"=>$resultArr['content']));

	exit(0);

?>
