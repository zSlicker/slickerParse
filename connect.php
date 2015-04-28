<?php 
		$hostname = 'localhost';
		$username = 'Slicker';
		$passwordname = '31337';
		$basename = 'dataparse';
		$conn = new mysqli($hostname, $username, $passwordname, $basename) or die('Невозможно открыть базу');

		$query1 = "SET character_set_client = 'utf8'";
		$query2 = "SET character_set_connection = 'utf8'";
		$query3 = "SET character_set_results = 'utf8'";

		$conn->query($query1);
		$conn->query($query2);
		$conn->query($query3);

?>