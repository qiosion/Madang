<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 회원정보 </blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}

	//해당 회원의 총구매액(total_price)와 구매횟수(cnt)를 구하시오.
	//$sql = "SELECT C.*, COUNT(O.orderid) cnt FROM Customer C JOIN ORDERS O ON C.custid=O.custid WHERE C.custid='".$_GET['id']."'";
	$sql = "SELECT C.*, SUM(O.saleprice) total_price, COUNT(O.orderid) cnt FROM Customer C JOIN ORDERS O ON C.custid=O.custid WHERE C.custid='".$_GET['id']."'";
	$result = mysqli_query($conn, $sql);
	
	$id=$_GET['id'];

	$total_price = 0;
	$cnt = 0;


	$row = mysqli_fetch_array($result);
	if(isset($row['total_price'])) {
	    $total_price = $row['total_price'];
	}

	if(isset($row['cnt'])) {
	    $cnt = $row['cnt'];
	}

	echo '<table class="styled-table"><tr><td>회원ID</td><td>'.$id.'</td></tr>';
	echo '<tr><td>이름</td><td>'.$row['name'].'</td></tr>';
	echo '<tr><td>주소</td><td>'.$row['address'].'</td></tr>';
	echo '<tr><td>연락처</td><td>'.$row['phone'].'</td></tr>';
	echo '<tr><td>총구매액</td><td>'.$total_price.'</td></tr>';
	echo '<tr><td>구매횟수</td><td>'.$cnt.'</td></tr>';
	echo '</table>';
	echo '<a href="./orderlist.php" class="w-btn">목록보기</a>';
?>
</body>
</html>
