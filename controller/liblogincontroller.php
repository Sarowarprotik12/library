<?php
session_start();
if(isset($_POST['login'])){
    $id=$_POST['id'];
    $pass=$_POST['pass'];

    if(empty($id) || ($pass)){
        $_SESSION['error']="please fill up the form";
        header("location:../view/libview.php");
       
    }
}
?>