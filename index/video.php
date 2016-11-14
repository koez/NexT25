<!DOCTYPE html>
<html>
<head>
<title>NexT25 Video</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="video.css">
  <link rel="stylesheet" href="voting.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="video.html">NexT25</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="video.html">HOME</a></li>
        <li><a href="video.html">INVESTOR</a></li>
        <li><a href="video.html">TRENDING</a></li>
        <li><a href="video.html">ABOUT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>
          </ul>
        </li>
		<li><a href="form.html">POST IDEA</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
<div class="content" id="content">
<h2>Idea</h2>
<div id="wrapper">
  <div id="video">
    <video id="video" width="700" height="300" autoplay="autoplay" loop>
	  <source src="video/mansion.mp4" type="video/mp4" />
    </video>
  </div>
   <div id="floating">
  <div id="main">


<div class="box1">
<div class='up'><a href="" class="vote" id="<?php echo $mes_id; ?>" name="up">

<?php echo $up; ?></a></div>
<div class='down'><a href="" class="vote" id="<?php echo $mes_id; ?>" name="down"><?php echo $down; ?></a></div>

</div>

<div class='box2' ><?php echo $msg; ?></div>

</div>
</div>
<br>
<br>
<div id="details"></div>
<br>
<br>
	   <div id="outer">
		  <div class="inner"><button type="submit" id="share" name="share" class="btn btn-success" onclick="return false;">Share</button></div>
		  <div class="inner"><button type="submit" href="#myModal" name="comment" id="comment" data-target="#myModal" data-toggle="modal" class="btn btn-primary" onclick="return false;">Comment</button></div>
     	  <div class="inner"><button type="submit" name="likes" id="like" class="btn btn-danger glyphicon glyphicon-heart"></button></div>
	    </div>
	
  
</div>
</div>
</body>
</html>
<script type="text/javascript">

var video = document.querySelector('video');

video.addEventListener('timeupdate', function() {
  if (!this ._startTime) this ._startTime = this .currentTime;
  
  var playedTime = this .currentTime - this ._startTime;
  
  if (playedTime >= 13) this .pause();
  });
  
  video.addEventListener('seeking', function() {
	this ._startTime = undefined;										
});

$('#myModal').on('show.bs.modal',function() {	// $('#myModal').on('shown.bs.modal',function() {
});	

</script>