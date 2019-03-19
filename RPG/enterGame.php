<?php
	header('Access-Control-Allow-Origin: *');
	include_once("connectdb.php");
	$username = $_GET['username'];
	
	// 接收now_stage的資料
	$result = @mysqli_query($conn, "SELECT user, now_stage FROM account WHERE user='".$username."'");
	$row = @mysqli_fetch_array($result);
	
	// 回傳now_stage的值
	echo $row['now_stage'];
?>