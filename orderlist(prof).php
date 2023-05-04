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

	$sql = "SELECT * FROM Orders O JOIN Customer C ON O.custid=C.custid JOIN Book B ON O.bookid=B.bookid";
	$result = mysqli_query($conn, $sql);

	echo '<table class="styled-table" style="width: 700px"><thead></thead><tbody>';
	
	while($row = mysqli_fetch_array($result)) {
		echo ('<tr class="active-row"><td><b>
			<a href="customerview2.php?id='.$row['custid'].'">'
			.$row['name'].'</a></b></td>'
			.'<td>'.$row['address'].'</td>'
			.'<td>'.$row['bookname'].'</td>'
			.'<td>'.$row['price'].'</td>'
			.'<td><b><a href="updateorder.php?id='.$row['orderid'].'">'
			.$row['saleprice'].'</a></b></td>'
			.'<td>'.$row['orderdate'].'</td></tr>'); 
	}
	echo '</tbody></table><p>';

?>
</body>
</html>
