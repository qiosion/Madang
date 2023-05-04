<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 주문 삭제 </blockquote></h2>
<?php

	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}

	$orderid = $_POST['orderid'];

	$sql = "DELETE FROM Orders WHERE orderid=$orderid";
	$result = mysqli_query($conn, $sql);

?>

<b><?=$sql?></b>
<br>

<?php 
	if($result) { 
?>
		<p>삭제 완료</p>

<?php 
	} else { 
?>
		<p>삭제 실패</p>
<?php 
	} 
?>

<br>
<a href="/orderlist4.php" class="w-btn">뒤로</a>

</body>
</html>
