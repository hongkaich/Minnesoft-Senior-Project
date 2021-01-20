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

	$sql = "CREATE TABLE calendar_info (
         Monday varchar(50),
         Tuesday varchar(50),
         Wednesday varchar(50),
         Thursday varchar(50),
         Friday varchar(50),
         Saturday varchar(50),
         Sunday varchar(50),
         id int(11) NOT NULL,
         PRIMARY KEY (id)
         )";

	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}


	mysqli_close($conn);
    ?>

