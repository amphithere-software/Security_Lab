<!DOCTYPE html>
<html>

<head>
    <title>SQL Injection</title>
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
            <h1>Login</h1>
        </legend>

	<form action="dbconnect.php" method="post">

	<input type="text" name="username" id="username" value="username"/>
	<br/><br/>

	<input type="text" name="password" id="password" value="password"/>
	<br/><br/>

	<input type="submit" value="Submit"/>

	</form>

    </fieldset>
    </div>
	<div>
	<p>Use SQL Injection to Login as Admin</p>
	</div>
	<div class="footer">
        <hr />
		<footer>GNU General Public License v2.0</footer>
        <hr />
	</div>

</body>

</html>
