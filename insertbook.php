<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 도서 등록 </blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}
	
?>

<form method="POST" id="register" style="width: 310px;" action="/action_insertbook.php">
	<input type="text" class="text" name="bookname" placeholder="Book Name"><br>
	<input type="text" class="text" name="publisher" placeholder="Publisher"></br>
	<input type="number" class="text" name="price" placeholder="Price"></br>
	<div>
		<a href="./booklist3.php" class="form-btn">뒤로</a>
		<input type="submit" name="register" value="입력" class="form-btn" style="float: right;">
	</div>

</form>

</body>
</html>
