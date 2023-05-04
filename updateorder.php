<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 주문 수정</blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}
	$sql = "SELECT * FROM Orders O JOIN Customer C ON O.custid=O.custid JOIN Book B ON O.bookid=B.bookid WHERE orderid='".$_GET['id']."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	
?>
<form method="POST" id="register" style="width: 310px;" action="/action_updateorder.php">
    <input type="hidden" name="orderid" value="<?php echo $row['orderid']; ?>">
    <input type="text" class="text" name="name" placeholder="Customer" readonly value="<?php echo $row['name']; ?>"><br>
    <input type="text" class="text" name="bookname" placeholder="Book Name" readonly value="<?php echo $row['bookname']; ?>"><br>
    <input type="text" class="text" name="price" placeholder="Price" readonly value="<?php echo $row['price']; ?>"></br>
    <input type="number" class="text" name="saleprice" placeholder="SalePrice" value="<?php echo $row['saleprice']; ?>"></br>
	<div>
		<a href="./orderlist2.php" class="form-btn">뒤로</a>
		<input type="submit" name="register" value="수정" class="form-btn" style="float: right;">
	</div>

</form>

</body>
</html>
