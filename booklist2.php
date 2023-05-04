<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="book.css" rel="stylesheet">
</head>
<body>
<h2><blockquote> 마당서점 도서목록 </blockquote></h2>
<?php
	$conn = mysqli_connect('localhost', 'madang', 'madang', 'practice3');
	if (!$conn){
		echo 'Connection Error';
		echo mysqli_connect_error();
		exit();
	}

	$sql = "SELECT * FROM Book";
	$result = mysqli_query($conn, $sql);

	echo '<table class="styled-table"><thead><tr><td>BOOKNAME</td><td>PUBLISHER</td><td>PRICE</td><td>STOCK</td></tr></thead><tbody>';
	
	while($row = mysqli_fetch_array($result)) {
		echo ('<tr class="active-row"><td><b>
			<a href="bookview2.php?id='.$row['bookid'].'">'
			.$row['bookname'].'</a></b></td><td>'
			.$row['publisher'].' </td><td> '
			.$row['price'].'</td><td>'
			.$row['stock'].'</td></tr>'); 
	}
	echo '</tbody></table><p>';

?>
</body>
</html>
