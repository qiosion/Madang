<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="book.css" rel="stylesheet">
</head>

<body style="width: 800px;">

<h2><blockquote> PHP 블록 #1 </blockquote></h2>
<?php
	for($i=0;$i<=10;$i=$i+1) {
        echo '<div>HTML TEXT '.$i.' </div>';
    }
?>

<br>
<hr>
<br>

<h2><blockquote> PHP 블록 #2 </blockquote></h2>
<?php
	for($i=0;$i<=10;$i=$i+1) {
        echo ('<div>HTML TEXT '.$i.' </div>');
    }
?>

<br>
<hr>
<br>

<h2><blockquote> PHP 블록 #3 </blockquote></h2>
<?php
	for($i=0;$i<=10;$i=$i+1) {
        echo "<div>HTML TEXT $i </div>";
    }
?>

<br>
<hr>
<br>

<h2><blockquote> PHP 블록 #4 </blockquote></h2>
<?php
    for($j=0;$j<=10;$j+=1) {
?>
    <div>HTML TEXT <?=$j?> </div>  
<?php
    }
?>

</table>
</body>
</html>
