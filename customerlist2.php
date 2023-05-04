<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
</head>
<body>
<h2><blockquote> 마당서점 회원목록 </blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}

	//Customer table fields: name, address, phone, email
	$sql = "SELECT * FROM Customer";
	$result = mysqli_query($conn, $sql);

	echo '<table class="styled-table">
	          <thead><tr>
		      <td>회원이름</td>
		      <td>주소</td>
		      <td>연락처</td>
		      <td>이메일</td>
			  <td>삭제</td>
		   </tr></thead>
	      <tbody>';
	
	while($row = mysqli_fetch_array($result)) {
		$email = '';
		if(isset($row['email'])) {
		    $email = $row['email'];
		}
?>
		<tr class="active-row">
			<td>
				<b>
				<a href="customerview.php?id=<?=$row['custid']?>">
					<?=$row['name']?>
				</a>
				</b>
			</td>
			<td><?=$row['address']?></td>
			<td><?=$row['phone']?></td>
			<td><?=$email?></td>
			<td>
				<a href="/deletecustomer.php?id=<?=$row['custid']?>">
					<div class="delete-btn"></div>
				</a>
			</td>
		</tr> 
	
<?php	}
	echo '</tbody></table><p>';
?>

<a href="./insertcustomer.php" class="w-btn">고객등록</a>
</body>
</html>
