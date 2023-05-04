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

	$bookname = $_POST["bookname"];
	$price = $_POST["price"];
	$publisher = $_POST["publisher"];

	//$sql = "INSERT INTO Book SET bookname='$bookname', publisher='$publisher', price='$price'";
	$sql = "";
	echo $sql;
	echo '<br>';
	$result = mysqli_query($conn, $sql);
	if($result) {
	    echo '등록 성공';
	}
	else {
	    echo '등록 실패';
	}
	echo '<br><a href="../booklist.php" class="w-btn">뒤로</a>'
	
?>

</body>
</html>
