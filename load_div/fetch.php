<?php
//fetch.php
require "config.php";
$sql = "SELECT * FROM tbl_video ORDER BY video_id DESC";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) > 0)
{
	while($row = mysqli_fetch_array($res))
	{
		echo '<p>'.$row["video"].'</p>';
	}
} 
?>