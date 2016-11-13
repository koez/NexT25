<?php
//the script for grab path extension that store object inside it. Store it inside S3 bucket
//connect the s3 with mysql
//try to use Redis to takeover mysql

error_reporting(1);
$con = mysqli_connect("localhost","root","","next25");

extract($_POST);

$target_dir = "video/";

$target_file = $target_dir . basename($_FILES["upload"]["name"]);

if($upload)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($imageFileType != "mp4" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
	echo "File Not Support. Please Try Again";
}
else
{
   $video_path = $_FILES['upload']['name'];
   mysqli_query("INSERT INTO video(video_name) VALUES('$video_path')");
   move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file);
   echo "Your File Has Been Successfully Uploaded";
}
}

//display it

if($display)
{
  $query = mysqli_query("SELECT * FROM video");
	
	while($all_video = mysqli_fetch_array($query))
	
	{

?>
	<div id="video">
		<video id="video" width="700" height="300" autoplay="autoplay" loop>
			<source src="video/<?php echo $all_video['video_name']; ?>" type="video/mp4" />
		</video>
	</div>

	<?php } } ?>

<!DOCTYPE html>
<html>
<head>
<title>NexT25 Video</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="video.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
	<tr><td><input type="file" name="upload"/></td></tr>
	<tr><td>
		<input type="submit" class="btn btn-succes" name="upload"/>
</body>
</html>

