<?php
	header('Access-Control-Allow-Origin: *');
	include_once("connectdb.php");
	
	$username = $_GET['username'];
	$userTime = $_GET['score'];
	$thisStage = $_GET['thisStage'];
	$nextStage = $thisStage + 1;
	
	// 儲存使用者的分數，且thisStage+1存給database
	//$sql = "UPDATE account SET state'".$thisStage."'_time = '".$userTime."', now_stage = '".$nextStage."' WHERE user = '".$username."'";
	$sql = "";
	if($thisStage == 1)
		$sql = "UPDATE account SET state1_time = '".$userTime."', now_stage = 2 WHERE user = '".$username."'";
	else if($thisStage == 2)
		$sql = "UPDATE account SET state2_time = '".$userTime."', now_stage = 3 WHERE user = '".$username."'";
	else if($thisStage == 3)
		$sql = "UPDATE account SET state3_time = '".$userTime."', now_stage = 4 WHERE user = '".$username."'";
	$result = @mysqli_query($conn, $sql);

?>