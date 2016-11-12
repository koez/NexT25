<?php
//insert.php(auto_refresh div)
require = "config.php";
$sql = "INSERT INTO tbl_video VALUES ('".$_POST["video"]."')";
mysqli_query($con, $sql);
?>