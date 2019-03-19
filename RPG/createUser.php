<?php
header('Access-Control-Allow-Origin: *');
include_once("connectdb.php");

$username = $_GET['fname'];
$password = $_GET['fpass'];

$ser = "SELECT userID FROM account WHERE user='".$username."'";
//$ser = str_replace("\'","",$ser); 
$result = @mysqli_query($conn, $ser);

// 找到重複帳號
if(@mysqli_num_rows($result) > 0){
	$row = @mysqli_fetch_array($result);
	die($row['userID']);
}

// 新增帳號
$str = "INSERT INTO `account` (`userID`, `user`, `pass`, `state1_time`, `state2_time`, `state3_time`, `now_stage`) 
	VALUES (NULL, '$username', '$password', '0', '0', '0', '1')";
@mysqli_query($conn, $str);
@mysqli_close($conn);
?>