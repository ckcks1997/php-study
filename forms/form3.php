<html>
<body>
<!--htmlspecialchars를 이용해야 함-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Welcome " .($_REQUEST['name']) . " <br>";
    echo "Your email address is:  " . ($_POST['email']);
}
?>


</body>
</html>

