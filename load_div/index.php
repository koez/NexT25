<?php
include("db.php")
?>

<!DOCTYPE html>
<html>
<title>Auto Div Refresh</title>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
</head>
<body>
<div id="load_tweets"> </div>
</body>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('record_count.php?q=<?php echo $search_word; ?>').fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds

</script>