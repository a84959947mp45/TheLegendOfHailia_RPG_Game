<?php 
header('Access-Control-Allow-Origin: *');
include_once("connectdb.php");
  
$username = $_GET['fname'];
$password = $_GET['fpass'];

$qz = "SELECT userID FROM account WHERE user='".$username."' and pass='".$password."'" ;
$qz = str_replace("\'","",$qz);
$result = @mysqli_query($conn,$qz);
$row = @mysqli_fetch_array($result);
echo $row['userID'];
mysqli_close($conn);
?>
