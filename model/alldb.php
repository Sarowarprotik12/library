<?php
require_once('db.php');
function auth($id,$pass){
$conn=getcon();
$sql="select * from ab where id='$id' and pass='$pass'";
$res=mysqli_query($conn,$sql);
return $res;
}
?>