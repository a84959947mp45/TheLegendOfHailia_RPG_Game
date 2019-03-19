<?php
	header('Access-Control-Allow-Origin: *');
	include_once("connectdb.php");
	
	// 選擇資料並進行排序，DESC為由大到小，ASC由大到小
	$sql = "SELECT user, state1_time, state2_time, state3_time FROM account
		ORDER BY state1_time+state2_time+state3_time DESC";
	$result = @mysqli_query($conn, $sql);
?>


<html>
<head>
  <title>分頁與排序</title>
  <meta charset="UTF-8">
  <style>
    table {border:1px solid black; width:600px;text-align:center}
	.grey {background-color:lightgrey}
	#h1,#h3 {broder-width: 20px 20px 20px 20px;}
  </style>
</head>
<body>

<table>
	<tr>
	<th id="h3">排名</th>
	<th id="h3">帳號名稱</th>
	<th id="h3">關卡一</th>
	<th id="h3">關卡二</th>
	<th id="h3">關卡三</th>
	<th id="h3">總共分數</th>
	</tr>
<?php
	// 用迴圈輸出目前頁次的資料
	$count = 1;
	while($row = @mysqli_fetch_array($result)){
		$sum = $row['state1_time']+$row['state2_time']+$row['state3_time'];
		echo '<tr>';
		echo "<td>{$count}</td>";
		echo "<td>{$row['user']}</td>";
		echo "<td>{$row['state1_time']}</td>";
		echo "<td>{$row['state2_time']}</td>";
		echo "<td>{$row['state3_time']}</td>";
		echo "<td>{$sum}</td>";
		echo '</tr>';
		$count = $count+1;
	}
echo '</table>';
?>

</body>
</html>