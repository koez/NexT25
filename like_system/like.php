<?php 
$query=mysqli_query($db,"SELECT U.username, U.uid, M.msg_id, M.message FROM users U, messages M WHERE U.uid=M.uid_fk and U.uid='$sessions_uid'");
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$msg_id=$row['msg_id'];
$message=$row['message'];
$username=$row['username'];
$uid=$row['uid'];
?>

<div class="stbody">
<div class="stimg"><img src="userprofile.jpg"/></div>
<div class="sttext">
<b>Srinivas Tamada</b>: Status Message
<div class="sttime">48 seconds ago</div>
<div>
<?php
$q=mysqli_query($db,"SELECT like_id FROM message_like WHERE uid_fk='$uid' and msg_id_fk='$msg_id' ");
if(mysqli_num_rows($q)==0)
{
echo '<a href="#" class="like" id="like.$msg_id." title="Unlike" rel="Unlike">Unlike</a>';
 } else { 
echo '<a href="#" class="like" id="like.$msg_id." title="Like" rel="Like">Like</a>';
} ?>
</div>

<?php if($like_count>0) { 
$query=mysqli_query($db,"SELECT U.username,U.uid FROM message_like M, users U WHERE U.uid=M.uid_fk AND M.msg_id_fk='$msg_id' LIMIT 3");
?>
<div class='likeUsers' id="likes<?php echo $msg_id ?>">
<?php
$new_like_count=$like_count-3; 
while($row=mysqli_fetch_array($query))
{
$like_uid=$row['uid']; 
$likeusername=$row['username']; 
if($like_uid==$uid)
{
echo '<span id="you'.$msg_id.'"><a href="'.$likeusername.'">You</a></span>';
}
else
{ 
echo '<a href="'.$likeusername.'">'.$likeusername.'</a>';
}  
}
echo 'and '.$new_like_count.' other friends like this';
?> 
</div>
<?php }
else { 
echo '<div class="likeUsers" id="likes'.$msg_id.'"></div>';
} ?>
</div>
</div>
<?php } ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$('.like').on("click",function() 
{
var ID = $(this).attr("id");
var sid=ID.split("like"); 
var New_ID=sid[1];
var REL = $(this).attr("rel");
var URL='message_like_ajax.php';
var dataString = 'msg_id=' + New_ID +'&rel='+ REL;
$.ajax({
type: "POST",
url: URL,
data: dataString,
cache: false,
success: function(html){

if(REL=='Like')
{
$("#youlike"+New_ID).slideDown('slow').prepend("<span id='you"+New_ID+"'><a href='#'>You</a> like this.</span>.");
$("#likes"+New_ID).prepend("<span id='you"+New_ID+"'><a href='#'>You</a>, </span>");
$('#'+ID).html('Unlike').attr('rel', 'Unlike').attr('title', 'Unlike');
}
else
{
$("#youlike"+New_ID).slideUp('slow');
$("#you"+New_ID).remove();
$('#'+ID).attr('rel', 'Like').attr('title', 'Like').html('Like');
}

}
});
</script>