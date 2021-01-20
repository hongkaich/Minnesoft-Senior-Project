<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Sign up</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
       <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        
        <!------Link font awesome------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
</body>
<form class="signup-form" method="POST" type="multipart/form-data">
	<fieldset>
		<legend>Signup</legend>
		
		<div id="signup_response" class="response_error"></div>
		
		<div>
		<label for="name">Username</label>
		<input type="text" name="username" id="username" placeholder="username">
		</div>
		
		<div>
		<label for="email">Email</label>
		<input type="text" name="email" id="email" placeholder="Email">
		</div>
		
		<div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="Password">
		</div>
		
		<div>
		<label for="Phone Number">PhoneNumber</label>
                <input type="text" name="phonenumber" id="phonenumber" placeholder="PhoneNumber">
		</div>
		
		<div>
		<td><input type="button" value="Submit"  onclick="return false;" onmousedown="signup();">
		</td>
		<a href="Login-loginpage.php" onclick="login_page()" >Aleardy have account? Login</a><br>
                <input type="button" value="Back" onclick="window.location='account.php'">
		</div>
	</fieldset>
</form>
</html>
<?php
	$dbhost = 'fdb30.awardspace.net';
	$dbuser = '3717006_umcclasspassport';
	$dbpass = 'UMC12345678';
	$dbname = '3717006_umcclasspassport';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	echo 'Connected successfully'."<br>";
	
	$sql = "CREATE TABLE  User_list(
	ID int(10) NOT NULL,
        Name varchar(10) NOT NULL,
        Email varchar(15) NOT NULL,
        Phone int(10) NOT NULL,
        Birth DATE NOT NULL,
        PRIMARY KEY (ID)
	)";
	
	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}


	mysqli_close($conn);
?>
