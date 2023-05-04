<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 도서 수정</blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}
	$bookid = $_GET['id'];
	//$bookid 를 이용해서 SELECT 쿼리를 작성하세요.
	$sql = "SELECT * FROM Book WHERE bookid='".$bookid."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	
?>
<form method="POST" id="register" style="width: 310px;" action="/action_updatebook.php">
    <input type="hidden" name="bookid" value="<?php echo $row['bookid']; ?>">
    <input type="text" class="text" name="bookname" placeholder="Book Name" readonly value="<?=$row['bookname']?>"><br>
    <input type="text" class="text" name="publisher" placeholder="Publisher" readonly value="<?=$row['publisher']?>"></br>
    <input type="text" class="text" name="price" placeholder="Price" readonly value="<?=$row['price']?>"></br>
    <input type="number" class="text" name="stock" placeholder="Stock" value="<?php echo $row['stock']; ?>"></br>
	<div>
		<a href="/booklist3.php" class="form-btn">뒤로</a>
		<input type="submit" name="register" value="수정" class="form-btn" style="float: right;">
	</div>

</form>

</body>
</html>
