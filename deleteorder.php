<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 주문 삭제</blockquote></h2>
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
<form method="POST" id="register" style="width: 310px;" action="/action_deleteorder.php">
    <input type="hidden" name="orderid" value="<?php echo $row['orderid']; ?>">
    <input type="text" class="text" name="name" placeholder="Customer" readonly value="<?=$row['name']; ?>"><br>
    <input type="text" class="text" name="bookname" placeholder="Book Name" readonly value="<?=$row['bookname']; ?>"><br>
    <input type="text" class="text" name="price" placeholder="Price" readonly value="<?=$row['price']; ?>"></br>
    <input type="text" class="text" name="saleprice" placeholder="SalePrice" readonly value="<?=$row['saleprice']; ?>"></br>
    <input type="text" class="text" name="orderdate" placeholder="OrderDate" readonly value="<?=$row['orderdate']; ?>"></br>

    <div>
	<a href="/orderlist4.php" class="form-btn">취소</a>
	<input type="submit" name="register" value="삭제" class="form-btn" style="float: right;">
    </div>
</form>

</body>
</html>
