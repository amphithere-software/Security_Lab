<?php
session_start();
$fName = $_GET['firstname'];
$lName = $_GET['lastname'];
$uName = $_GET['username'];
$pw = $_GET['password'];
$_SESSION['username'];
$_SESSION['session'];

$servername = "db";
$username = "root";
$password = "rootpassword";
$dbname = "ACM";

    
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$SQL = "INSERT INTO members (firstName, lastName, sessionID, userName, password) VALUES ('$fName', '$lName', sha1('$fName'), '$uName', sha1('$pw'))";

if (mysqli_query($conn, $SQL)) {
    $_SESSION['session'] = sha1('$fName');
    $_SESSION['username'] = $uName;
} else {
    echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<head>
    <title>Greeting Page</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />

    <script>
        function myFunction() {
            document.getElementById("message").innerHTML = "<?php echo ' ' . $fName . ' ' . $lName . ' '; ?>";
            if (document.getElementById("message").innerText != "") {
                document.getElementById("message2").innerHTML = "Registered!";
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
