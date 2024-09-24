<?php
function getcon(){
$serverName="localhost";
$username="root";
$password="";
$dbname="aa";
$con=mysqli($serverName,$username,$password,$dbname);
return $con;
}
?>