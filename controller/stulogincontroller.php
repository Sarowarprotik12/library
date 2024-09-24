<?php
session_start();
require_once('../model/alldb.php');

if(isset($_POST['login'])){
    $id=$_POST['id'];
    $pass=$_POST['pass'];

    if(empty($id) || ($pass)){
        $_SESSION['error']="please fill up the form";
        header("location:../view/stuview.php");
       
    }
}
$res=auth($id,$pass);
    if(mysqli_num_rows($res)==1){
        header("location:../view/stuhome.php");
    }else
        {
            $_SESSION['error']='invalid user';
            header("location:../view/stuview.php");
        }

?>