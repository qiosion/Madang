<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 도서목록 </blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}
	
	$sql = "SELECT * FROM Book WHERE bookid='".$_GET['id']."'";
	$result = mysqli_query($conn, $sql);
	
	$id=$_GET['id'];

	$author = '';

	$row = mysqli_fetch_array($result);
	if(isset($row['author'])) {
	    $author = $row['author'];
	}
	echo '<table class="styled-table"><tr><td>책번호</td><td>'.$id.'</td></tr>';
	echo '<tr><td>책제목</td><td>'.$row['bookname'].'</td></tr>';
	echo '<tr><td>출판사</td><td>'.$row['publisher'].'</td></tr>';
	echo '<tr><td>가격</td><td>'.$row['price'].'</td></tr>';
	echo '<tr><td>재고</td><td>'.$row['stock'].'</td></tr>';
	echo '<tr><td>작가</td><td>'.$author.'</td></tr>';
	echo '</table>';
	echo '<a href="./booklist.php" class="w-btn">목록보기</a>';
?>
</body>
</html>
