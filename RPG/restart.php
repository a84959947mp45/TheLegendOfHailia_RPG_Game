<?php
	header('Access-Control-Allow-Origin: *');
	include_once("connectdb.php");
	
	$username = $_GET['username'];
	
	// 將使用者重新設定值
	$sql = "UPDATE `account` SET `state1_time` = '0', `state2_time` = '0', `state3_time` = '0', `now_stage` = '1' WHERE user='".$username."'";
	$result = @mysqli_query($conn, $sql);
?>