<?php
    session_start();
?>
<html>

<head>
    <title>Stole Session</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<body onload="document.autopost.submit()">
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
            <h1>Stole Session</h1>
        </legend>
        <div>
        <p><?php print_r($_SESSION); ?><br />Navigate back to Persistent XSS</p>
        </div>
        <form action="persistentXSS.php" method="post" target="hiddenFrame" name="autopost">
            <input type="hidden" name="comment" value="<?php print_r($_SESSION); ?>" />
        </form>
        <iframe name="hiddenFrame" style="display: none;"></iframe>
    </fieldset>
    
	<div class="footer">
		<hr />
		<footer>GNU General Public License v2.0</footer>
		<hr />
	</div>
</body>

</html>
