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
?>

<table class="styled-table">
	<thead>
		<tr><td>BOOKNAME</td><td>PUBLISHER</td><td>PRICE</td><td>STOCK</td><td>DEL</td></tr>
	</thead>

<tbody>
	
<?php	
	while($row = mysqli_fetch_array($result)) { 
		$stock = 0;
		if(isset($row['stock'])) {
			$stock = $row['stock'];
		}
?>
		<tr class="active-row">
			<td>
				<b><a href="/bookview2.php?id=<?=$row['bookid']?>"><?=$row['bookname']?></a></b>
			</td>
			<td><?=$row['publisher']?></td>
			<td><?=$row['price']?></td>
			<td>
				<b><a href="/updatebook.php?id=<?=$row['bookid']?>"><?=$stock?></a></b>
			</td>
			<td>
        		<a href="/deletebook.php?id=<?=$row['bookid']?>">
            		<div class="delete-btn"></div>
        		</a>
    		</td>
		</tr>
<?php 
	} 
?>

</tbody></table><p>
<a href="/insertbook.php" class="w-btn">도서등록</a>
</body>
</html>
