<?php
    session_start();
    $servername = "db";
    $db_username = "root";
    $db_password = "rootpassword";
    $dbname = "ACM";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fName;
    $lName;
    $_SESSION['username'];
    $_SESSION['session'];
    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM members WHERE userName = '$username' AND password = sha1('$password')";
    $result = $conn->query($sql);


	if($result->num_rows > 0) {
			
		$row = $result->fetch_assoc();
		$fName = $row['firstName'];
		$lName = $row['lastName'];
		$_SESSION['session'] = $row['sessionID'];
		$_SESSION['username'] = $row['userName'];
		} else{
			
			echo "<script>alert('Invalid username or password')</script>";
			
		}


    $conn->close();
?>

<html>

<head>
    <title>Greeting Page</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />

	<script>
		function myFunction(){
		document.getElementById("message").innerHTML = "<?php echo ' ' . $fName . ' ' . $lName. ' '; ?>";
			if(document.getElementById("message").innerText != "") {
				document.getElementById("message2").innerHTML = "Success!";
			}
		}

	</script>
</head>

<body onload="myFunction()">
    <div>
        <nav class="topnav">
            <a href="index.php">SQL Injection</a>
            <a href="register.html">Registration</a>
            <a href="non_persistentXSS.php">Non-Persistent XSS</a>
            <a href="persistentXSS.php">Persistent XSS</a>
            <a href="CSRF.php">Cross-Site Request Forgery</a>
            <br />
        </nav>
    </div>
    <br />

    <fieldset>
        <legend>
            <h1>Hello!</h1>
        </legend>
	<div>
	<h1 id="message"></h1>
<?php
    echo $_SESSION['username'];
    echo $_SESSION['session'];
?>
	</div>

    </fieldset>
	<div>
	<p id="message2">Login Failed!</p>
	</div>
	<div class="footer">
		<hr />
		<footer>GNU General Public License v2.0</footer>
		<hr />
	</div>
</body>

</html>
