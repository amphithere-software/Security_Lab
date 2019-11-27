<?php
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['session'] = $_POST['session'];
?>
<html>

<head>
    <title>Modify Session</title>
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
            <h1>Modify Session</h1>
        </legend>

        <div>
        <form action="mod_session.php" method="post">
                <input type="text" name="username" id="username" value="username"/>
                <br/><br/>

                <input type="text" name="session" id="session" value="session"/>
                <br/><br/>

                <input type="submit" value="Submit"/>

        </form>
        </div>
    </fieldset>
    
	<div class="footer">
		<hr />
		<footer>GNU General Public License v2.0</footer>
		<hr />
	</div>
</body>

</html>
