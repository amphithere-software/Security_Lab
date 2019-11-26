<?php
session_start();
$servername = "db";
$username = "root";
$password = "rootpassword";
$dbname = "xss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['clear'])) {
    $sql = "TRUNCATE TABLE comments";
    if ($conn->query($sql) === TRUE) {

    } else {
        echo '<div style="position: absolute; bottom: 30%; left: 15%;">Error!</div>' . $conn->error;
    }
}

if (isset($_POST['comment'])) {
	$sql = "INSERT INTO comments (comment)
	VALUES ('" . addslashes($_SESSION['username']) . "<br><hr>" . addslashes($_POST['comment']) . "')";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Persistent XSS </title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />

</head>

<body>
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
    <div>
        <fieldset>
            <legend>
                <h1>Persistent XSS</h1>
            </legend>

            <p>
                <?php
                if (isset($_POST['comment'])) {
                    if ($conn->query($sql) === TRUE) {
                        echo "New comment added!";
                    } else {
                        echo "Error!";
                    }
                }
                ?>
            </p>
            <form action="persistentXSS.php" method="post">
                <textarea rows="6" cols="50" name="comment" id="comment" placeholder="Leave a comment" maxlength="400"></textarea>
                <div>

                    <input type="submit" value="Comment" />

                </div>
            </form>
        </fieldset>
    </div>
    <br />
    <br />

    <table style="border: none;">
        <?php
        $sql = "SELECT id, comment FROM comments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
		while ($row = $result->fetch_assoc()) {
		    	echo "<tr><td style='width:35%;padding:10px'>" . "Comment #" . $row["id"] . "<br><hr>" . $row["comment"] . "<br></td></tr>";
            }
        } else {
            echo "<tr><td style='width:35%'>No Comments!</td></tr>";
        }
        $conn->close();
        ?>

    </table>

    <p style="text-align: center; color: black;"> Add scripts to compromise database. </p>
    <div>

        <form action="persistentXSS.php" method="post">
            <input type="submit" name="clear" value="Clear Table" />
        </form>

    </div>

	<div>
	<p id="message"></p>
	</div>
	<br /><br /><br /><br />
	<div class="footer">
		<hr />
		<footer>GNU General Public License v2.0</footer>
		<hr />
	</div>
</body>

</html>
