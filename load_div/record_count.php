<?php
include("db.php");
$search_word=$_GET['q'];
$sql = mysqli_query($db,"Select id form Messages where message 
LIKE '%$search_word%'");
$record_count=mysqli_num_rows($sql);
//Display count.........
echo $record_count;
?>