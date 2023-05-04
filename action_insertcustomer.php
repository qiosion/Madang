<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 회원 등록 </blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}

	$name = $_POST["name"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];

	$sql = "INSERT INTO customer SET name='$name', address='$address', phone='$phone', email='$email'";
	echo $sql;
	echo '<br>';
	$result = mysqli_query($conn, $sql);
	if($result) {
	    echo '등록 성공';
	}
	else {
	    echo '등록 실패';
	}
	echo '<br><a href="../customerlist3.php" class="w-btn">뒤로</a>'
	
?>

</body>
</html>
