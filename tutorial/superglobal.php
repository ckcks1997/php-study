<?php
$x = 75;
$y = 25;
function addition() {
    global $x;
    $GLOBALS['z'] = $x + $GLOBALS['y'];
    $x+=1;
}

addition();
echo $x." ".$y." ".$z;
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "hello";
}
?>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>


</body>
</html>
