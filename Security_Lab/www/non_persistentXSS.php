<!DOCTYPE html>
<html>

<head>
    <title>Non-Persistent XSS</title>
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

    <fieldset>
        <legend>
            <h1>Non-Persistent XSS</h1>
        </legend>
        <div style="text-align: center;">

            <form action="non_persistentXSS.php" method="get">
                <input type="text" name="search" placeholder="search" />
                <input type="submit" value="Search" />
            </form>

        </div>
        <br />
        <br />
        <p style="text-align: center;">
            <?php
            if (isset($_GET["search"])) {
                echo "Search Results: " . $_GET["search"];
                echo "<br /><br /> <i>Nothing Found: </i>";
            }
            ?>
        </p>
        <p style="text-align: center;"> Try running different scripts and tags in the search bar. </p>

    </fieldset>
	<div class="footer">
		<hr />
		<footer>GNU General Public License v2.0</footer>
		<hr />
	</div>
</body>

</html>
