

<html>
<head>
<title>
Student logpage.
</title>

</head>
<form method ="POST" action=../controller/stulogincontroller.php>

<body>
<h1>Student loginpage</h1>
ID:<input type="text" name="id"><br>
PASS:<input type="password" name="pass"><br>
<?php
session_start();
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset ($_SESSION['error']);
}

?>
<button name="login">LOGIN</button>
</body>
</form>

</html>

