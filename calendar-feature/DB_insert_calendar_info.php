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

	echo 'Connected successfully';

	// sql to insert data


	$sql = "INSERT INTO calendar_info VALUES ('SE2050', 'SE2070', 'SE2090', 'SE3100', 'SE3200', 'Food Event', 'Movie Event', 10001),
                ('SE4050', 'SE4200', 'SE2090', 'SE3300', 'SE4500', 'Sport Event', 'Movie Event', 10002)"; 
        

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>