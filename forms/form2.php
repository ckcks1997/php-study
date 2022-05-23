<html>
<body>
<!--취약함!-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Welcome " . htmlspecialchars($_REQUEST['name']) . " <br>";
    echo "Your email address is:  " . ($_POST['email']);
}
?>


<!--
What is the $_SERVER["PHP_SELF"] variable?

The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.

What is the htmlspecialchars() function?

The htmlspecialchars() function converts special characters to HTML entities.
This means that it will replace HTML characters like < and > with &lt; and &gt;.
This prevents attackers from exploiting the code by injecting HTML
 or Javascript code (Cross-site Scripting attacks) in forms.
-->
</body>
</html>

