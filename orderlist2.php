<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
</head>
<body style="width: 800px;">
<h2><blockquote> 마당서점 주문목록 </blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}

	//name, address는 Customer 테이블의 필드이다.
	//bookname, price는 Book 테이블의 필드이다.
	//saleprice, orderdate는 Orders 테이블의 필드이다.
	//Customer, Book, Orders 테이블들을 조인하는 쿼리를 만드시오.
	$sql = "SELECT * FROM customer c JOIN orders o ON c.custid = o.custid JOIN book b ON b.bookid = o.bookid";
	$result = mysqli_query($conn, $sql);

	echo '<table class="styled-table" style="width: 700px"><thead><th>이름</th><th>주소</th><th>주문도서</th><th>정가</th><th>판매액</th><th>주문일자</th></thead><tbody>';
	
	while($row = mysqli_fetch_array($result)) {
		echo ('<tr class="active-row"><td><b>
			<a href="customerview2.php?id='.$row['custid'].'">'
			.$row['name'].'</a></b></td>'
			.'<td>'.$row['address'].'</td>'
			.'<td>'.$row['bookname'].'</td>'
			.'<td>'.$row['price'].'</td>'
			.'<td><b><a href="updateorder.php?id='.$row['orderid'].'">'
			.$row['saleprice'].'</td>'
			.'<td>'.$row['orderdate'].'</td></tr>'); 
	}
	echo '</tbody></table><p>';

?>
</body>
</html>
