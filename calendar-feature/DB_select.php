<?php

	//Provide your server and database information below
	$dbhost = 'fdb30.awardspace.net';
	$dbuser = '3717006_umcclasspassport';
	$dbpass = 'UMC12345678';
	$dbname = '3717006_umcclasspassport';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	echo 'Connected successfully'."<br>";

	// sql to create table

	$sql = "SELECT Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday 
                FROM calendar_info
                WHERE id = 10001";
                
        $result = mysqli_query($conn, $sql);


	mysqli_close($conn);
    ?>
