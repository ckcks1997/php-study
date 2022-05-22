<html>
<body>
<!--$_REQUEST : GET/POST 상관없이 값 받음
  $_GET/$_POST : 각 방식으로 받음
  -->
Welcome <?php echo $_REQUEST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>