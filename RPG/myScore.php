<?php
	header('Access-Control-Allow-Origin: *');
	include_once("connectdb.php");
	$username = $_GET['user'];
	
	$sql = "SELECT user, state1_time, state2_time, state3_time FROM account WHERE user='".$username."' ";
	$result = @mysqli_query($conn, $sql);
	$row = @mysqli_fetch_array($result);
	
	$score = $row['state1_time'] + $row['state2_time'] + $row['state3_time'];
	echo "玩家" . $username . "  的分數為" . $score;
?>