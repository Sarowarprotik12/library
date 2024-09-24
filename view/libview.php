

<html>
<head>
<title>
Admin loginpage.
</title>

</head>
<form method ="POST" action=../controller/liblogincontroller.php>

<body>
<h1> Admin login page</h1>
ID:<input type="text" name="id"><br>
PASS:<input type="password" name="pass"><br>
<?php
SESSION_start();
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset ($_SESSION['error']);
}

?>


<button name="login">LOGIN</button>
</body>
</form>

</html>

