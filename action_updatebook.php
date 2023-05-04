<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 도서 수정 </blockquote></h2>
<?php

	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}

	$bookid = $_POST['bookid'];
	$stock = $_POST['stock'];

	$sql = "UPDATE Book SET stock=$stock WHERE bookid=$bookid";
	echo "Query: $sql";
	$result = mysqli_query($conn, $sql);

?>

<b>Query Result: <?=$sql?></b>
<br>

<?php 
	if($result) { 
?>
		<p>수정 완료</p>

<?php 
	} else { 
?>
		<p>수정 실패</p>
<?php 
	} 
?>

<br>
<a href="/booklist3.php" class="w-btn">뒤로</a>

</body>
</html>
