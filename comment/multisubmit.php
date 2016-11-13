
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Submit multiple forms with jquery</title>
  
 <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".comment_button").click(function(){

var element = $(this);
var I = element.attr("id");

$("#slidepanel"+I).slideToggle(300);
$(this).toggleClass("active"); 

return false;});});
</script>
<script type="text/javascript">
$(document).ready(function()
{
$(".comment_submit").click(function(){


var element = $(this);
var Id = element.attr("id");

var test = $("#textboxcontent"+Id).val();
var dataString = 'textcontent='+ test + '&com_msgid=' + Id;

if(test=='')
{
alert("Please Enter Some Text");
}
else
{
$("#flash"+Id).show();
$("#flash"+Id).fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle"> loading.....');


$.ajax({
type: "POST",
url: "insertajax.php",
data: dataString,
cache: false,
success: function(html){
$("#loadplace"+Id).append(html);
$("#flash"+Id).hide();

}
});

}





return false;});});
</script>
<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
.comment_box
{
background-color:#D3E7F5; border-bottom:#ffffff solid 1px; padding-top:3px
}
h1
{
color:#555555
}
a
	{
	text-decoration:none;
	color:#d02b55;
	}
	a:hover
	{
	text-decoration:underline;
	color:#d02b55;
	}
	*{margin:0;padding:0;}
	
	
	ol.timeline
	{list-style:none;font-size:1.2em;}ol.timeline li{ position:relative;padding:.7em 0 .6em 0;  height:45px; border-bottom:#dedede dashed 1px}ol.timeline li:first-child{border-top:1px dashed #dedede;}
	.comment_button
	{
	margin-right:30px; background-color:#dedede; color:#000; border:#000 solid 2px; padding:3px;font-weight:bold; font-size:11px; font-family:Arial, Helvetica, sans-serif
	}
	
	.comment_submit
	{
	background-color:#3b59a4; color:#FFFFFF; border:none; font-size:11px; padding:3px; margin-top:3px;
	}
	.panel
	{
	margin-left:50px; margin-right:50px; margin-bottom:5px; background-color:#D3E7F5; height:45px; padding:6px; width:400px;
	display:none;
	}
	.load_comment
	{
	margin-left:50px; margin-right:50px; margin-bottom:5px; background-color:#D3E7F5; height:25px; padding:6px; width:400px; font-size:14px;
	
	}
	.flash_load
	{
	margin-left:50px; margin-right:50px; margin-bottom:5px;height:20px; padding:6px; width:400px; 
	display:none;	}

</style>
</head>

<body>
<div style="background:url(http://lh4.ggpht.com/_N9kpbq3FL74/SdxnYQti7XI/AAAAAAAABcQ/JmDyIsUOons/feedbirdl.jpg) right no-repeat #FFFFFF; height:90px; border-bottom:#dedede dashed 2px; padding-left:10px; ">
  <h2>More tutorials <a href="http://9lessons.blogspot.com" style="color:#0099CC">9lessons.blogspot.com</a></h2><br />
  <span style="float:right; padding-right:70px"><h3><a href="http://feeds2.feedburner.com/9lesson">Subscribe to my feeds</a></h3></span> <span style="float:left; "><h3><a href="http://9lessons.blogspot.com/2009/06/submit-multiple-forms-jquery-ajax.html">Tutorial Link</a>&nbsp;&nbsp;&nbsp;Follow me on <a href="http://twitter.com/9lessons" target="_blank">Twitter</a></h3></span>     </div>

<div align="center">
<table cellpadding="0" cellspacing="0" width="500px">
<tr>
<td>
<div> <h1>Click Comment Button</h1> </div>
<div style="height:7px"></div>




<ol  id="update" class="timeline">
<?php
$dbHost = 'localhost'; 
$dbUsername = 'root';
$dbPassword = 'root';
$dbDatabase = 'egglabs';
$db = mysql_connect($dbHost, $dbUsername, $dbPassword) or die ("Unable to connect to Database Server.");
mysql_select_db ($dbDatabase, $db) or die ("Could not select database.");
$sql = mysql_query("SELECT msg,msg_id FROM messages limit 5");
while($row=mysql_fetch_array($sql))
{
$msg=$row['msg'];
$msg_id=$row['msg_id'];
?>

<li>

<div align="left">
<h4><?php echo $msg; ?></h4>
<a href="#" class="comment_button" id="<?php echo $msg_id; ?>">Comment</a>
</div>
</li>
<div  id="loadplace<?php echo $msg_id; ?>" >

</div>
<div id="flash<?php echo $msg_id; ?>" class='flash_load'></div>
<div class='panel' id="slidepanel<?php echo $msg_id; ?>">
<form action="" method="post" name="<?php echo $msg_id; ?>">
<textarea style="width:390px;height:23px" id="textboxcontent<?php echo $msg_id; ?>" ></textarea><br />
<input type="submit" value=" Comment_Submit "  class="comment_submit" id="<?php echo $msg_id; ?>" />



</form>
</div>
<?php } ?>

</ol>

</td>
</tr>
</table>






</div>
</body>
</html>
