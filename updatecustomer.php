<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
<body>
<h2><blockquote> 마당서점 회원 수정</blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}
	$custid = $_GET['id'];
	//$bookid 를 이용해서 SELECT 쿼리를 작성하세요.
	$sql = "SELECT * FROM customer WHERE custid='".$custid."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	
?>
<form method="POST" id="register" style="width: 310px;" action="/action_updatecustomer.php">
    <input type="hidden" name="custid" value="<?php echo $row['custid']; ?>">
    <input type="text" class="text" name="name" placeholder="Name" readonly value="<?=$row['name']; ?>"><br>
    <input type="text" class="text" name="address" placeholder="Address" value="<?=$row['address']; ?>"></br>
    <input type="tel" class="text" name="phone" placeholder="Phone" value="<?=$row['phone']; ?>"></br>
    <input type="email" class="text" name="email" placeholder="Email" value="<?=$row['email']; ?>"></br>
	<div>
		<a href="/customerlist3.php" class="form-btn">뒤로</a>
		<input type="submit" name="register" value="수정" class="form-btn" style="float: right;">
	</div>

</form>

</body>
</html>
